<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<!-- 	<input type="button" id="someButton" value="Initial value">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#someButton').click(function(){
				$('#someButton').val('New Value')
			});
		});
	</script> -->
	<label for="">Nmae:</label>
	<input type="text" id="name">
	<?php 
	echo '<br>';
	 ?>
	 <label for="">Surname:</label>
	 <input type="text" id="surname">
	 <?php echo '<br>'; ?>
	 <button id="saveButton">Save</button>

	 <script type="text/javascript">
	 	
		$(document).ready(function(){
			$('#saveButton').click(function(){
				console.log($('#name').val());
				console.log($('#surname').val());

				$.post('processor.php',{
					name : $('#name').val(),
					surname : $('#surname').val(),

				},
				function(result) {
					console.log(result);
				}
				);
			});
		});

	 </script>
</body>
</html>