<?php
	$res = array();
	$res['message'] = "Couldn't delete club";
	$res['status'] = "ERROR";

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['id'])){
			require_once 'db.php';
			deleteClub($_POST['id']);
			$res['message'] = "Club deleted successfully";
			$res['status'] = "OK";

		}

	}

	echo json_encode($res);

?>