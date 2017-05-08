<?php
		include('../classes/class.pulse.php');
		
  		include('../classes/class.forms.php');
  		include('../classes/class.sql.php');
  		include('../includes/header.php');
  		include('../includes/leftNav.php');
  		
					
	?>		<div class="center-block"><h3>Websites </h3></div>
			<div class="panel panel-danger span4 center col-lg-6" >
			<div class=" panel-heading   "> 
			<div class="panel-body ">
  			<?php 	
  						$form = new Form();
						$sql_init = new Sql();
						$form->enter_form();					
						$sql_init->insert();
						// $sql_init->select('websites');
			?>
  			
			</div>

</div>
</div>

<div><?php include('../includes/footer.php'); ?></div>