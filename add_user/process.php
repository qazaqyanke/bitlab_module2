<?php
	
	if($_SERVER['REQUEST_METHOD']=='GET'){

		if(isset($_GET['text'])){

			echo "
			<h1>
				".$_GET['name']." 
				".$_GET['surname']." 
				".$_GET['age']." 
			</h1>";

			echo "<h2>".$_GET['text']."</h2>";

		}

	}

?>