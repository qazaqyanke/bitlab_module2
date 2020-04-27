<?php 
	
	class Animal{
		public $name;
		public $color;

		public function __construct($name ,$color){
			$this->name = $name;
			$this->color = $color;
		}
		public function printData(){
			echo $this->name . ' ' . $this->color . '<br>';
		}
		public function makeSound(){
			echo '*unknown*<br>';
		}
	}

	class Cat extends Animal{
		public function makeSound(){
			echo 'Meow<br>';
		}
	}
	class Dog extends Animal{
		public function makeSound(){
			echo 'Gav';
		}
	}

	$cat = new Cat('Murzik', 'black');
	$cat->printData();
	$cat->makeSound();

 
	$dog = new Dog('Barsik', 'white');
	$dog->printData();
	$dog->makeSound();

?>  