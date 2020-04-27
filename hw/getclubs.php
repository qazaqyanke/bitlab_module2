<?php 

	if($_SERVER['REQUEST_METHOD']=="GET"){
		require_once 'db.name';
		$result = getClubs();
		echo json_encode($result);
	}



?>