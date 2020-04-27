<?php
	
	class Student{

		public $id;
		public $name;
		public $surname;
		public $gpa;

		function __construct($id=0, $name="", $surname="", $gpa=0){

			$this->id = $id;
			$this->name = $name;
			$this->surname = $surname;
			$this->gpa = $gpa;

		}

		function getStudentData(){
			return $this->id." ".$this->name." ".$this->surname." ".$this->gpa;
		}

	}

?>