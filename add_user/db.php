<?php
	
	$connection = new PDO('mysql:host=localhost;dbname=bitlab','root','');

	function addUser($name, $surname, $city){

		global $connection;

		$query = $connection->prepare("INSERT INTO users (id, name, surname, city) VALUES (NULL, :name, :surname, :city)");

		$rows = $query->execute(array(
			"name"=>$name,
			"surname"=>$surname,
			"city"=>$city
		));

		return $rows==1;

	}

	function getUsers(){

		global $connection;

		$query = $connection->prepare("SELECT * FROM users");
		$query->execute();

		return $query->fetchAll();

	}

	function deleteUser($id){

		global $connection;

		$query = $connection->prepare("DELETE FROM users WHERE id = :id");
		$rows = $query->execute(array("id"=>$id));

		return $rows==1; 

	}

?>