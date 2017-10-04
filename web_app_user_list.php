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
  <title>Vanisha Honda</title>
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
        <h5 style="color:white;">Vanisha Honda</h5>
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
      <a class="mdl-navigation__link" href="employees_details.php">Admin</a>
    </nav>
  </div>
</div>

<div style="margin-top:7%;position: absolute; left: 0; top: 0;width: 100%; height: 10%;display: none;vertical-align: center;" id="loadingPleaseWait">
  <div style="text-align: center;">
    <h4 style="color:black;font-size:14px;">Loading, please wait...</h4>
  </div>
</div>
  
<div class="container">
  <div class="row" id="row1" style="margin: auto;background-color:#607D8B;height:80px;">

    

    <div class="col-sm-1" style="margin-top:3%;">
      <h6 style="margin-top:0%;">Web App</h6>
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
<div class="col-sm-5" style="margin-top:2%">
  <form method="post" action="web_app_user_list.php" name="search_form" id="search_form">
    <!-- <input id="date11" name="date11" value="<?php echo $_POST['date11'] ?>" style="background-color:#E8E8E8;background-image:url(images/calendar-range.png) !important;
    background-size: 20px 20px;background-repeat: no-repeat;text-indent: 22px;font-size:13px" class="date" type="text" placeholder="From: DD/MM/YYYY">
    <input id="date22" name="date22" value="<?php echo $_POST['date22'] ?>" style="background-color:#E8E8E8;background-image:url(images/calendar-range.png) !important;
    background-size: 20px 20px;background-repeat: no-repeat;text-indent: 22px;font-size:13px" class="date" type="text" placeholder="To: DD/MM/YYYY"> -->
    <button onclick="show_wait_msg()" type="submit" class="mdl-button mdl-js-button mdl-button--raised">
      Search
    </button>
  </form>
</div>

<div class="col-sm-1" style="margin-top:2%">
     <form action="web_app_user_list.php">
      <button type="submit" onclick="clear1()" class="mdl-button mdl-js-button mdl-button--raised">Clear</button>
    </form>
</div>

<div class="col-sm-3" style="margin-top:2%">
      <button onclick="open_modal_add()" class="mdl-button mdl-js-button mdl-button--raised">
        Add New Employee 
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
if($_POST['disable_emp_id'] == '' || $_POST['disable_emp_id'] == null){
  /*echo "null";*/
}else{

  /*echo "<script>alert('hi');</script>";*/
  $url_disable = 'https://hondaproject.herokuapp.com/disable_employee/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_disable = array(
    'http' => array(
      'header'  => array(
                    'EMPLOYEE-ID: '.$_POST['disable_emp_id'],
                    ),
      'method'  => 'GET',
    ),
  );
  $context_disable = stream_context_create($options_disable);
  $output_disable = file_get_contents($url_disable, false,$context_disable);
  $disable_info = json_decode($output_disable,true);
}
?>

<?php 
/*if(($_POST['edit_employee_id'] == '' || $_POST['edit_employee_id'] == null)  &&  isset($_POST['edit_emp'])){
 
}*/

