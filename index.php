<?php 
include("include/initScript.php"); 
include('classes/class.pulse.php');
include("./classes/class.sql.php");

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LMS Tools</title>
  <meta charset="utf-8">
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>

  
  <?php include("include/header.php"); ?>
  
</head>
  <body ng-app="lmsTools">    


<?php include ('include/leftNav.php'); ?>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text...</p>
      </div>
<!-- for future use   -->
      <!-- <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div> -->
<!-- for future use   -->

      <div class="row">
      <div class="col-sm-6">
          <div class="well">
            <!-- Display acronims  -->
          <div ng-controller='acronyms' > <h3>Acronyms</h3>
<!-- start icon  -->
          <div class="row">
          <div class="col-sm-4">
          <div><a href="forms/acronymform.php" class="col-sm-6 btn btn-info btn-xs ">
          <span class="glyphicon glyphicon-plus "></span> Add 
        </a></div>
 
          <div><a href="forms/acronymform.php" class="col-sm-6 btn btn-info btn-xs btn-danger">
          <span class="glyphicon glyphicon-minus"></span> Remove</a>
          </div> 
        </div> 
        </div>
<!-- end of  icons --> 
           <div>  
          <input  type="text" name="acrofilter" ng-model = "acro">
          </div>

          <ul>      
            <li ng-repeat ="x in acronym | filter : acro"  ><a href="file://{{x.address}}" target="_blank">{{x.id}}&nbsp;&nbsp;&nbsp;&nbsp;{{x.acronym}}&nbsp;&nbsp;{{x.word}}</a></li>     
          </ul>
        </div>
         </div>
          </div>
            
        <div class="col-sm-6">
          <div class="well">
          <div ng-controller='sites' > <h3 >Web Resources</h3>
<!-- start icon  -->
          <div class="row">
          <div class="col-sm-4">
          <div><a href="forms/webform.php" class="col-sm-6 btn btn-info btn-xs ">
          <span class="glyphicon glyphicon-plus "></span> Add 
        </a></div>
 
          <div><a href="forms/webform.php" class="col-sm-6 btn btn-info btn-xs btn-danger">
          <span class="glyphicon glyphicon-minus"></span> Remove
        </a></div> 
        </div> 
        </div>
<!-- end of  icons --> 
            <input type="text" name="websitefilter" ng-model = "web">
            <ul>      
              <li ng-repeat ="x in sites | filter : web"><a href="http://{{x.address}}" target="_blank">{{x.id}}&nbsp;&nbsp;&nbsp;&nbsp;{{x.name}}&nbsp;&nbsp;{{x.type}}</a></li></ul>
          </div>
          </div>
        </div>
        
        
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Todo </p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Done</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    $sql_init = new Sql();
    $sql_init->select('websites');
    $sql_init->select('acronym');

 include('include/footer.php');?>
