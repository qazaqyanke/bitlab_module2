<?php

	$message = "ERROR";
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['city'])){

			require_once "db.php";

			if(addUser($_POST['name'], $_POST['surname'], $_POST['city'])){
				$message = "OK";
			}

		}

	}

	echo $message;
	
?>