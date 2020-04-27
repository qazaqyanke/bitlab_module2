<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['id'])){

			session_start();
			if(isset($_SESSION['BASKET'])){
			
				$bask = $_SESSION['BASKET'];
			
			}else{
			
				$bask = array();
			
			}
			$bask[] = array("id"=>$_POST['id'], "name"=>$_POST['name'], "price"=>$_POST['price']);
			$_SESSION['BASKET'] = $bask;
		}
	}
	header("Location:index.php");
?>