<?php

$url_logged = 'https://hondaproject.herokuapp.com/logout/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
$options_logged = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'GET',
  ),
);
$context_logged = stream_context_create($options_logged);
$output_logged = file_get_contents($url_logged, false,$context_logged);
/*echo $output2;*/
$arr_logged = json_decode($output_logged,true);

echo "<script>location='index.php'</script>";
?>