if(($_POST['edit_mobile'] == '' || $_POST['edit_mobile'] == 'null') &&  isset($_POST['edit_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Mobile field is required";
}

elseif(preg_match('/[A-Za-z]/', $_POST['edit_mobile'])  && isset($_POST['edit_emp'])) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Mobile no must contain only digits";
}
elseif( (strlen(preg_replace("/[^0-9]/","",$_POST['edit_mobile'])) >15 || strlen(preg_replace("/[^0-9]/","",$_POST['edit_mobile'])) <10) && isset($_POST['edit_emp']) ) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Mobile no. must contain 10-15 digits";
}elseif( $_POST['edit_email'] != '' && !filter_var($_POST['edit_email'], FILTER_VALIDATE_EMAIL) && isset($_POST['edit_emp']) ) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Email id not valid";
}elseif(($_POST['edit_username'] == '' || $_POST['edit_username'] == 'null') &&  isset($_POST['edit_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Username is required";
}elseif(($_POST['edit_password'] == '' || $_POST['edit_password'] == 'null') &&  isset($_POST['edit_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Password is required";
}elseif(($_POST['edit_access_level'] == '' || $_POST['edit_access_level'] == 'null') &&  isset($_POST['edit_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message_edit="Access Level is required";
}elseif(isset($_POST['edit_emp'])){

  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'none';
  });
  </script>";
 /*$error_message_edit=$_POST['edit_emp_id'];*/
 $url_edit_emp_det = 'https://hondaproject.herokuapp.com/edit_employee/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_edit_emp_det = array(
    'http' => array(
      'header'  => array(
                    'EMPLOYEE-ID: '.$_POST['edit_emp_id'],
                    'NAME: '.$_POST['edit_name'],
                    'EMAIL: '.$_POST['edit_email'],
                    'MOBILE: '.$_POST['edit_mobile'],
                    'USERNAME: '.$_POST['edit_username'],
                    'PASSWORD: '.$_POST['edit_password'],
                    'ACCESS-LEVEL: '.$_POST['edit_access_level'],
                    ),
      'method'  => 'GET',
    ),
  );
  $context_edit_emp_det = stream_context_create($options_edit_emp_det);
  $output_edit_emp_det = file_get_contents($url_edit_emp_det, false,$context_edit_emp_det);
  $edit_emp_det_info = json_decode($output_edit_emp_det,true);
}
?>

<?php

if(($_POST['mobile1'] == '' || $_POST['mobile1'] == 'null') &&  isset($_POST['add_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Mobile field is required";
}elseif(!is_numeric($_POST['mobile1']) && isset($_POST['add_emp'])) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Mobile no must contain only digits";
}elseif( (strlen($_POST['mobile1']) >15 || strlen($_POST['mobile1']) <10) && isset($_POST['add_emp']) ) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Mobile no must contain 10-15 digits";
}elseif( $_POST['email1'] != '' && !filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL) && isset($_POST['add_emp']) ) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Email id not valid";
}elseif(($_POST['username1'] == '' || $_POST['username1'] == 'null') &&  isset($_POST['add_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Username is required";
}elseif(($_POST['password1'] == '' || $_POST['password1'] == 'null') &&  isset($_POST['add_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Password is required";
}elseif(($_POST['access_level1'] == '' || $_POST['access_level1'] == 'null') &&  isset($_POST['add_emp'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal_add=document.getElementById('myModal_add');
  modal_add.style.display = 'block';
  });
  </script>";
  $error_message="Access Level is required";
}
elseif(isset($_POST['add_emp'])){
  /*echo $_POST['mobile1'];*/
  $url_add = 'https://hondaproject.herokuapp.com/add_new_employee/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_add = array(
    'http' => array(
      'header'  => array(
                    'NAME: '.$_POST['name1'],
                    'EMAIL: '.$_POST['email1'],
                    'MOBILE: '.$_POST['mobile1'],
                    'USERNAME: '.$_POST['username1'],
                    'PASSWORD: '.$_POST['password1'],
                    'ACCESS-LEVEL: '.$_POST['access_level1']
                    ),
      'method'  => 'GET',
    ),
  );
  $context_add = stream_context_create($options_add);
  $output_add = file_get_contents($url_add, false,$context_add);
  $add_emp_info = json_decode($output_add,true);
  /*var_dump($add_emp_info);*/
}


if($_GET['page_no'] == '' || $_GET['page_no'] == 'null'){
  $page=1;
}else{
  $page=$_GET['page_no'];
}

if($_POST['search_text'] != ''){

        $header=array(
                    'TEXT: '.$_POST['search_text']
                    );


        $url_data = 'https://hondaproject.herokuapp.com/search_employee/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP&page='.$page;
        $options_data = array(
          'http' => array(
            'header'  => $header,
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        $employees_details_info = json_decode($output_data,true);

}else{
      
        $url_data = 'https://hondaproject.herokuapp.com/get_all_employees_details/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP&page='.$page;
        $options_data = array(
          'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        /*var_dump($output_data);*/
        $employees_details_info = json_decode($output_data,true);
        /*var_dump($employees_details_info);*/
}

?>

<!-- <div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table id="example" align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
  <thead>
    <tr>
      <th>User Id</th>
      <th>Employee Id</th>
      <th>Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th>Access Level</th>
      <th>Is Active</th>
      <th>Edit</th>
    </tr>
    <!-- <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr> -->
  </thead>
  <tbody>



   <?php 
      for ($x = 0; $x < count($employees_details_info['response']); $x++) { ?>
              <tr>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_id']) ? "NULL" : $employees_details_info['response'][$x]['user_id']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['employee_details']['pk']) ? "NULL" : $employees_details_info['response'][$x]['employee_details']['pk']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['name']) ? "NULL" : $employees_details_info['response'][$x]['user_details']['name']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['username']) ? "NULL" : $employees_details_info['response'][$x]['user_details']['username']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['password']) ? "NULL" : $employees_details_info['response'][$x]['user_details']['password']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['email']) ? "NULL" : $employees_details_info['response'][$x]['user_details']['email']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['employee_details']['access_level']) ? "NULL" : $employees_details_info['response'][$x]['employee_details']['access_level']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['employee_details']['is_active']) ? "0" : $employees_details_info['response'][$x]['employee_details']['is_active']; ?></td>
                <td><button style="background-color:#607D8B" onclick="<?php echo 'open_modal('.$employees_details_info['response'][$x]['employee_details']['pk'].')' ?>" class="mdl-button mdl-js-button mdl-button--raised">
                  Edit
                </button></td>
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
                for ($x = 0; $x <= $employees_details_info['count']/10; $x++) { ?>
                    <td>
                      <form method="get" action="web_app_user_list.php">
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

<div id="myModal_add" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span style="color:black" class="close_add">×</span>
      <h2 style="text-align:center">Add New Employee</h2>
      <p style="color:red;text-align:center"><?php echo $error_message ?></p>
    </div>
    <div class="modal-body">
      <form id="form1" method="post" action="web_app_user_list.php" style="text-align:center">
          <div class="mdl-textfield mdl-js-textfield">

          <div class="row">
            <div class="col-sm-6" style="">
                <!-- <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="employee_id">Employee Id</label>
                <input class="mdl-textfield__input" type="text" id="employee_id" name="employee_id">
                </div>
 -->
                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="name1">Name</label>
                <input value="<?php echo $_POST['name1'] ?>" class="mdl-textfield__input" type="text" id="name1" name="name1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="email1">Email</label>
                <input value="<?php echo $_POST['email1'] ?>" class="mdl-textfield__input" type="text" id="email1" name="email1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="mobile1">Mobile</label>
                <input value="<?php echo $_POST['mobile1'] ?>" class="mdl-textfield__input" type="text" id="mobile1" name="mobile1">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="username1">Username</label>
                <input value="<?php echo $_POST['username1'] ?>" class="mdl-textfield__input" type="text" id="username1" name="username1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="password1">Password</label>
                <input value="<?php echo $_POST['password1'] ?>" class="mdl-textfield__input" type="text" id="password1" name="password1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="access_level1">Access Level</label>
                <select id="access_level1" name="access_level1">

                <?php if($_POST['access_level1'] != ''){?>
                  <option ng-selected="true" value="<?php echo $_POST['access_level1']; ?>"><?php echo $_POST['access_level1'];
                }?>
                  <option value="">
                  <option value="Sales">Sales
                  <option value="Insurance">Insurance
                  <option value="Admin">Admin
                </select>
                </div>

  
            </div>
          </div>

          </div>
        </form>
    </div>
    <div class="modal-footer">
      <div class="row">
       <!--  <div class="col-sm-4">
          <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Cancel</button>
        </div> -->
        <div class="col-sm-3">
        </div>
        <div class="col-sm-4">
          <button form="form1" name="add_emp" id="add_emp" style="background-color:#607D8B" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save</button>
        </div>
       <!--  <div class="col-sm-2">
          <button style="background-color:red;color:white" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Delete User</button>
        </div> -->
        <div class="col-sm-5">
        </div>
      </div>
    </div>
  </div>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">



<!-- To insert data inside modal -->
<form id="edit_value_form" method="post" action="#">
<input type="hidden" name="emp_id_edit" id="emp_id_edit">
<button type="submit"></button>
</form>

<?php 

if($_POST['emp_id_edit'] == '' || $_POST['emp_id_edit'] == null){

}else{



echo '<script type="text/javascript">',
     'var modal = document.getElementById("myModal");',
     'modal.style.display = "block"',
     '</script>'
;


 $url_sel_emp_det = 'https://hondaproject.herokuapp.com/get_details_from_emp_id/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_sel_emp_det = array(
    'http' => array(
      'header'  => array(
                    'EMP-ID: '.$_POST['emp_id_edit'],
                    ),
      'method'  => 'GET',
    ),
  );
  $context_sel_emp_det = stream_context_create($options_sel_emp_det);
  $output_sel_emp_det = file_get_contents($url_sel_emp_det, false,$context_sel_emp_det);
  $sel_emp_det_info = json_decode($output_sel_emp_det,true);
}
?>
<!-- -Finish inserting data to modal-->

<form action="web_app_user_list.php?page_no=<?php echo $_GET['page_no'] ?>" method="post" name="disable_form" id="disable_form">
<input type="hidden" name="disable_emp_id" id="disable_emp_id">
<button type="submit"></button>
</form>

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span style="color:black" class="close">×</span>
      <h2 style="text-align:center">Edit User</h2>
      <p style="color:red;text-align:center"><?php echo $error_message_edit; ?></p>
    </div>
    <div class="modal-body">
      <form action="web_app_user_list.php?page_no=<?php echo $_GET['page_no'] ?>" method="post" name="form3" id="form3" style="text-align:center">
          <div class="mdl-textfield mdl-js-textfield">

          <div class="row">
            <div class="col-sm-6" style="">
                <!-- <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_employee">Employee Id</label> -->
                <input class="mdl-textfield__input" type="hidden" name="edit_emp_id" id="edit_emp_id" value="<?php echo ( ($_POST['edit_emp_id']) ?: $sel_emp_det_info[0]['emp_id'] ) ?>">
                <!-- </div> -->

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_name">Name</label>
                
                <?php if(isset($_POST['edit_emp'])){
                  $edit_name_1=$_POST['edit_name'];
                }else{
                  $edit_name_1=$sel_emp_det_info[0]['user_details']['name'];
                } ?>
                
                <input class="mdl-textfield__input" type="text" name="edit_name" id="edit_name" value="<?php echo $edit_name_1 ?>"></input>
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_email">Email</label>

                <?php if(isset($_POST['edit_emp'])){
                  $edit_email_1=$_POST['edit_email'];
                }else{
                  $edit_email_1=$sel_emp_det_info[0]['user_details']['email'];
                } ?>

                <input class="mdl-textfield__input" type="text" name="edit_email"id="edit_email" value="<?php echo $edit_email_1 ?>">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_mobile">Mobile</label>

                <?php if(isset($_POST['edit_emp'])){
                  $edit_mobile_1=$_POST['edit_mobile'];
                }else{
                  $edit_mobile_1=$sel_emp_det_info[0]['user_details']['mobile'];

                } ?>

                <input class="mdl-textfield__input" type="text" name="edit_mobile" id="edit_mobile" value="<?php echo $edit_mobile_1 ?>">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_username">Username</label>

                <?php if(isset($_POST['edit_emp'])){
                  $edit_username_1=$_POST['edit_username'];
                }else{
                  $edit_username_1=$sel_emp_det_info[0]['user_details']['username'];
                } ?>

                <input class="mdl-textfield__input" type="text" name="edit_username" id="edit_username" value="<?php echo $edit_username_1 ?>">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_password">Password</label>

                <?php if(isset($_POST['edit_emp'])){
                  $edit_password_1=$_POST['edit_password'];
                }else{
                  $edit_password_1=$sel_emp_det_info[0]['user_details']['password'];
                } ?>

                <input class="mdl-textfield__input" type="text" name="edit_password" id="edit_password" value="<?php echo $edit_password_1 ?>">
                </div>

                

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="edit_access_level">Access Level</label>
                <select id="edit_access_level1" name="edit_access_level">
                
                <?php if(isset($_POST['edit_emp'])){
                  $edit_access_level_1=$_POST['edit_access_level'];
                }else{
                  $edit_access_level_1=$sel_emp_det_info[0]['emp_details']['access_level'];
                } ?>

                <option ng-selected="true" value="<?php echo $edit_access_level_1 ?>"><?php echo $edit_access_level_1; ?>
                

                  <option value="Sales">Sales
                  <option value="Insurance">Insurance
                  <option value="Admin">Admin
                </select>
                </div>

            </div>
          </div>

          </div>
        </form>
    </div>
    <div class="modal-footer">
      <div class="row">
       <!--  <div class="col-sm-4">
          <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Cancel</button>
        </div> -->
        <div class="col-sm-4">
        </div>
        <div class="col-sm-2">
          <button name="edit_emp" id="edit_emp" style="background-color:#607D8B" onclick="show_wait_msg()" type="submit" form="form3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save Changes</button>
        </div>
        <div class="col-sm-2">
          <button style="background-color:red;color:white" type="submit" onclick="<?php echo 'disable_emp('.$sel_emp_det_info[0]['emp_id'].')' ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Delete User</button>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
  </div>

</div>



<script type="text/javascript">
  function disable_emp(emp_id){
   /*alert(user_id);
   alert(emp_id);*/
   document.getElementById('loadingPleaseWait').style.display = 'block';
   
   document.getElementById("disable_emp_id").value = emp_id;
   document.getElementById("disable_form").submit();
   /*modal.style.display = "block";*/
}
</script>



<script>
// Get the modal
var modal_add= document.getElementById('myModal_add');

// Get the button that opens the modal
/*var btn = document.getElementById("myBtn");*/

// Get the <span> element that closes the modal
var span_add = document.getElementsByClassName("close_add")[0];

// When the user clicks the button, open the modal
/*btn.onclick = function() {
    modal.style.display = "block";
}*/

/*document.getElementById("myBtn1").onclick = function() {
    modal.style.display = "block";
}*/

function open_modal_add(){
   modal_add.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span_add.onclick = function() {
    modal_add.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_add) {
        modal_add.style.display = "none";
    }
}
</script> 


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
/*var btn = document.getElementById("myBtn");*/

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
/*btn.onclick = function() {
    modal.style.display = "block";
}*/

/*document.getElementById("myBtn1").onclick = function() {
    modal.style.display = "block";
}*/

function open_modal(emp_id){
   /*alert(user_id);
   alert(emp_id);*/
   document.getElementById('loadingPleaseWait').style.display = 'block';

   document.getElementById("emp_id_edit").value = emp_id;
   document.getElementById("edit_value_form").submit();
   /*modal.style.display = "block";*/
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>   

</body>
</html>

