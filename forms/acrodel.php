<?php 

		include('../classes/class.pulse.php');
		include('../classes/class.sql.php');
  		include('../classes/class.forms.php');
  		

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Acronym</title>
</head>
<body>
<div class="center-block">

	<?php 
		$id = $_GET['id'];
		$column =$_GET['column'];
		$input = $_GET['input'];
		$table = $_GET['table'];
		$form = New Form();
		$form->acroChange();
		$sql = New Sql();
		$sql->update_sql($table, $column, $input, $id );
		echo "</br>";
		var_dump($id,$column,$input,$table);
		$form->del();
		$sql->del($table, $column, $input, $id);
	?>
	</div>

</div>
</body>
</html>