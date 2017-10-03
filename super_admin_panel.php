
<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="css/material.min.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
<style>
label {
  display: inline-block;
  width: 140px;
  text-align: right;
}​

</style>
  </head>
  <body>

<?php
if(isset($_POST['delete_btn'])){
  /*$url_delete_account = '';
  $options_delete_account = array(
    'http' => array(
      'header'  => array(
                  'PK-DELETE: '.$_POST['pk_delete'],
                ),
      'method'  => 'GET',
    ),
  );
  $context_delete_account = stream_context_create($options_delete_account);
  $output_delete_account = file_get_contents($url_delete_account, false,$context_delete_account);
 
  $arr_delete_account = json_decode($output_delete_account,true);*/

}?> 
<?php
if(isset($_POST['submit1'])){
  $url = 'http://127.0.0.1:8000/accounts/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $data = array(
              'organization' => $_POST['organization'],
            );

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

    $arr = json_decode($result,true);
    
}
?>
<?php
if(isset($_POST['submit2'])){
  $url_admin_employees = 'http://127.0.0.1:8000/add_admin_employees/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
  $options_admin_employees = array(
    'http' => array(
     'header'  => array(
                      "NAME: ".$_POST['name'],
                      "EMAIL: ".$_POST['email'],
                      "MOBILE: ".$_POST['mobile'],
                      "USERNAME: ".$_POST['username'],
                      "PASSWORD: ".$_POST['password'],
                      "ACCESS-LEVEL: ".$_POST['access_level'],
                      "ACCOUNT-TOKEN: ".$_POST['organization']
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
$url_accounts = 'http://127.0.0.1:8000/get_all_accounts/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
$options_accounts = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'GET',
  ),
);
$context_accounts = stream_context_create($options_accounts);
$output_accounts = file_get_contents($url_accounts, false,$context_accounts);

$arr_accounts = json_decode($output_accounts,true);
/*var_dump($arr_accounts['accounts'][0]);*/
?>

<?php
$url_org_details = 'http://127.0.0.1:8000/get_org_details/?access_token=PQtL7kGM2fVN14XMnn9kZnVvC3uuKP';
$options_org_details = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'GET',
  ),
);
$context_org_details = stream_context_create($options_org_details);
$output_org_details = file_get_contents($url_org_details, false,$context_org_details);
/*echo $output_org_details;*/
$arr_org_details = json_decode($output_org_details,true);
/*var_dump($arr_accounts['accounts'][0]);*/
?>
     <!-- Always shows a header, even in smaller screens. -->
  
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">

<a href="logout.php">Back</a>

    <main class="mdl-layout__content">
      <div class="page-content">
      <div class="container">
      <div class="row" style="margin-top:6%">
       <center>
      <div class="col-sm-5" style="width:32%">
    <!-- Textfield with Floating Label -->
   
<h3 style="margin-top:-12%">Add Organization</h3>
   <form action="#" style="" method="post">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">Organization</label>
        <input class="mdl-textfield__input" type="text" id="organization" name="organization">
      </div>
      <br>

        <!-- Accent-colored raised button with ripple -->
    <button name="submit1" id="submit1" style="background-color: #5cb85c;width:7em" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button>

   <!--   <button style="background-color:#d9534f" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Delete
    </button> -->
    </form>


