<?php 

// require_once 'app/models/user.php';

require_once 'vendor/autoload.php';

// use app\models\user;
// use app\models\message;
// use app\config\config;


// new User();
// new Message();
// new Config();

$faker = Faker\Factory::create();

echo $faker->name;
echo '<br>';
echo $faker->address;
echo '<br>';
echo $faker->email;

?>