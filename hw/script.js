$(document).ready(function(){

			getCountires();
			getAllClubs();

			$("#country").change(function(){
				getCitiesByCountryId($("#country").val());
			});

			$("#addClubButton").click(function(){
				addClub($("#name").val(), $("#city").val());
			});

			$("#message_alert").click(function(){
				$("#message_alert").fadeOut();
			});
			
		});

		function getCountires(){

			$.get("getcountries.php", {

			}, function(data){

				countries = JSON.parse(data);
				htmlData = "<option value = '0'>Select Country</option>";

				for(i=0;i<countries.length;i++){

					htmlData+= "<option value = '"+countries[i]['id']+"'>"+countries[i]['name']+"</option>";

				}

				$("#country").html(htmlData);

			});

		}

		function getCitiesByCountryId(countryId){

			$.get("getcities.php", {
				
				"id":countryId

			}, function(data){

				cities = JSON.parse(data);
				htmlData = "<option value = '0'>Select City</option>";

				for(i=0;i<cities.length;i++){

					htmlData+= "<option value = '"+cities[i]['id']+"'>"+cities[i]['name']+"</option>";

				}

				$("#city").html(htmlData);

			});

		}

		function addClub(clubName, clubCity){

			$.post("addclub.php", {
				
				"name": clubName,
				"city": clubCity

			}, function(data){

				result = JSON.parse(data);

				if(result['status']=='OK'){

					$("#message_alert").attr('class', 'alert alert-success');
					$("#name").val("");

				}else{

					$("#message_alert").attr('class', 'alert alert-danger');
				
				}

				$("#message_alert").fadeIn();
				$("#message_alert").html(result['message']);

				getAllClubs();

			});

		}

		function getAllClubs(){

			$.get("getclubs.php", function(data){

				clubs = JSON.parse(data);

				tableHTML = "";

				for(i=0;i<clubs.length;i++){
					tableHTML+="<tr>";
					tableHTML+="<td>"+clubs[i]['id']+"</td>";
					tableHTML+="<td>"+clubs[i]['name']+"</td>";
					tableHTML+="<td>"+clubs[i]['countryName']+"</td>";
					tableHTML+="<td>"+clubs[i]['cityName']+"</td>";
					tableHTML+="<td><button class = 'btn btn-danger btn-sm' onclick = 'deleteClub("+clubs[i]['id']+")'>DELETE</button></td>";
					tableHTML+="</tr>";
				}

				$("#result").html(tableHTML);

			})

		}

		function deleteClub(clubId){

			$.post("deleteclub.php", {
				
				"id": clubId

			}, function(data){

				getAllClubs();

			});
		}