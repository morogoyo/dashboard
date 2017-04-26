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
    <!--  -->

    <hr>
    <div>
      <button onclick="toggleTeam()">Big freaking button</button>
    </div>
    <div id="test">
    <p>this is not hidden</p>
    </div>
  <hr>

  <!--  -->
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text...</p>
      </div>
      
      <div id='releases'>
      <release></release>
      </div>

      <div id='team'>
      <teams ></teams>
      </div>      

      <div id='acro'>
      <acronym></acronym>
      </div>

      <div id='web'>
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

<!-- release page  -->

<!-- <div><label>  Search</label>
<input type="ng-submit=" ng-model="search.release , search.first_sprint ,search.second_sprint" />   </div>
<div  class="col-lg-9" ng-controller="releaseCtrl">
    
<table class=" table table-responsive table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr>

        <th>RELEASE</th>
        <th>Planning Start</th>       
        <th>Planning End</th>
        <th>Sprint #1</th>
        <th>Sprint Start</th>
        <th>Sprint End</th>       
        <th>Sprint #2</th>
        <th>Sprint 1 Start</th>
        <th>Sprint 2 End</th>
        <th>END TO END TESTING Start</th>
        <th>END TO END TESTING End</th> 
          
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat=" r in release | filter:search ">
        <!-- | filter : teams -->
       <!-- <td>{{r.release}}</td>
        <td>{{r.release_planning_start}}</td>
        <td>{{r.release_planning_end}}</td>
        <td>{{r.first_sprint}}</td>
        <td>{{r.first_sprint_start}}</td>
        <td>{{r.firts_sprint_end}}</td>
        <td>{{r.second_sprint}}</td>
        <td>{{r.second_sprint_start}}</td>
        <td>{{r.second_sprit_end}}</td>
        <td>{{r.ete_start}}</td>
        <td>{{r.ete_end}}</td>
        
        
      </tr>
      
    </tbody>
  </table>
</div> -->

  
<!-- end release page -->
<?php
   

 include('includes/footer.php');



 ?>
