<?php 
if($_SERVER['REQUEST_METHOD']=="GET"){
	if(isset($_GET['id'])&&is_numeric($_GET['id'])){
		require_once 'db.php';
		$result = getCities($_GET['id']);
		echo json_encode($result);
	}
}



?>