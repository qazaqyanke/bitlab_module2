<?php

	$message = "ERROR";
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['id'])){

			require_once "db.php";

			if(deleteUser($_POST['id'])){
				$message = "OK";
			}

		}

	}

	echo $message;
	
?>