<?php
	
	require_once 'db.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<a href="checkin.php">CHECKIN</a>
		
		<?php

			$items = getAllItems();

			foreach($items as $item){
				
		?>	
			<form action="add.php" method="post">
				<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
				<input type="hidden" name="name" value="<?php echo $item['name']; ?>">
				<input type="hidden" name="price" value="<?php echo $item['price']; ?>">
				<h1><?php echo $item['name']; ?></h1>
				<h2><?php echo $item['price']; ?> USD</h2>
				<button>ADD TO BASKET</button>
			</form>
		<?php

			}

		?>

	</body>
</html>