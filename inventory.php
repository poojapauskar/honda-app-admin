<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['honda_login'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Honda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


<!-- datepicker -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular-aria.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.0.4/angular-material.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.0.4/angular-material.css">
<script src="js/datepicker.js"></script>   


  <script src="js/material.min.js"></script>
  <link rel="stylesheet" href="css/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- search functionality -->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/search.css">
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/search.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- modal -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- export -->
<!-- <link rel="stylesheet" href="css/datatable.css"> -->
<!-- <script src="js/jquery1.js"></script> -->
<script src="js/jquery2.js"></script>
<script src="js/table2excel.js"></script>
<script src="js/exportscript.js"></script>

<script type="text/javascript">
function hide_wait_msg ()
{
    document.getElementById('loadingPleaseWait').style.display = 'none';
}

function show_wait_msg ()
{
     document.getElementById('loadingPleaseWait').style.display = 'block';
}

</script>
<style type="text/css">
 .mdl-textfield {
    position: relative;
    font-size: 16px;
    display: inline-block;
    box-sizing: border-box;
    width: 260px;
    max-width: 105%;
    margin-left: 2%;
    padding: 20px 0;
}
button.close{
  color: black!important;
}
</style>
</head>
<body ng-app="" style="background-color:#E8E8E8;overflow-x:hidden" onload="hide_wait_msg()">

<?php
/*$url_check_wether_login = 'https://hondaproject.herokuapp.com/update_logged_in/check/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
$options_check_wether_login = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'GET',
  ),
);
$context_check_wether_login = stream_context_create($options_check_wether_login);
$output_check_wether_login = file_get_contents($url_check_wether_login, false,$context_check_wether_login);
$arr_check_wether_login = json_decode($output_check_wether_login,true);
if($arr_check_wether_login['status'] != 200){
  echo "<script>location='index.php'</script>";
}*/
?>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header style="background-color:#607D8B;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="admin_panel.php">
      <img style="margin-top:5%" src="images/Different-Honda-Logo.png"></img>
      </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <h5 style="color:white;">Honda</h5>
        <a href="logout.php"><img class="logout_btn" src="images/logout.png"></img></a>
      </nav>

    </div>
  </header>
  <div class="mdl-layout__drawer">
    <img style="margin-top:10%;margin-left:20%;width:25%" src="images/Different-Honda-Logo.png"></img>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="inventory.php">Enquiry</a>
      <a class="mdl-navigation__link" href="test_ride.php">Test Rides</a>
      <a class="mdl-navigation__link" href="bookings.php">Bookings</a>
      <a class="mdl-navigation__link" href="finance.php">Finance Requests</a>
      <a class="mdl-navigation__link" href="insurance.php">Insurance Renewal</a>
      <a class="mdl-navigation__link" href="service_requests.php">Service Requests</a>
      <a class="mdl-navigation__link" href="inventory.php">Inventory</a>
      <a class="mdl-navigation__link" href="customer_database.php">Customer Database</a>
      <a class="mdl-navigation__link" href="push_notification.php">Mobile App</a>
      <a class="mdl-navigation__link" href="web_app_user_list.php">Admin</a>
    </nav>
  </div>
</div>

<div style="margin-top:7%;position: absolute; left: 0; top: 0;width: 100%; height: 10%;display: none;vertical-align: center;" id="loadingPleaseWait">
  <div style="text-align: center;">
    <h4 style="color:black;font-size:14px;">Loading, please wait...</h4>
  </div>
</div>
  
<div class="container">
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" style="background-color: #607D8B;position:absolute;margin-top: 161px;margin-left: 7%;" data-toggle="modal" data-target="#myModal">Add New Inventory</button>

  <div class="row" id="row1" style="margin: auto;background-color:#607D8B;height:80px;">
    <div class="col-sm-1" style="margin-top:3%;">
      <h6 style="margin-top:0%;">Insurance</h6>
    </div>

    <div class="col-sm-2" style="margin-top:3%">
      <form action="#" style="margin-top:-20%">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search_text">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input form="search_form" class="search mdl-textfield__input" value="<?php echo $_POST['search_text'] ?>" type="text" id="search_text" name="search_text">            
            <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
          </div>
        </div>
      </form>
    </div>


<!-- <html ng-app="datepickerBasicUsage">
<div ng-controller="AppCtrl" style=''>
    <md-content>
      From <md-datepicker ng-model="myDate1" md-placeholder="Enter date"></md-datepicker>
      To <md-datepicker ng-model="myDate2" md-placeholder="Enter date"></md-datepicker>
    </md-content>
  </div> -->
<div class="col-sm-6" style="margin-top:2%">
  <form method="post" action="inventory.php" name="search_form" id="search_form">
    <input id="date11" name="date11" value="<?php echo $_POST['date11'] ?>" style="background-color:#E8E8E8;background-image:url(images/calendar-range.png) !important;
    background-size: 20px 20px;background-repeat: no-repeat;text-indent: 22px;font-size:13px" class="date" type="text" placeholder="From: DD/MM/YYYY">
    <input id="date22" name="date22" value="<?php echo $_POST['date22'] ?>" style="background-color:#E8E8E8;background-image:url(images/calendar-range.png) !important;
    background-size: 20px 20px;background-repeat: no-repeat;text-indent: 22px;font-size:13px" class="date" type="text" placeholder="To: DD/MM/YYYY">
    <button onclick="show_wait_msg()" type="submit" class="mdl-button mdl-js-button mdl-button--raised">
      Search
    </button>
  </form>
</div>

<div class="col-sm-1" style="margin-top:2%">
    <form action="inventory.php">
      <button type="submit" onclick="clear1()" class="mdl-button mdl-js-button mdl-button--raised">Clear</button>
    </form>
</div>

    <div class="col-sm-1" style="margin-top:2%">
      <button id="btn-export" class="mdl-button mdl-js-button mdl-button--raised">
        Export/Print
      </button>
    </div>
    <!-- <div class="col-sm-1">
      <button class="mdl-button mdl-js-button mdl-button--raised">
        Add New
      </button>
    </div> -->
  </div>
</div>

    <!-- Textfield with Floating Label -->
<script type="text/javascript">
  function clear1(){
    document.getElementById('loadingPleaseWait').style.display = 'block';
    $('#search_text').val('');
    $('#date11').val('');
    $('#date22').val('');
    /*var table1 = document.getElementById("example");
    for (var j = 1, row; row = table1.rows[j]; j++) {
         table1.rows[j].style.display = "";
    } */
   
  }
</script>
<!-- DatePicker And Sorting -->

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( ".date" ).datepicker({ dateFormat: 'dd/mm/yy' });
  });
  </script>

