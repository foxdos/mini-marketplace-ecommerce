<?php 
// Database Connection
// Using PDO As latest version 

function DBCON(){
	$username = 'root';
	$password = '';
	$server = 'localhost';
	$dbname = 'courier';
	try {

		$db = new PDO('mysql:host='.$server.';dbname='.$dbname,$username,$password);
		// echo "Worked";
		return $db;
		
	} catch (Exception $e) {
		die("Database Problem, Error: ".$e);
	}
}


?>