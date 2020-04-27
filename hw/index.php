<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="container mt-5 mb-5 pb-5">
			<div class="alert alert-success" role="alert" id = "message_alert" style="display: none;">		 
			</div>			
			<form>
			  <div class="form-group">
			    <label>Name</label>
			    <input type="text" class="form-control" id = "name">			  
			  </div>
			  <div class="form-group">
			    <label>Country</label>
			    <select class="form-control" id = "country">
			    </select>
			  </div>
			  <div class="form-group">
			    <label>City</label>
			    <select class="form-control" id = "city">
			    	<option value = '0'>Select City</option>
			    </select>	
			  </div>
			  <button type="button" id = "addClubButton" class="btn btn-primary">ADD CLUB</button>
			</form>
			<table class="table mt-5">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Country</th>
			      <th scope="col">City</th>
			      <th scope="col">Delete</th>
			    </tr>
			  </thead>
			  <tbody id = "result">			    
			  </tbody>
			</table>
		</div>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>