<script>

function myFunction() {

   var table = document.getElementById("example");
   for (var i = 1, row; row = table.rows[i]; i++) {


      if(document.getElementById('date11').value !== '' && document.getElementById('date22').value !== '')
      {
        var dateFrom=document.getElementById('date11').value;
        var dateTo=document.getElementById('date22').value;
        var dateCheck=row.cells[4].innerText;

        var d1 = dateFrom.split("/");
        var d2 = dateTo.split("/");
        var c = dateCheck.split("/");

        var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]); 
        var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
        var check = new Date(c[2], parseInt(c[1])-1, c[0]);

        console.log(check > from && check < to)

        if(check > from && check < to){ /*alert("bot are equal");*/}
        else{
         table.rows[i].style.display = "none";
         /*alert("bot are unequal");*/
        } 
      }
  }
}

/*when both dates are empty display all data*/
$('.date').blur(function()
{
    var value11=$.trim($("#date11").val());
    var value22=$.trim($("#date22").val());

    if(value11.length==0 && value22.length==0)
    {
             var table1 = document.getElementById("example");
             for (var j = 1, row; row = table1.rows[j]; j++) {
                   table1.rows[j].style.display = "";
             } 
            /* alert("hello");*/
             
    }
});
</script>

<!-- End Datepicker and sorting -->

<script type="text/javascript">
  $(window).on('hashchange', function() {
     /* alert((document.location.hash).replace('#',''))*/
});
</script>


<?php

