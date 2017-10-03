<?php


/*echo $_POST['user_id'];*/

        $url_data = 'https://hondaproject.herokuapp.com/get_doc_of_sel_user/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
        $options_data = array(
          'http' => array(
            'header'  => array(
                          'USER-ID: '.$_POST['user_id'],
                        ),
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        /*var_dump($output_data);*/
        $doc_info = json_decode($output_data,true);

        
$list_doc_id = array();

for($y=0;$y<count($doc_info);$y++){
  /*var_dump($doc_info[$y]['info']['document_name']);*/
  array_push($list_doc_id, $doc_info[$y]['info']['pk']);
}

/*var_dump($list_doc_id);*/



$download_urls= array();

for ($x = 0; $x < count($list_doc_id); $x++) {
    $url_download = 'https://hondaproject.herokuapp.com/download/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
	  $options_download = array(
  		'http' => array(
    		'header'  => array(
                  'DOC-ID: '.$list_doc_id[$x],
                ),
    		'method'  => 'GET',
  		),
  	);
  	$context_download = stream_context_create($options_download);
  	$output_download = file_get_contents($url_download, false,$context_download);
  	/*echo $output_download;*/
	
  	$arr_download = json_decode($output_download,true);
  	$download_urls[$x]=$arr_download[0]['url'];

} 



$files = $download_urls;


$zip = new ZipArchive();


$tmp_file = tempnam('.','');
$zip->open($tmp_file, ZipArchive::CREATE);


foreach($files as $file){


    $download_file = file_get_contents($file);

    $parts = explode("?",$file); 


    $zip->addFromString(basename($parts['0']),$download_file);

}


$zip->close();


header('Content-disposition: attachment; filename=User-ID '.$_POST['user_id'].'.zip');
header('Content-type: application/zip');
readfile($tmp_file);

/*header('location: '.$arr_download[0]['url']);
*/?>