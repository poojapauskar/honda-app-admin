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
<link rel="stylesheet" href="css/search2.css">
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/search.js"></script>
<script src="js/search2.js"></script>


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
  <div class="row" id="row1" style="margin: auto;background-color:#607D8B;height:80px;">

    

    <div class="col-sm-1" style="margin-top:3%;">
      <h6 style="margin-top:0%;">Push Notifications</h6>
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
  <form method="post" action="push_notification.php" name="search_form" id="search_form">
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
     <form action="push_notification.php">
      <button type="submit" onclick="clear1()" class="mdl-button mdl-js-button mdl-button--raised">Clear</button>
    </form>
</div>

    <div class="col-sm-2" style="margin-top:2%">
      <button name="new_push_button" id="new_push_button" style="font-size:10px !important;line-height:12px;text-overflow:initial;overflow:initial;white-space:initial;" onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
       New Push Notification
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
        $url_list = 'https://hondaproject.herokuapp.com/get_list_to_select_specific_user/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
        $options_list = array(
          'http' => array(
            /*'header'  => "Content-type: application/x-www-form-urlencoded\r\n",*/
            'method'  => 'GET',
          ),
        );
        $context_list = stream_context_create($options_list);
        $output_list = file_get_contents($url_list, false,$context_list);
        /*var_dump($output_list);*/
        $list_info = json_decode($output_list,true);
        /*var_dump($list_info[0]['vehicle_details']['inward_date']);*/
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
                          'TO-DATE: '.$_POST['date22']
                          );
        }
        if($_POST['date11'] != '' && $_POST['date22'] != '' && $_POST['search_text'] == ''){
            $header=array(
                          'FROM-DATE: '.$_POST['date11'],
                          'TO-DATE: '.$_POST['date22']
                          );
        }
        if($_POST['search_text'] != '' && $_POST['date11'] == '' && $_POST['date22'] == ''){
           $header=array(
                          'TEXT: '.$_POST['search_text']
                          );
        }

        $url_data = 'https://hondaproject.herokuapp.com/search_push_notification/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP&page='.$page;
        $options_data = array(
          'http' => array(
            'header'  => $header,
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        $push_notifications_info = json_decode($output_data,true);

}else{
      
        $url_data = 'https://hondaproject.herokuapp.com/get_all_push_notifications/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP&page='.$page;
        $options_data = array(
          'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET',
          ),
        );
        $context_data = stream_context_create($options_data);
        $output_data = file_get_contents($url_data, false,$context_data);
        /*var_dump($output_data);*/
        $push_notifications_info = json_decode($output_data,true);
        /*var_dump($push_notifications_info);*/
}

?>

