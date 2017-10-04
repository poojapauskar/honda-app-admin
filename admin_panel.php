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

<script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


  <script src="js/material.min.js"></script>
  <link rel="stylesheet" href="css/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<style>
p{
  color:white;
  font-size:12px;
  line-height: 14px;
  margin-top: 14px;
}
</style>
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
<body ng-app="" style="overflow-x:hidden" onload="hide_wait_msg()">

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
      <img style="margin-top:5%" src="images/Different-Honda-Logo.png"></img>
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
      <a class="mdl-navigation__link" href="enquiry.php">Enquiry</a>
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
  <div class="row" style="margin-top:14%;margin-left:12%"> 

    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
      <a href="enquiry.php">
      <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p>Enquiry</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
      <a href="test_ride.php">
      <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p>Test Rides</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
       <a href="bookings.php">
       <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
       <p>bookings</p>
       </button>
       </a>
    </div>
    <div class="col-sm-1">
    </div>
    
  </div>

  <div class="row" style="margin-top:5%;margin-left:12%"> 
    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
       <a href="finance.php">
       <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
       <p>Finance Requests</p>
       </button>
       </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
      <a href="insurance.php">
      <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p>Insurance Renewal</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
      <a href="service_requests.php">
      <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p>Service Requests</p>
      </button>
      </a>
    </div>
    <div class="col-sm-1">
    </div>
  </div>


  <div class="row" style="margin-top:5%;margin-left:12%"> 
    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
       <a href="inventory.php">
       <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
       <p>Inventory</p>
       </button>
       </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
       <a href="customer_database.php">
       <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
       <p>Customer Database</p>
       </button>
       </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
      <a href="push_notification.php">
      <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p>Mobile App</p>
      </button>
      </a>
    </div>
    <div class="col-sm-1">
    </div>
  </div>

  <div class="row" style="margin-top:5%;margin-left:12%"> 
    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
      <a href="web_app_user_list.php">
      <button onclick="show_wait_msg()" style="background-color:#607D8B;width:160px;height:60px" class="mdl-button mdl-js-button mdl-button--raised">
      <p>Admin</p>
      </button>
      </a>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-1">
    </div>
  </div>

</div>

    <!-- Textfield with Floating Label -->
    
    

</body>
</html>