<h3 style="margin-top: 9%;">Add Admin/ Employees</h3>
    <form action="#" method="post">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">Organization</label>
        <select name="organization" style="margin-left:1%;width:37%">
         <?php for ($i=0;$i<count($arr_accounts['accounts']);$i++){ ?>
          <option value="<?php echo $arr_accounts['accounts'][$i]['account_token']; ?>"><?php echo $arr_accounts['accounts'][$i]['organization'] ?></option>
         <?php } ?>
        </select>
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <label class="mdl-textfield__label" for="sample3">NAME</label>
          <input name="name" id="name" class="mdl-textfield__input" type="text">
        </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <label class="mdl-textfield__label" for="sample3">EMAIL</label>
          <input name="email" id="email" class="mdl-textfield__input" type="text">
        </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <label class="mdl-textfield__label" for="sample3">MOBILE</label>
          <input name="mobile" id="mobile" class="mdl-textfield__input" type="text">
        </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <label class="mdl-textfield__label" for="sample3">USERNAME</label>
        <input class="mdl-textfield__input"  type="text" id="username" name="username">
      </div>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <label class="mdl-textfield__label" for="sample3">PASSWORD</label>
          <input name="password" id="password" class="mdl-textfield__input" type="password">
        </div>
      <br>
      

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <label class="mdl-textfield__label" for="sample3">Access Level</label>
          <select name="access_level" style="margin-left:1%;width:37%">
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
            <option value="Insurance">Insurance</option>
            <option value="Finance">Finance</option>
            <option value="User">User</option>
          </select>
        </div>
      <br>

        <!-- Accent-colored raised button with ripple -->
    <button name="submit2" id="submit2" style="background-color: #5cb85c;width:7em" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Save
    </button>

   <!--   <button style="background-color:#d9534f" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      Delete
    </button> -->
    </form>
    </center>



<?php
 /* $url_get_all_accounts = '';
  $options_get_all_accounts = array(
    'http' => array(
      'method'  => 'GET',
    ),
  );
  $context_get_all_accounts = stream_context_create($options_get_all_accounts);
  $output_get_all_accounts = file_get_contents($url_get_all_accounts, false,$context_get_all_accounts);

  $arr_get_all_accounts = json_decode($output_get_all_accounts,true);*/

  
?>
<table align="center" cellpadding="10" style="margin-top:3%" border="1" class="mdl-data-table mdl-js-data-table">
        <thead>
            <tr style="">
                <th class="mdl-data-table__cell--non-numeric">Organization</th> 
                <th class="mdl-data-table__cell--non-numeric">Name</th> 
                <th class="mdl-data-table__cell--non-numeric">Email</th> 
                <th class="mdl-data-table__cell--non-numeric">Mobile</th> 
                <th class="mdl-data-table__cell--non-numeric">Username</th>
                <th class="mdl-data-table__cell--non-numeric">Password</th>
                <th class="mdl-data-table__cell--non-numeric">Role</th>
                <th class="mdl-data-table__cell--non-numeric">Edit</th>
                <th class="mdl-data-table__cell--non-numeric">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php for($x=0;$x<count($arr_org_details);$x++){?>
            <tr>
              <td><?php echo $arr_org_details[$x]['organization']; ?></td>
              <td><?php echo $arr_org_details[$x]['emp_details']['name']; ?></td>
              <td><?php echo $arr_org_details[$x]['emp_details']['email']; ?></td>
              <td><?php echo $arr_org_details[$x]['emp_details']['mobile']; ?></td>
              <td><?php echo $arr_org_details[$x]['emp_details']['username']; ?></td>
              <td><?php echo $arr_org_details[$x]['emp_details']['password']; ?></td>
              <td><?php echo $arr_org_details[$x]['access_level']; ?></td>
              
              <td>
                 <form method="post" action="edit_account.php">
                  <input type="hidden" name="pk_value" value="<?php echo $arr_org_details[$x]['pk']; ?>">
                  <button style="width:55px;height:30px" type="submit" name="edit_btn">Edit</button>
                </form> 
              </td>
              <td>
                <form method="post" action="super_admin_panel.php">
                  <input type="hidden" name="pk_delete" value="<?php echo $arr_org_details[$x]['pk']; ?>">
                  <button onclick="return confirm('Are you sure you want to delete?');" style="width:55px;height:30px" type="submit" name="delete_btn">Delete</button>
                 </form>
              </td>
              
              <?php } ?>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>





    </main>
    </div>


    </body>
    </html>