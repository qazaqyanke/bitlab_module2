<?php
	
	class Player{
		
		public $number;
		public $name;
		public $surname;
		public $nickname;

		function __construct($number=0, $name="", $surname="", $nickname=""){
			$this->number = $number;
			$this->name = $name;
			$this->surname = $surname;
			$this->nickname = $nickname;
		}

		function getData(){
			return $this->number." ".$this->name." ".$this->surname." ".$this->nickname;
		}

	}

	class Club{
		
		public $name;
		public $country;
		public $ratingPoints;
		public $players = array();

		function __construct($name = "", $country = "", $ratingPoints = 0, $players = array()){

			$this->name = $name;
			$this->country = $country;
			$this->ratingPoints = $ratingPoints;
			$this->players = $players;

		}

		function printClubData(){
			$text = "Club: ".$this->name."<br>";
			$text.= "Country: ".$this->country."<br>";
			$text.= "Rating: ".$this->ratingPoints."<br>";

			$text.="<br>_____ SQUAD _____<br><br>";

			for($i=0;$i<sizeof($this->players);$i++){
				$text.=$this->players[$i]->getData()."<br>";
			}
			echo $text."<br><br><br><br>";
		}
		function sortPlayers(){
			for($i=0;$i<sizeof($this->players);$i++){

				for($j=0;$j<sizeof($this->players);$j++){

					if($this->players[$i]->number<$this->players[$j]->number){

						$temp = $this->players[$i];
						$this->players[$i] = $this->players[$j];
						$this->players[$j] = $temp;

					}

				}

			}
		}

	}

?>