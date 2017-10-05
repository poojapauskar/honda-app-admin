<?php
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

session_start();
if($_SESSION['honda_login'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}

?>
<head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
      <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">


<!-- Table js -->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
  <style>
label {
  display: inline-block;
  width: 140px;
  text-align: left;
  font-weight:bold;
}​

</style>
  </head>
<?php

session_start();
/*ob_start("ob_gzhandler");*/  //Enables Gzip compression 

/*session_start();
if($_SESSION['login_reimburse_app'] == 1){

}else{
  echo "<script>location='index.php'</script>";
}*/

?>


<?php
if(isset($_POST['submit'])){
  $url = 'https://hondaproject.herokuapp.com/edit_account/';
  $data = array(
              'pk_value' => $_POST['pk'],
              'admin_pk' => $_POST['admin_pk'],
              'name' => $_POST['name'],
              'email' => $_POST['email'],
              'mobile' => $_POST['mobile'],
              'username' => $_POST['username'],
              'password' => $_POST['password']
            );

    // use key 'http' even if you send the request to https://...
    $options = array(
      'http' => array(
        'header'  => "Content-Type: application/json\r\n" .
                     "Accept: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode( $data ),
      ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    /*echo $result8;*/
    $arr = json_decode($result,true);
    if($arr != ''){
      echo "<script>window.location.href = 'super_admin_panel.php';</script>";
    }
}
?>

<?php
if(isset($_POST['delete_btn'])){
  /*echo "hi";*/
  $url_delete_user = 'https://hondaproject.herokuapp.com/disable_employee/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_delete_user = array(
    'http' => array(
      'header'  => array(
                  'EMPLOYEE-ID: '.$_POST['pk_delete'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_delete_user = stream_context_create($options_delete_user);
  $output_delete_user = file_get_contents($url_delete_user, false,$context_delete_user);
  $arr_delete_user = json_decode($output_delete_user,true);

}?> 


<?php
if(isset($_POST['submit_2'])){
  $url_admin_employees = 'https://hondaproject.herokuapp.com/add_admin_employees/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_admin_employees = array(
    'http' => array(
     'header'  => array(
                      "EMPLOYEE-ID: ".$_POST['employee_id'],
                      "NAME: ".$_POST['name'],
                      "EMAIL: ".$_POST['email'],
                      "MOBILE: ".$_POST['mobile'],
                      "USERNAME: ".$_POST['username'],
                      "PASSWORD: ".$_POST['password'],
                      "ACCOUNT-TOKEN: ".$_SESSION['acnt_token_selected'],
                      "ACCESS-LEVEL: ".$_POST['access_level'],
                  ),
     'method'  => 'GET',
   ),
  );
  $context_admin_employees = stream_context_create($options_admin_employees);
  $output_admin_employees = file_get_contents($url_admin_employees, false,$context_admin_employees);

  $arr_admin_employees = json_decode($output_admin_employees,true);
    
}
?>

<?php


if(isset($_POST['pk_value'])){
  $pk1=$_POST['pk_value'];
}else
{
  $pk1=$_SESSION['pk_value'];
}

/*$_SESSION['pk_value']= $_POST['pk_value'];*/

  /*echo $_POST['pk_value'];*/
  $url_get_account_from_id = 'https://hondaproject.herokuapp.com/get_account_from_id/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_get_account_from_id = array(
    'http' => array(
      'header'  => array(
                  'PK-VALUE: '.$pk1,
                ),
      'method'  => 'GET',
    ),
  );
  $context_get_account_from_id = stream_context_create($options_get_account_from_id);
  $output_get_account_from_id = file_get_contents($url_get_account_from_id, false,$context_get_account_from_id);
 /* echo $output_get_account_from_id;*/
  $arr_get_account_from_id = json_decode($output_get_account_from_id,true);
  /*echo count($arr_get_account_from_id['employees']);*/
$_SESSION['pk_value']= $arr_get_account_from_id['org_pk']; 
$_SESSION['acnt_token_selected']= $arr_get_account_from_id['account_token'];  
?>

<a href="super_admin_panel.php">Back</a>



<div class="container" style="margin-left:25%;margin-top:10%;width:50%;border:1px solid black;padding-bottom:8px">
<form align="center" style="margin-top:2%" action="edit_account.php" method="post">
<h4><?php echo $arr_get_account_from_id['organization'] ?></h4>

<input type="hidden" name="pk" value="<?php echo $_SESSION['pk_value'] ?>">
<input type="hidden" name="admin_pk" value="<?php echo $arr_get_account_from_id['admin_details']['pk'] ?>">

  <div class="row">
    <div class="col-sm-4">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $arr_get_account_from_id['admin_details']['name'] ?>">
    </div><br>
    <div class="col-sm-4">
      <label>Email</label>
      <input type="text" name="email" value="<?php echo $arr_get_account_from_id['admin_details']['email'] ?>">
    </div><br>
    <div class="col-sm-4">
      <label>Mobile</label>
      <input type="text" name="mobile" value="<?php echo $arr_get_account_from_id['admin_details']['mobile'] ?>">
    </div><br>
    <div class="col-sm-4">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $arr_get_account_from_id['admin_details']['username'] ?>">
    </div><br>
    <div class="col-sm-4">
      <label>Password</label>
      <input type="text" name="password" value="<?php echo $arr_get_account_from_id['admin_details']['password'] ?>"> 
    </div><br>
    <div class="col-sm-4">
      <input type="submit" name="submit" id="submit" style="margin-top:1%;width:100px;height:30px;background-color:green" value="Save">
    </div>
  </div>
</form>
</div>


<div class="container" style="margin-left:25%;margin-top:1%;width:50%;border:1px solid black;padding-bottom:8px">

<h4 style="text-align:center">Add New User</h4>
<form  align="center" action="#" style="margin-top:-6%;" method="post">

<input class="mdl-textfield__input" type="hidden" id="pk_value_edit" name="pk_value_edit" value="<?php echo $_SESSION['pk_value'] ?>">
<input class="mdl-textfield__input" type="hidden" id="account_token" name="account_token" value="<?php echo $_SESSION['acnt_token_selected'] ?>">

<br><br>
<input placeholder="EMPLOYEE ID" type="text" id="employee_id" name="employee_id" required/><br><br>
<input placeholder="NAME" type="text" id="name" name="name" required/><br><br>
<input placeholder="EMAIL" type="email" id="email" name="email" required/><br><br>
<input placeholder="MOBILE" type="text" id="mobile" name="mobile" required/><br><br>
<input placeholder="USERNAME" type="text" id="username" name="username" required autocomplete="off"><br><br>
<input placeholder="PASSWORD" type="password" id="password" name="password" required autocomplete="off"><br><br>
<!-- <label class="mdl-textfield__label" for="sample3">Access Level</label> -->
          <select name="access_level" style="margin-left:%;width:24%">
            <option value="Sales">Sales</option>
            <option value="Insurance">Insurance</option>
            <option value="Finance">Finance</option>
            <option value="User">User</option>
          </select>
  
    <br><br>
    <button name="submit_2" id="submit_2" style="background-color: #5cb85c;width:7em;margin-top:0%" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button><br>
</div> 
</form>
<div class="mdl-components mdl-js-components mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">


<table align="center" id="example" style="box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);" class="mdl-data-table">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Employee ID</th> 
                <th class="mdl-data-table__cell--non-numeric">Name</th> 
                <th class="mdl-data-table__cell--non-numeric">Email</th>
                <th class="mdl-data-table__cell--non-numeric">Mobile</th>
                <th class="mdl-data-table__cell--non-numeric">Username</th>
                <th class="mdl-data-table__cell--non-numeric">Password</th>
                <th class="mdl-data-table__cell--non-numeric">Role</th>
                <!-- <th>Edit</th> -->
                <th class="mdl-data-table__cell--non-numeric">Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php for($x=0;$x<count($arr_get_account_from_id['employees']);$x++){?>
          <tr>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['employee_id']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['employee_details']['name']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['employee_details']['email']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['employee_details']['mobile']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['employee_details']['username']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['employee_details']['password']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $arr_get_account_from_id['employees'][$x]['role']; ?></td>
            <td>
                              <form method="post" action="edit_account.php">
                                <input type="hidden" name="pk_delete" value="<?php echo $arr_get_account_from_id['employees'][$x]['employee_details']['pk']; ?>">
                                <button onclick="return confirm('Are you sure you want to delete?');" style="width:55px;height:30px" type="submit" name="delete_btn">Delete</button>
                               </form>
            </td>
                   
          </tr>  
            <?php }?>
        </tbody>
    </table>
    </div>