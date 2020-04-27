<?php
	
	$connection = new PDO("mysql:host=localhost;dbname=bitlab2","root","");

	function getAllItems(){
		global $connection;

		$query = $connection->prepare("SELECT * FROM items");
		$query->execute();
		$result = $query->fetchAll();

		return $result;

	}

?>