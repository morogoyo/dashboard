<?php
  include('classes/class.sql.php');
  include('classes/class.forms.php');
  include('classes/class.pulse.php');
  include('includes/header.php');
  
if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 812300');    // cache for 1 day
    }  

?>

<!-- test connection -->


<!DOCTYPE html>

<html>
<head>
	<title>LMS Tools</title>

	
</head>
<body ng-app="lmsTools" >

 <?php include('includes/navigation.php'); ?> 
 <hr/>
 

<!-- <div class="panel panel-default container-fluid col-sm-3 col-md-3 col-lg-3">
  <div class="panel-heading">Menu</div>
  <div class="panel-body">
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">13</span>
    Cras justo odio
  </li>
  <li class="list-group-item">
    <span class="badge">2</span>
    Dapibus ac facilisis in
  </li>
  <li class="list-group-item">
    <span class="badge">1</span>
    Morbi leo risus
  </li>
</ul>
  </div>
</div> -->

<!-- Display Websites -->
<div class="col-lg-12 col-sm-12"></div>
<div class="container-fluid">	
	<div class="row">
		<div  style=";" class="col-sm-3 col-md-3 col-lg-3" >			
			<div ng-controller='sites' > <h3 >Web Resources</h3>
				<input type="text" name="websitefilter" ng-model = "web">
				<ul>			
					<li ng-repeat ="x in sites | filter : web"><a href="http://{{x.address}}" target="_blank">{{x.name}}&nbsp;&nbsp;{{x.type}}</a></li>			
				</ul>
			</div>
		</div>

		

		

	<!-- <div  style=";" class="col-sm-3 col-md-3 col-lg-3" > 
			
			<div ng-controller='sites' > <h3>Shared Resourses</h3>
				<input type="text" name="filter" ng-model = "input">
				<ul>			
					<li ng-repeat ="x in sites | filter : input"  ><a href="file://{{x.address}}" target="_blank">{{x.name}}&nbsp;&nbsp;{{x.type}}</a></li>			
				</ul>
			</div>
		</div> -->
	<!-- <div class="row "> -->
			<?php

					$form = new Form();
					$sql = new Sql();
			?>		
	<div>
			<div class="panel-heading col-lg-6"><h3>Websites </h3> </div>
			<div class="panel-body">
  			<?php 
						$form->enter_form();					
						$sql->insert();
						if (isset($_GET['websiteTable'])){
						$sql->select('websites');
						}
						?>
  			
			</div>
			
<!-- Display acronims  -->
<div style=";"  class="col-sm-3 col-md-3 col-lg-3"> 

				<div ng-controller='acronyms' > <h3>Acronyms</h3>
				<input type="text" name="acrofilter" ng-model = "acro">
				<ul>			
					<li ng-repeat ="x in acronym | filter : acro"  ><a href="file://{{x.address}}" target="_blank">{{x.acronym}}&nbsp;&nbsp;{{x.word}}</a></li>			
				</ul>
			</div>
		</div>

	</div>	


<!-- end of display acronims -->

		
  			
  			<div class="panel-heading col-lg-6"> <h3> Acronyms </h3> </div>
  			<div class="panel-body">
  					<?php  
						$form->enter_acronym_form();
						$sql->insert_acronyms();
						if (isset($_GET['acronymTable'])){
						$sql->select('acronym'); 
						}
						?>
							
			
	        </div>
		</div>

</div><!--end container div -->


		<div class="">test</div>

	<?php include('includes/footer.php');?>



