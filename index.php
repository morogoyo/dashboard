<?php 
include("include/initScript.php"); 
include('classes/class.pulse.php');
include("./classes/class.sql.php");
    $sql_init = New Sql();
    $sql_init->release_time_line();
    $sql_init->select('websites');
    $sql_init->select('acronym');
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LMS Tools</title>
  <meta charset="utf-8">
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>

 
  <?php include("includes/header.php"); ?>
  
</head>
  <body ng-app="lmsTools">    


<?php include ('includes/leftNav.php'); ?>
   
    <!-- <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text...</p>
      </div> -->
      
      <div  id="release" ng-show="show == 1">
      <release></release>
      </div>

      <div id='team' ng-show="show == 2">
      <teams ></teams>
      </div>      

      <div id='acro' ng-show="show == 3">
      <acronym></acronym>
      </div>

      <div id='web' ng-show="show == 4">
      <websites></websites>
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
<hr><hr>


<?php
   

 include('includes/footer.php');



 ?>
