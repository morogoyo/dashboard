<?php include("include/initScript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LMS Tools</title>
  <meta charset="utf-8">
 

  
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
      <div class="col-sm-12">
          <div class="well">
            <!-- Display acronims  -->
          <div ng-controller='acronyms' > <h3>Acronyms</h3>
<!-- the plus icon  -->
          <p><a href="forms/acronymform.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Plus 
        </a></p>
<!-- end of plus icon -->          
          <input type="text" name="acrofilter" ng-model = "acro">
          <ul>      
            <li ng-repeat ="x in acronym | filter : acro"  ><a href="file://{{x.address}}" target="_blank">{{x.acronym}}&nbsp;&nbsp;{{x.word}}</a></li>     
          </ul>
        </div>
         </div>
          </div>

        <div class="col-sm-6">
          <div class="well">
          <div ng-controller='sites' > <h3 >Web Resources</h3>
<!-- the plus icon  -->
          <p><a href="forms/webform.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span> Plus 
        </a></p>
<!-- end of plus icon -->
            <input type="text" name="websitefilter" ng-model = "web">
            <ul>      
              <li ng-repeat ="x in sites | filter : web"><a href="http://{{x.address}}" target="_blank">{{x.name}}&nbsp;&nbsp;{{x.type}}</a></li></ul>
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

<?php include('include/footer.php');?>
