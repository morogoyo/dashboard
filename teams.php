<?php 
include("include/initScript.php"); 
include('classes/class.pulse.php');
include("./classes/class.sql.php");



?>
<!DOCTYPE html>
<html>
<head>
	<title>Trident Teams</title>
	<?php include("include/header.php"); ?>
</head>
<body ng-app="lmsTools">


<?php 
$test_sql = New Sql();

$test_sql->select("trident_teams"); 

?>
<div ng-controller="teams">
		
	<table class="table table-responsive table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>WORK STREAM</th>
				<th>Componentss</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="t in teams">
				<td>{{t.teams}}</td>
				<td>{{t.work_stream}}</td>
				<td>{{t.medallion}}</td>
				<td>{{t.guess_compass}}</td>
			</tr>
			
		</tbody>
	</table>
</div>
<?php
   

 include('include/footer.php');



 ?>
