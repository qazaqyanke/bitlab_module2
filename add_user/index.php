<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	</head>
	<body>
		
		<div class="container">

			<div class="row mb-5">
				<div class="col-6 offset-3">
					<div class="form-group">
						<label>Name: </label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label>Surname: </label>
						<input type="text" class="form-control" id="surname">
					</div>
					<div class="form-group">
						<label>City: </label>
						<select class="form-control" id="city">
							<option>Almaty</option>
							<option>Astana</option>
							<option>Shymkent</option>
							<option>Atyrau</option>
							<option>Karaganda</option>
						</select>
					</div>					   
					<button type="button" class="btn btn-primary" id = "add_button">ADD</button>
				</div>
			</div>

			<div class="row">
					<div class="col-6 offset-3">
						<table class="table">
							<thead>
								<tr>
									<th>
										ID
									</th>
									<th>
										NAME
									</th>
									<th>
										SURNAME
									</th>
									<th>
										CITY
									</th>
									<th>
										DELETE
									</th>	
								</tr>
							</thead>
							<tbody id = "result">
							</tbody>
						</table>
					</div>
				</div>
		</div>
		
		<script type="text/javascript">
			$(document).ready(function(){

				updateList();

				$("#add_button").click(function(){

					u_name = $("#name").val();
					u_surname = $("#surname").val();
					u_city = $("#city").val();

					$.post("adduser.php", {

						name: u_name,
						surname: u_surname,
						city: u_city

					}, function(result){
						if(result=="OK"){

							updateList();

						}
					});
					
				});
			});

			function updateList(){

				$.get("getusers.php", {

				}, function(data){

					$("#result").html(data);

				});

			}

			function deleteUser(userId) {
				$.post("deleteuser.php", {

					id: userId

				}, function(result){

					if(result=='OK'){
						updateList();
					}

				});
			}

		</script>
	</body>
</html>