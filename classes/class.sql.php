<?php
include('../classes/class.pulse.php');

class Sql {


	function select($table){
	global $conn;
	$this->table = $table;
	$array_json = array();
	$sql_select = " SELECT * FROM $this->table ";
	$result = $conn->query($sql_select);
			
		if ($result->num_rows > 0){
				
			
			while ($row = $result->fetch_all(MYSQLI_ASSOC)) { // Get all the records from db as associative array 
				$array_json = $row; //store all records in array 
			
			}
		}
			
			$file = fopen($this->table.'.txt','w')or die("un able to open file at this time");
			
			fwrite( $file , '{"'. $this->table.'":'.json_encode($array_json).'}');

}

	function insert(){
				 var_dump("These are the GET var dump  ".$_GET['descrip'],$_GET['name'],$_GET['type'],"</br>");
			
			$this->address = $_GET['address'];
			$this->descrip = $_GET['descrip'];
			$this->name = $_GET['name'];
			$this->type = $_GET['type'];
			global $conn;
			$sql = "INSERT INTO websites (
										name,
										descrip,
										type,
										address
										) 

						      VALUES (
								       '$this->name',
								       '$this->descrip',
								       '$this->type',
								       '$this->address'
								       
								       )";
								       // var_dump("Sql var dump  ".$sql);
		if (isset($this->name) and isset($this->address)){						       
			if ($conn->query($sql) === TRUE) {
					
				echo "New record in websites table created successfully";
				      
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}

			}		// $conn->close();
}






function insert_acronyms(){
				global $conn;
				
				$this->acronym 	= $_GET['acronym'];
				$this->word 	= $_GET['word'];
				$this->meaning 	= $_GET['meaning'];

				 $sql = "INSERT INTO acronym (
				 								acronym,
				 								word,
				 								description

				 								 )

				 						VALUES(

				 								 '$this->acronym',
				 								 '$this->word',
				 								 '$this->meaning'

				 								 		)";
				// $sql = "INSERT INTO acronym (acronym ,word ,description)VALUES('test1','test2','test3')";

					if (isset($this->acronym) and isset($this->word) and isset($this->meaning)){
				 if ($conn->query($sql) === TRUE) {
				 	
				echo "New record in Acronyms table created successfully";

					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}


			}
		}




}










?>