<?php
if(isset($_POST['pn_submit']) && !isset($_POST['select'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message="Select All Users or Specific User";
}elseif($_POST['to'] == '' && isset($_POST['pn_submit']) && ($_POST['select']=="specific_user")){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message="To field is required";
}elseif($_POST['template'] == '' && $_POST['customized'] == ''  && isset($_POST['pn_submit'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message="Either template or customized field is required";
}elseif($_POST['template'] != '' && $_POST['customized'] != ''  && isset($_POST['pn_submit'])){
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
  $error_message="Both template and customized cannot be set";
}elseif(isset($_POST['pn_submit'])){
  /*Push notification code here*/
  $url_push_noti = 'https://hondaproject.herokuapp.com/send_push_message/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_push_noti = array(
    'http' => array(
      'header'  => array(
                  'ALL-OR-SPECIFIC: '.$_POST['select'],
                  'TO-ID: '.$_POST['to_id'],
                  'TEMPLATE: '.$_POST['template'],
                  'CUSTOMIZED: '.$_POST['customized'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_push_noti = stream_context_create($options_push_noti);
  $output_push_noti = file_get_contents($url_push_noti, false,$context_push_noti);
  $send_notification = json_decode($output_push_noti,true);
}
?>

<?php 
if(isset($_POST['list_submit'])){
  foreach($_POST['check_list'] as $selected){
    /*echo $selected."</br>";*/
  }
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  var modal=document.getElementById('myModal');
  modal.style.display = 'block';
  });
  </script>";
}
?>

<!-- <div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table id="example" align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
  <thead>
    <tr>
      <th>Name</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Type</th>
      <th>Date</th>
      <th>Time</th>
      <th>Message</th>
    </tr>
    <!-- <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr> -->
  </thead>
  <tbody>
   <?php 
      for ($x = 0; $x < count($push_notifications_info['response']); $x++) { ?>
              <tr>
                <td align="left"><?php echo empty($push_notifications_info['response'][$x]['user_details']['name']) ? "All Users" : $push_notifications_info['response'][$x]['user_details']['name']; ?></td>
                <td align="left"><?php echo empty($push_notifications_info['response'][$x]['user_details']['mobile']) ? "NULL" : $push_notifications_info['response'][$x]['user_details']['mobile']; ?></td>
                <td align="left"><?php echo empty($push_notifications_info['response'][$x]['user_details']['email']) ? "NULL" : $push_notifications_info['response'][$x]['user_details']['email']; ?></td>
                <td align="left"><?php echo empty($push_notifications_info['response'][$x]['push_notifications_details']['notification_type']) ? "NULL" : $push_notifications_info['response'][$x]['push_notifications_details']['notification_type']; ?></td>
                <td style="text-overflow:initial;overflow:initial;white-space:initial;" align="left"><?php echo empty($push_notifications_info['response'][$x]['push_notifications_details']['date']) ? "NULL" : $push_notifications_info['response'][$x]['push_notifications_details']['date']; ?></td>
                <td align="left"><?php echo empty($push_notifications_info['response'][$x]['push_notifications_details']['time']) ? "NULL" : $push_notifications_info['response'][$x]['push_notifications_details']['time']; ?></td>
                <td align="left"><?php echo empty($push_notifications_info['response'][$x]['push_notifications_details']['message']) ? "NULL" : $push_notifications_info['response'][$x]['push_notifications_details']['message']; ?></td>
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
                for ($x = 0; $x <= $push_notifications_info['count']/10; $x++) { ?>
                    <td>
                      <form method="get" action="push_notification.php">
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


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span style="color:black" class="close">×</span>
      <h2 style="text-align:center">New Push Notification</h2>
      <p style="color:red;text-align:center"><?php echo $error_message ?></p>
    </div>
    <div class="modal-body">
      <form id="pn_form" name="pn_form" action="push_notification.php" method="post" style="text-align:center">
          <div class="mdl-textfield mdl-js-textfield">

          <div class="row">

<div style="text-align:left">

<div class="row">
 <div class="col-sm-6">

  <?php if($_POST['select'] == "all_users"){
    $check1="true";
  }?>
  <input type="radio" ng-checked=<?php echo $check1 ?> ng-model="myVar" name="select" value="all_users">All Users<br>
 </div>
 <div class="col-sm-6">

  <?php if($_POST['check_list'] != null || $_POST['select'] == "specific_user"){
    $check2="true";
  }?>
  <input type="radio" ng-checked=<?php echo $check2 ?> ng-model="myVar" name="select" value="specific_user">Specific User
 </div>
</div>

</div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="to">To<button type="button" onclick="open_list()" style="margin-left:170px;font-weight:normal;background-color:#607D8B">Select List</button></label>
                
                <?php 
                  $list="";
                  $list_id="";
                
                  if(isset($_POST['check_list'])){
                    foreach($_POST['check_list'] as $selected){

                          $url_get_name_from_id = 'https://hondaproject.herokuapp.com/get_user_name_from_id/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
                          $options_get_name_from_id = array(
                            'http' => array(
                              'header'  => array(
                                          'USER-ID: '.$selected,
                                        ),
                              'method'  => 'GET',
                            ),
                          );
                          $context_get_name_from_id = stream_context_create($options_get_name_from_id);
                          $output_get_name_from_id = file_get_contents($url_get_name_from_id, false,$context_get_name_from_id);
                          $get_name_from_id = json_decode($output_get_name_from_id,true);

                          /*echo $selected."</br>";*/
                          $list=$list.",".$get_name_from_id[0]['name'];

                          $list_id=$list_id.",".$selected;
                    }


                    $list = ltrim($list, ',');
                    $list_id = ltrim($list_id, ',');

                  }elseif(isset($_POST['to'])){
                    $list=$_POST['to'];
                    $list_id=$_POST['to_id'];
                  }?>

                 <input class="mdl-textfield__input" value="<?php echo $list; ?>" type="text" id="to" name="to">
                  
                 <input class="mdl-textfield__input" value="<?php echo $list_id; ?>" type="hidden" id="to_id" name="to_id">
                
                </div>

                

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="template">Template</label>
                <select id="template" name="template">
                  
                <?php if($_POST['template'] != ''){?>
                  <option ng-selected="true" value="<?php echo $_POST['template']; ?>"><?php echo $_POST['template'];
                }?>
                  <option value="">Select Template
                  <option value="Hello">Hello
                  <option value="Good Morning">Good Morning
                  <option value="New Offers">New Offers
                </select>
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="customized">Customized</label>
                <textarea class="mdl-textfield__input" placeholder="Please type your message or select from template" type="text" name="customized" id="customized"><?php echo $_POST['customized']; ?></textarea>
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
          <button id="pn_submit" name="pn_submit" type="pn_submit" form="pn_form" style="background-color:#607D8B" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Send</button>
        </div>
        <div class="col-sm-2">
          <button style="background-color:red;color:white" type="button" class="cancel mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Cancel</button>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
    </div>
  </div>

</div>

<!-- The Modal -->
<div id="list_modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="background-color:transparent">
    <!-- <div class="modal-header"> -->
      <!-- <span style="color:black" class="close_list">×</span> -->
    <!-- </div> -->
    <!-- <div class="modal-body"> -->

<div class="container" style="margint-left:-20%;margin-top:-10%">
  <div class="row" id="row4" style="background-color:#607D8B;height:80px;width:965px">

    

    <div class="col-sm-1" style="margin-top:3%;">
      <h6 style="margin-top:0%;">Search</h6>
    </div>

<div class="col-sm-2" style="margin-top:3%;">
      <form action="#" style="margin-top:-20%">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search_text2">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="search2 mdl-textfield__input" value="<?php echo $_POST['search_text2'] ?>" type="text" id="search_text2" name="search_text2">            
            <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
          </div>
        </div>
      </form>
    </div>


  </div>
</div>



<table id="list"  style="margin-left:-17%;" align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results2">
  
  <thead id="head_list">

    <!-- <tr class="warning no-result2">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr> -->

  </thead>
  <tbody id="body_list" style="width:965px">
    <tr>
      <th>Name</th>
      <th>Vehicle</th>
      <th>Engine No.</th>
      <th>Chassis No.</th>
      <th>Reg No.</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Address</th>
      <th>Select</th>

    <form name="list_submit_form" id="list_submit_form" method="post" action="#"> 
      <th><button name="list_submit" value="list_submit" style="background-color:#607D8B" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Submit</button>  
      </th>
    </form>

    </tr>
   <?php 
      for ($x = 0; $x < count($list_info); $x++) { ?>
              <tr class="alter">
                <td align="left"><?php echo empty($list_info[$x]['user_details']['name']) ? "NULL" : $list_info[$x]['user_details']['name']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['vehicle_details']['vehicle']) ? "NULL" : $list_info[$x]['vehicle_details']['vehicle']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['vehicle_details']['engine_no']) ? "NULL" : $list_info[$x]['vehicle_details']['engine_no']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['vehicle_details']['chassis_no']) ? "NULL" : $list_info[$x]['vehicle_details']['chassis_no']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['vehicle_details']['reg_no']) ? "NULL" : $list_info[$x]['vehicle_details']['reg_no']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['user_details']['mobile']) ? "NULL" : $list_info[$x]['user_details']['mobile']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['user_details']['email']) ? "NULL" : $list_info[$x]['user_details']['email']; ?></td>
                <td align="left"><?php echo empty($list_info[$x]['user_details']['address']) ? "NULL" : $list_info[$x]['user_details']['address']; ?></td>
                <!-- <td align="left"><button name="list_submit" value="list_submit" style="background-color:#607D8B" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Select</button></td>
                 -->
                <td align="left"><input form="list_submit_form" type="checkbox" name="check_list[]" value="<?php echo $list_info[$x]['user_details']['pk'] ?>"><br/></td>
              </tr>
    <?php  } 
    ?> 
  </tbody>
</table>


    <!-- </div> -->
    <div class="modal-footer">
      <div class="row">
       
      </div>
    </div>
  </div>

</div>
    
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
/*var btn = document.getElementById("myBtn");*/

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span_cancel = document.getElementsByClassName("cancel")[0];

// When the user clicks the button, open the modal
/*btn.onclick = function() {
    modal.style.display = "block";
}*/

/*document.getElementById("myBtn1").onclick = function() {
    modal.style.display = "block";
}*/

function open_modal(){
   modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

span_cancel.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var list_modal = document.getElementById('list_modal');

// Get the button that opens the modal
/*var btn = document.getElementById("myBtn");*/

// Get the <span> element that closes the modal
/*var span_list = document.getElementsByClassName("close_list")[0];*/

// When the user clicks the button, open the modal
/*btn.onclick = function() {
    modal.style.display = "block";
}*/

/*document.getElementById("myBtn1").onclick = function() {
    modal.style.display = "block";
}*/

function open_list(){
   list_modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
/*span_list.onclick = function() {
    list_modal.style.display = "none";
}*/

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == list_modal) {
        list_modal.style.display = "none";
    }
}
</script>
   

</body>
</html>

