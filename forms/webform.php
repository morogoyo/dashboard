<?php
		include('../classes/class.sql.php');
  		include('../classes/class.forms.php');
  		include('../include/header.php');
  		
					
	?>		<div class="center-block"><h3>Websites </h3></div>
			<div class="panel panel-danger span4 center" >
			<div class=" panel-heading   "> 
			<div class="panel-body">
  			<?php 	
  						$form = new Form();
						$sql = new Sql();
						$form->enter_form();					
						$sql->insert();
						// if (isset($_GET['websiteTable'])){
						$sql->select('websites');
						// }
						?>
  			
			</div>

</div>
</div>

<div><?php include('../include/footer.php'); ?></div>