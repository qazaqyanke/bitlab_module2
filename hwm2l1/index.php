<?php
	
	require_once "Player.php";

	$sq1 = array();
	$sq1[] = new Player(3, "Egor", "Vasilyev", "flamie");
	$sq1[] = new Player(1, "Denis", "Sharipov", "electronic");
	$sq1[] = new Player(5, "Aleksandr", "Kostyliev", "S1mple");
	$sq1[] = new Player(2, "Kirill", "Mikhailov", "boombl4");
	$sq1[] = new Player(4, "Ilya", "Zalutskiy", "Perfecto");

	$sq2 = array();
	$sq2[] = new Player(1, "Alexey", "Berezin", "Solo");
	$sq2[] = new Player(4, "Bakyt", "Emilzhanov", "Zayac");
	$sq2[] = new Player(3, "Zaur", "Shakhmurzaev", "Cooman");
	$sq2[] = new Player(2, "Volodimir", "Minenko", "Noone");

	$sq4 = array();
	$sq4[] = new Player(1, "حسن", "سید سمائل", "SumaiL");
	$sq4[] = new Player(2, "Johan", "Sundstein", "N0tail");
	$sq4[] = new Player(3, "Мартин", "Саздов", "Saksa");
	$sq4[] = new Player(4, "叶", "乃政", "MidOne");
	$sq4[] = new Player(5, "Topias Miikka", "Taavitsainen", "Topson");
	

	$nav = new Club("Navi", "Ukraine", 1, $sq1);
	$nav->sortPlayers();
	$vir = new Club("Virtus.pro", "Russia", 2, $sq2);
	$vir->sortPlayers();
	$og = new Club("OG", "European Union", 3, $sq4);
	$og->sortPlayers();

	$nav->printClubData();
	$vir->printClubData();
	$og->printClubData();

?>