if(isset($_POST['add_vehicle'])){

session_start();
  $url = 'https://hondaproject.herokuapp.com/vehicle_inventory/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';

  $data = array('account_token' => $_SESSION['organization_account_token'],
                'batch_no' => $_POST['batch_no'],
                'colour' => $_POST['colour'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'engine_displacement' => $_POST['eng_disp'],
                'power' => $_POST['power'],
                'torque' => $_POST['torque'],
                'mileage' => $_POST['mileage'],
                'length' => $_POST['length'],
                'width' => $_POST['width'],
                'height' => $_POST['height'],
                'front_suspension' => $_POST['front_susp'],
                'rear_suspension' => $_POST['rear_susp'],
                'wheel_base' => $_POST['wheel_base'],
                'ground_clearance' => $_POST['grnd_clear'],
                'kerb_tank' => $_POST['kerb_tank'],
                'fuel_tank_capacity' => $_POST['fuel_cap'],
                'engine_type' => $_POST['eng_typ'],
                'bore' => $_POST['bore'],
                'stroke' => $_POST['stroke'],
                'compression_ratio' => $_POST['comp_ratio'],
                'valve_system' => $_POST['val_sys'],
                'no_of_gears' => $_POST['no_gears'],
                'gear_pattern' => $_POST['gear_pat'],
                'max_speed' => $_POST['max_speed'],
                'tyre_size_front' => $_POST['tyre_size_front'],
                'tyre_size_rear' => $_POST['tyre_size_rear'],
                'tyre_type_front' => $_POST['tyre_type_front'],
                'tyre_type_rear' => $_POST['tyre_type_rear'],
                'brake_type_size_front' => $_POST['brake_type_front'],
                'brake_type_size_rear' => $_POST['brake_type_rear'],
                'frame_type' => $_POST['frame_type'],
                'frame_type_front' => $_POST['frame_type_front'],
                'frame_type_rear' => $_POST['frame_type_rear'],
                'battery' => $_POST['battery'],
                'head_lamp' => $_POST['head_lamp'],
                'type_id' => $_POST['typ_id'],
                'v_id' => $_POST['v_id'],
                'vehicle_code' => $_POST['veh_code'],
                'vehicle' => $_POST['vehicle'],
                'vehicle_type' => $_POST['veh_typ'],
                'engine_no' => $_POST['eng_no'],
                'chassis_no' => $_POST['chassis_no'],
                'invoice_no' => $_POST['inv_no'],
                'inward_date' => $_POST['inw_date'],
                'specification' => $_POST['spec'],
                'reg_no' => $_POST['reg_no']
                );
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data),
    ),
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
 


require 'Cloudinary.php';
require 'Uploader.php';
require 'Api.php';

\Cloudinary::config(array( 
  "cloud_name" => "hdccr1s1j", 
  "api_key" => "219691739346645", 
  "api_secret" => "xvNdA4XHLveENkYKCgbxEN1SqkM" 
));

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';


for ($i = 0; $i < 6; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
$randomString='id'.$randomString;


\Cloudinary\Uploader::upload($_FILES["fileToUpload"]["tmp_name"],
    array(
       "public_id" => "honda/".$randomString
    ));


$url_img = 'https://hondaproject.herokuapp.com/save_vehicle_images/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';

$options_img = array(
  'http' => array(
    'header'  => array(
                   'V-ID: '.$_POST['v_id'],
                   'LINK: '.$randomString
                 ),
    'method'  => 'GET',
  ),
);
  $context_img  = stream_context_create($options_img);
  $result_img = file_get_contents($url_img, false, $context_img);



}

?>


<?php

if($_GET['page_no'] == '' || $_GET['page_no'] == 'null'){
  $page=1;
}else{
  $page=$_GET['page_no'];
}

