<?php
	
	session_start();
	require_once 'db.php';

	if(isset($_SESSION['BASKET'])){
		$bask = $_SESSION['BASKET'];
	}else{
		$bask = array();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php

			$total = 0;

			for($i=0;$i<sizeof($bask); $i++){
				
		?>			
			<h1><?php echo $bask[$i]['name']; ?></h1>
			<h2><?php echo $bask[$i]['price']; ?> USD</h2>
		<?php

			$total+=$bask[$i]['price'];

			}

			echo "<h1>TOTAL : $total USD</h1>";

		?>


</body>
</html>