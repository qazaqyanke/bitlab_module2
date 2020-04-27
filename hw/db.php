<?php 
$conn = new PDO('mysql:host=localhost;dbname=football','root','');

function getCountries(){
	global $conn;
	$query = $conn->prepare("SELECT * FROM countries");
	$query->execute();
	return $query->fetchAll();
}

function getCities($id){
	global $conn;
	$query = $conn->prepare("SELECT * FROM cities WHERE country_id = :id");
	$query->execute(array("id"=>$id));
	return $query->fetchAll();
}

function addClub($name $cityId){
	global $conn;
	$query = $conn->prepare("INSERT INTO clubs(id, name, city_id) VALUES (NULL, :name, :city_id)");
	$rows = $query->execute(array(
		"name"=>$name,
		"city_id"=>$cityId
	));

	return $rows==1;
}

function getClubs(){
	global $conn;
	$query = $conn->prepare("
	SELECT c.id, c.name, c.city_id, ci.name AS cityname, co.id AS countryId, co.name AS country_name FROM clubs c
	LEFT OUTER JOIN cities ci ON ci.id = c.city_id 
	LEFT OUTER JOIN countries co ON co.id = ci.country_id
	");
	$query->execute();
	return $query->fetchAll();
}

function getClubByName($name){
	global $conn;
	$query = $conn->prepare("SELECT * FROM clubs WHERE name = :name");
	$query->execute(array("name"=>$name));
	$result = $query->fetchAll();
	return sizeof($result)!=0;
}

function deleteClub($id){
	global $connection;
	$query = $connection->prepare("DELETE FROM clubs WHERE id = :id");
	$rows = $query->execute(array("id"=>$id));
	return $rows==1; 

}

?>