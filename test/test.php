<?php

include("include/initScript.php"); 
include('classes/class.pulse.php');
include("./classes/class.sql.php");
    $sql_init = New Sql();
    
    $sql_init->select('websites');
    $sql_init->select('acronym');


$sql_init->release_time_line();



?>