if($_POST['search_text'] != '' || ($_POST['date11'] != '' && $_POST['date22'] != '')){
  
        if($_POST['search_text'] != '' && $_POST['date11'] != '' && $_POST['date22'] != ''){
           $header=array(
                          'TEXT: '.$_POST['search_text'],
                          'FROM-DATE: '.$_POST['date11'],
                          'TO-DATE: '.$_POST['date22'],
                          'ACCOUNT-TOKEN: '.$_SESSION['organization_account_token']
                          );
        }
        if($_POST['date11'] != '' && $_POST['date22'] != '' && $_POST['search_text'] == ''){
            $header=array(
                          'FROM-DATE: '.$_POST['date11'],
                          'TO-DATE: '.$_POST['date22'],
                          'ACCOUNT-TOKEN: '.$_SESSION['organization_account_token']
                          );
        }
        if($_POST['search_text'] != '' && $_POST['date11'] == '' && $_POST['date22'] == ''){
           $header=array(
                          'TEXT: '.$_POST['search_text'],
                          'ACCOUNT-TOKEN: '.$_SESSION['organization_account_token']
                          );
        }

        $url_data = 'https://hondaproject.herokuapp.com/search_inventory/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP&page='.$page;
        $options_data = array(
          'http' => array(
            'header'  => $header,
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        $inventory_info = json_decode($output_data,true);

}else{
      $url_data = 'https://hondaproject.herokuapp.com/get_all_inventory/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP&page='.$page;
      $options_data = array(
        'http' => array(
          'header'  => array(
                            "ACCOUNT-TOKEN: ".$_SESSION['organization_account_token']
                        ),
          'method'  => 'GET',
        ),
      );
      $context_data = stream_context_create($options_data);
      $output_data = file_get_contents($url_data, false,$context_data);
      // var_dump($output_data);
      $inventory_info = json_decode($output_data,true);
      /*var_dump($inventory_info);*/
}

?>

<?php
session_start();
// echo $_SESSION['organization_account_token'];
$url_types = 'https://hondaproject.herokuapp.com/get_vehicle_types_from_token/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
$options_types = array(
  'http' => array(
    'header'  => array(
                   'ACCOUNT-TOKEN: '.$_SESSION['organization_account_token']
                 ),
    'method'  => 'GET',
  ),
);
$context_types = stream_context_create($options_types);
$output_types = file_get_contents($url_types, false,$context_types);
/*var_dump($output_types);*/
$arr_types = json_decode($output_types,true);
?>



<!-- <div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table id="example" align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
  <thead>
    <tr>
      <th>Vehicle No.</th>
      <th>Vehicle</th>
      <th>Chassis No.</th>
      <th>Invoice No.</th>
      <th>Inward Date</th>
      <th>EDIT</th>
    </tr>
    <!-- <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr> -->
  </thead>
  <tbody>
   <?php 
      for ($x = 0; $x < count($inventory_info['response']); $x++) { ?>
              <tr>
                <td align="left"><?php echo empty($inventory_info['response'][$x]['inventory_details']['engine_no']) ? "NULL" : $inventory_info['response'][$x]['inventory_details']['engine_no']; ?></td>
                <td align="left"><?php echo empty($inventory_info['response'][$x]['inventory_details']['vehicle']) ? "NULL" : $inventory_info['response'][$x]['inventory_details']['vehicle']; ?></td>
                <td align="left"><?php echo empty($inventory_info['response'][$x]['inventory_details']['chassis_no']) ? "NULL" : $inventory_info['response'][$x]['inventory_details']['chassis_no']; ?></td>
                <td align="left"><?php echo empty($inventory_info['response'][$x]['inventory_details']['invoice_no']) ? "NULL" : $inventory_info['response'][$x]['inventory_details']['invoice_no']; ?></td>
                <td style="text-overflow:initial;overflow:initial;white-space:initial;" align="left"><?php echo empty($inventory_info['response'][$x]['inventory_details']['inward_date']) ? "NULL" : $inventory_info['response'][$x]['inventory_details']['inward_date']; ?></td>
               <!--  edit button -->
                 <td><button type="button" class="btn btn-success" style="color:white;" data-toggle="modal" data-target="#myyModal<?php echo $x ?>">Edit</button>
                
                <div class="modal fade" id="myyModal<?php echo $x ?>" role="dialog" >
                <div class="modal-dialog" style="margin-top:11%">
                <div class="modal-content" style="width:100%">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4> 
              </div>
              <div class="modal-body">
              <form enctype="multipart/form-data" action="inventory.php" method="post">
        
            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['vehicle']  ?>" class="mdl-textfield__input" type="text" id="vehicle_edit" name="vehicle_edit" required>
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Vehicle</label>
          </div>

        

          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['v_id']  ?>" class="mdl-textfield__input" type="text" id="v_id_edit" name="v_id_edit" required>
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">V id</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input type="file" name="fileToUpload" id="fileToUpload" required>
          </div>

          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="veh_typ_edit" name="veh_typ_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Vehicle type</label>
          </div>
          

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['engine_no']?>" class="mdl-textfield__input" type="text" id="eng_no_edit" name="eng_no_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Engine no</label>
          </div>

          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['chassis_no'] ?>" class="mdl-textfield__input" type="text" id="chassis_no_edit" name="chassis_no_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Chassis no</label>
          </div>
          
            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['invoice_no']?>" class="mdl-textfield__input" type="text" id="inv_no_edit" name="inv_no_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Invoice no</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['inward_date'] ?> " class="mdl-textfield__input" type="text" id="inw_date_edit" name="inw_date_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Inward date</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="batch_no_edit" name="batch_no_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Batch no.</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['colour']  ?>" class="mdl-textfield__input" type="text" id="colour_edit" name="colour_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Colour</label>
          </div>

           <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="description_edit" name="description_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Description</label>
          </div>

          <br>
           <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="price_edit" name="price_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Price</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="eng_disp" name="eng_disp">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Engine displacement</label>
          </div>

          <br>
           <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="power_edit" name="power_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Power</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="torque_edit" name="torque_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Torque</label>
          </div>
          <br>
          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="mileage_edit" name="mileage_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Mileage</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="length_edit" name="length_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Length</label>
          </div>

          <br>
          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="width_edit" name="width_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Width</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="height_edit" name="height_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Height</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="front_susp_edit" name="front_susp_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Front suspension</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="rear_susp_edit" name="rear_susp_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Rear suspension</label>
          </div>
          <br>

           <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="wheel_base" name="wheel_base">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Wheel base</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="grnd_clear_edit" name="grnd_clear_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Ground clearance</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="kerb_tank_edit" name="kerb_tank_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Kerb tank</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="fuel_cap_edit" name="fuel_cap_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Fuel tank capacity</label>
          </div>
          <br>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="eng_typ_edit" name="eng_typ_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Engine type</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="bore_edit" name="bore_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Bore</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="stroke_edit" name="stroke_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Stroke</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="comp_ratio_edit" name="comp_ratio_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Compression ratio</label>
          </div>
          <br>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="val_sys_edit" name="val_sys_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Valve system</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="no_gears_edit" name="no_gears_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">No of gears</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="gear_pat_edit" name="gear_pat_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Gear pattern</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="max_speed_edit" name="max_speed_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Max speed</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_size_frnt_edit" name="tyre_size_frnt_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Tyre size front</label>
          </div>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_size_rear_edit" name="tyre_size_rear_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Tyre size rear</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_type_front_edit" name="tyre_type_front_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Tyre type front</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_type_rear_edit" name="tyre_type_rear_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Tyre type rear</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="brake_type_front_edit" name="brake_type_front_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Brake type size front</label>
          </div>


            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="brake_type_rear_edit" name="brake_type_rear_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Brake type size rear</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="frame_type_edit" name="frame_type_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Frame type</label>
          </div>


          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="frame_type_front_edit" name="frame_type_front_edit">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Frame type front</label>
          </div>
          <br>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="frame_type_rear_edit" name="frame_type_rear_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Frame type rear</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="battery_edit" name="battery_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Battery</label>
          </div>
          <br>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="head_lamp_edit" name="head_lamp_edit">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Head lamp</label>
          </div>



          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="veh_code_edit" name="veh_code_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Vehicle code</label>
          </div>
          <br>


          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="spec_edit" name="spec_edit">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Specification</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="<?php echo $inventory_info['response'][$x]['inventory_details']['reg_no']  ?>" class="mdl-textfield__input" type="text" id="reg_no_edit" name="reg_no_edit">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Reg no</label>
          </div>


          <br>

        <center>
       <button type="submit" name="edit" class="btn-success" style="background-color: #607D8B !important;">Save</button></center>

      </form>
          </div>
          </div>
          </div>
          
</div>
</div>
</td>
              </tr> 
    <?php  } 
    ?> 

  </tbody>
</table>

<div class="no-result">
    <p id="no_res">No result</p>
</div>

<div style="text-align:center">
  <ul class="pagination"  style="overflow-x:auto;overflow-y:hidden;max-width:239px;">

      <table>
          <tr>
            <?php 
                for ($x = 0; $x <= $inventory_info['count']/10; $x++) { ?>
                    <td>
                      <form method="get" action="inventory.php">
                        <input type="hidden" name="page_no" value=<?php echo $x+1 ?>>
                        <button style="background-color:#607D8B" class="mdl-button mdl-js-button mdl-button--raised" type="submit"><?php echo $x+1 ?></button>
                      </form>
                    </td>
            <?php  } 
              ?>
      </tr>
      </table>
    <!-- <li><a href="customer_database.php#page=2">2</a></li>
    <li><a href="customer_database.php#page=3">3</a></li>
    <li><a href="customer_database.php#page=4">4</a></li>
    <li><a href="customer_database.php#page=5">5</a></li> -->
  </ul>

</div>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Inventory</h4>
        </div>
        <div class="modal-body" >
        <!-- <center> -->
         <form enctype="multipart/form-data" action="inventory.php" method="post">
        
            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="vehicle" name="vehicle" required>
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Vehicle</label>
          </div>

         <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <select style="" class="mdl-selectfield__select"  name="typ_id" id="typ_id">
                      <?php for($x=0;$x<count($arr_types);$x++){?>
                        <option style="color:#F1524B" value="<?php echo $arr_types[$x]['type_id'] ?>"><?php echo $arr_types[$x]['vehicle_type'] ?></option>
                      <?php } ?>


                  </select>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="v_id" name="v_id" required>
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">V id</label>
          </div>

          <!--  <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input type="file" name="fileToUpload" id="fileToUpload" required>
          </div> -->

          <div class="input_fields_container">
      <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input type="file" name="fileToUpload[]" id="fileToUpload" required></div>
          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"> <button class="btn btn-sm btn-primary add_more_button">Add More Fields</button></div>
      </div>
    </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="veh_typ" name="veh_typ">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Vehicle type</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="eng_no" name="eng_no">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Engine no</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="chassis_no" name="chassis_no">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Chassis no</label>
          </div>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="inv_no" name="inv_no">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Invoice no</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="inw_date" name="inw_date">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Inward date</label>
          </div>
           
         <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="batch_no" name="batch_no">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Batch no.</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="colour" name="colour">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Colour</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="description" name="description">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Description</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="price" name="price">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Price</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="eng_disp" name="eng_disp">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Engine displacement</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="power" name="power">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Power</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="torque" name="torque">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Torque</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="mileage" name="mileage">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Mileage</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="length" name="length">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Length</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="width" name="width">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Width</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="height" name="height">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Height</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="front_susp" name="front_susp">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Front suspension</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="rear_susp" name="rear_susp">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Rear suspension</label>
          </div>

           <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="wheel_base" name="wheel_base">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Wheel base</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="grnd_clear" name="grnd_clear">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Ground clearance</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="kerb_tank" name="kerb_tank">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Kerb tank</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="fuel_cap" name="fuel_cap">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Fuel tank capacity</label>
          </div>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="eng_typ" name="eng_typ">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Engine type</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="bore" name="bore">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Bore</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="stroke" name="stroke">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Stroke</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="comp_ratio" name="comp_ratio">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Compression ratio</label>
          </div>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="val_sys" name="val_sys">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Valve system</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="no_gears" name="no_gears">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">No of gears</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="gear_pat" name="gear_pat">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Gear pattern</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="max_speed" name="max_speed">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Max speed</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_size_frnt" name="tyre_size_frnt">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Tyre size front</label>
          </div>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_size_rear" name="tyre_size_rear">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Tyre size rear</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_type_front" name="tyre_type_front">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Tyre type front</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="tyre_type_rear" name="tyre_type_rear">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Tyre type rear</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="brake_type_front" name="brake_type_front">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Brake type size front</label>
          </div>


            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="brake_type_rear" name="brake_type_rear">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Brake type size rear</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="frame_type" name="frame_type">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Frame type</label>
          </div>


          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="frame_type_front" name="frame_type_front">
            <label class="mdl-textfield__label" for="email" style="color:#cccccc;">Frame type front</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="frame_type_rear" name="frame_type_rear">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Frame type rear</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="battery" name="battery">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Battery</label>
          </div>

            <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input value="" class="mdl-textfield__input" type="text" id="head_lamp" name="head_lamp">
            <label class="mdl-textfield__label" for="name" style="color:#cccccc;">Head lamp</label>
          </div>



          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="veh_code" name="veh_code">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Vehicle code</label>
          </div>


          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="spec" name="spec">
            <label class="mdl-textfield__label" for="mobile" style="color:#cccccc;">Specification</label>
          </div>

          <div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <input value="" class="mdl-textfield__input" type="text" id="reg_no" name="reg_no">
            <label class="mdl-textfield__label" for="address" style="color:#cccccc;">Reg no</label>
          </div>
          <br>

        <center>
       <button type="submit" name="add_vehicle" name="add_vehicle" class="btn btn-sm btn-primary" style="background-color: #607D8B !important;">Add Inventory</button></center>

      </form>
    
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>
 
</body>
<script>
    $(document).ready(function() {
    var max_fields_limit      = 10; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
        e.preventDefault();
        if(x < max_fields_limit){ //check conditions
            x++; //counter increment
            $('.input_fields_container').append('<div><div style="margin-top:-2%" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input type="file" name="fileToUpload[]" id="fileToUpload" required></div><a href="#" class="remove_field" style="margin-left:7%"><img src="images/del24.png"></a></div>'); //add input field
        }
    });  
    $('.input_fields_container').on("click",".remove_field", function(e){ //user click on remove text links
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
</html>

