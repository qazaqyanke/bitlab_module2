<?php 

	class Cat{
		private $name;

		public function __construct($name){
			$this->$name;
		}
	}

	$cat = new Cat('Qwerty');

	// var_dump($cat);
	

	if (0 === "") echo "2";