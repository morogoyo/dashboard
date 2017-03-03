<?php 

		include('../classes/class.pulse.php');
		include('../classes/class.sql.php');
  		include('../classes/class.forms.php');
  		

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Website</title>
</head>
<body>
<div class="center-block">

	<?php 
		$id = $_GET['id'];
		$column =$_GET['column'];
		$input = $_GET['input'];
		$table = 'websites';
		$form = New Form();
		$form->webChange();
		$sql = New Sql();
		$sql->update_sql($table, $column, $input, $id );
		$form->webdel();
		$sql->del($table, $column, $input, $id );


	?>
	</div>

</div>
</body>
</html>