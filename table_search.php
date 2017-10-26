<html>
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



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<script type="text/javascript">

$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});

</script>
</head>

<body>

  

<table id="example" align="center" style="margin-top:20%" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
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

              <tr>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>

              </tr>
              <tr>
                <td>Hi</td>
                <td>Hi</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                <td>Hello</td>
                
              </tr>


  </tbody>
</table>

<div style="margin-top:20%" class="col-sm-2" style="margin-top:3%">
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
</body>
</html>