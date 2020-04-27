<?php 


class User{

      protected $name;
      protected $surname;
      protected $age;

      public function __construct($name = '', $surname = '', $age = ''){
         $this->name = $name;
         $this->surname = $surname;
         $this->age = $age;
      }

      public function getUserData(){
         return $this->name." ".$this->surname." ".$this->age." years old";
      }
   }





?>