<?php 

class Form{

function enter_form(){
					include('../include/header.php');
	$enter_form .='<form action="" method="get">';
	$enter_form .= '<div class="form-group">';
	$enter_form .= '<label for="asset" >Type of Asset</label></br>';
	$enter_form .= '<select class="custom-select" id="asset" name= "type" required>';
	$enter_form .=	'<option value="website">Website</option>';
	
	$enter_form .= '</select>';
	$enter_form .= '</div>';
	$enter_form .= '<div class="form-group">';
	$enter_form .= '<label for="name"> Asset Name</label>';
	$enter_form .= '<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>';
	$enter_form .= '<div class="form-group">';
	$enter_form .= '<label for="website">Address</label>';
	$enter_form .= '<input type="text" class="form-control" id="website" name="address" placeholder="Website" required>';
	$enter_form .= '</div>';
	$enter_form .= '<div class="form-group">';
	$enter_form .= '<label for="description">Description</label>';
	$enter_form .= '<textarea class="form-control" rows="5" id="comment" name="descrip"placeholder="Description is not requiered but sure 
	                does help in the event you forget something " ></textarea>';
	$enter_form .= '<input type="hidden" class="form-control" id="hidden" name="websiteTable">';                
	$enter_form .= '</div>';										  
	$enter_form .= '<button type="submit" class="btn btn-default">Submit</button>';
	$enter_form .= '</form>';

					echo $enter_form;

					}


function enter_acronym_form(){
	include('../include/header.php');
	$acronym_form .= '<form action="" method="get">';
	$acronym_form .= '<div class = form-group>';
	$acronym_form .= '<label for="acronym">Input Acronym:</label>';
	$acronym_form .= '<input  class = "form-control" type="text" name="acronym" id="name" value="" tabindex="1" required />';
	$acronym_form .= '</div>';
	$acronym_form .= '<div>';
	$acronym_form .= '<label for="word">Actual wording </label>';
	$acronym_form .= '<input class = "form-control" cols="40" rows="8" name="word" id="textarea" required></textarea>';
	$acronym_form .= '</div>';	
	$acronym_form .= '<div>';
	$acronym_form .= '<label for="meaning">Enter Meaning of Acronym:</label>';
	$acronym_form .= '<input class = "form-control" cols="40" rows="8" name="meaning" id="textarea" ></textarea>';
	$acronym_form .= '<input type="hidden" class="form-control" id="hidden_acronym" name="acronymTable" >';
	$acronym_form .= '</div>';		
	$acronym_form .= '<div>';
	$acronym_form .= '<input class = " btn btn-danger" type="submit" value="Submit" />';
	$acronym_form .= '</div>';
	$acronym_form .= '</form>';

			echo $acronym_form ;

}


}


?>