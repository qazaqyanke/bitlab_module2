<?php 
$res = array();
$res['message'] = "Couldnt add club";
$res['status'] = "ERROR";

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['name'])&&$_POST['name']!=""&&isset($_POST['city'])){
		require_once 'db.name';

		if(!getClubByName(trim($POST['name']))){
			addClub(trim($_POST['name']), $_POST['city']);

			$res['message'] = "Club added successfully";
			$res['status'] = "Ok";
		}else{
			$res['message'] = "Club with name \"".$_POST['name']."\" 
			is already exist";
			$res['status'] = "ERROR";
		}
	}
}


echo json_decode($res);
?>