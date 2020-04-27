<?php
	
	if($_SERVER['REQUEST_METHOD']=='GET'){

		require_once "db.php";

		$userList = getUsers();

		if($userList!=null){

			foreach($userList as $user){

				echo "<tr><td>".$user['id']."</td>"
				."<td>".$user['name']."</td>"
				."<td>".$user['surname']."</td>"
				."<td>".$user['city']."</td>"
				."<td><button class = 'btn btn-danger btn-sm' onclick = 'deleteUser(".$user['id'].")'>DELETE</button></td></tr>";

			}

		}

	}

?>