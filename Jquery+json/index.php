<?php 

	class User{
		public $name;
		public $surname;
		public $age;
		public $city;
	}

	$user = new User();

	$user->name = "Beisebai";
	$user->surname = "Kuandykov";
	$user->age = 17;
	$user->city = "almaty";

	var_dump(json_encode($user));


?>