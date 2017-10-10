<!DOCTYPE html>
<html lang="en">
<head>
  <title>Honda</title>
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

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

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

</script>
</head>
<body ng-app="" style="background-color:#E8E8E8;overflow-x:hidden" onload="hide_wait_msg()">

<?php 

session_start();

if($_POST['username'] != '' && $_POST['password'] != ''){
$url2 = 'https://hondaproject.herokuapp.com/check_admin/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
$options2 = array(
  'http' => array(
    'header'  => array(
                  'USERNAME: '.$_POST['username'],
                  'PASSWORD: '.$_POST['password'],
                ),
    'method'  => 'GET',
  ),
);
$context2 = stream_context_create($options2);
$output2 = file_get_contents($url2, false,$context2);
$arr2 = json_decode($output2,true);
/*echo $arr2['message'];*/
                  if($arr2['status']==200 && $arr2['message'] == "Is Admin"){

                                            /*$url_logged = 'https://hondaproject.herokuapp.com/update_logged_in/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
                                            $options_logged = array(
                                              'http' => array(
                                                'header'  => array(
                                                              'LOGGED-IN: 1',
                                                              'USERNAME: '.$_POST['username'],
                                                              'PASSWORD: '.$_POST['password'],
                                                            ),
                                                'method'  => 'GET',
                                              ),
                                            );
                                            $context_logged = stream_context_create($options_logged);
                                            $output_logged = file_get_contents($url_logged, false,$context_logged);
                                            $arr_logged = json_decode($output_logged,true);
                                            if($arr_logged['status'] == 200){
                                                echo "<script>location='admin_panel.php'</script>";
                                            }*/
                                            $_SESSION['honda_login']=1;
                                            $_SESSION['organization_account_token']=$arr2['account_token'];
                                            echo "<script>location='admin_panel.php'</script>";
                  }
                  elseif($arr2['status']==200 && $arr2['message'] == "Is Super Admin"){
                                            /*$url_logged = 'https://hondaproject.herokuapp.com/update_logged_in/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
                                            $options_logged = array(
                                              'http' => array(
                                                'header'  => array(
                                                              'LOGGED-IN: 1',
                                                              'USERNAME: '.$_POST['username'],
                                                              'PASSWORD: '.$_POST['password'],
                                                            ),
                                                'method'  => 'GET',
                                              ),
                                            );
                                            $context_logged = stream_context_create($options_logged);
                                            $output_logged = file_get_contents($url_logged, false,$context_logged);
                                            $arr_logged = json_decode($output_logged,true);
                                            if($arr_logged['status'] == 200){
                                                echo "<script>location='super_admin_panel.php'</script>";
                                            }*/
                                            $_SESSION['honda_login']=1;
                                            echo "<script>location='super_admin_panel.php'</script>";
                  }else{
                    if($arr2['status']==401){
                       $error_message="Not an Admin";
                    }elseif($arr2['status']==402){
                       $error_message="Password Invalid";
                    }elseif($arr2['status']==403){
                       $error_message="Username Invalid";
                    }
                  }

}
elseif($_POST['username'] == '' && $_POST['password'] == '' && isset($_POST['submit'])){
  $error_message="Username and Password required";
}
elseif($_POST['username'] == '' && isset($_POST['submit'])){
  $error_message="Username is required";
}elseif($_POST['password'] == '' && isset($_POST['submit'])){
  $error_message="Password is required";
}

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
        <h5 style="color:white;">Honda</h5>
        <a style="visibility:hidden" href="logout.php"><img class="logout_btn" src="images/logout.png"></img></a>
      </nav>
    </div>
  </header>
</div>

<div style="margin-top:7%;position: absolute; left: 0; top: 0;width: 100%; height: 10%;display: none;vertical-align: center;" id="loadingPleaseWait">
  <div style="text-align: center;">
    <h4 style="color:black;font-size:14px;">Loading, please wait...</h4>
  </div>
</div>

<div class="row">
    <div class="col-sm-9">
    </div>


    <div class="col-sm-3" style="margin-top:15%;width:250px;">
        <form name="myForm" method="post" action=""  style="background-color:white !important;padding:12px 0px 15px 10px">

          <p style="color:#607D8B;font-size:18px" id="admin_console">Admin Console</p>

<p style="color:red"><?php echo $error_message ?></p>

          <div style="width:180px" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="username" id="username" class="mdl-textfield__input" value="<?php echo $_POST['username'] ?>">
          <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Username</label>
          </div>
          </p>

<!-- pattern=".{8,}"  -->
          <div style="width:180px"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="password" id="password" class="mdl-textfield__input" type="password" value="<?php echo $_POST['password'] ?>">
          <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Password</label>
          </div>
          </p>

          <br>
          <button onclick="show_wait_msg()" name="submit" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
           Log In
          </button>

        </form>
    </div>

   <!--  <div class="col-sm-1">
    </div> -->

  </div>
</div>

    <!-- Textfield with Floating Label -->
    
    

</body>
</html>

