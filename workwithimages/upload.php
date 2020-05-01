<?php 

if ($_SERVER['REQUEST_METHOD']=='POST') {
	if($_FILES['ava']['size'] < 524880 && 
		$_FILES['ava']['type'] == 'image/jpeg'||
		$_FILES['ava']['type'] == 'image/png'){

		$filename = $_FILES['ava']['tmp_name'];

		list($width, $height) = getimagesize($filename);
		$newWidth = $width / 2;
		$newHeight = $height / 2; 

		$smallImage = imagecreatetruecolor($newWidth, $newHeight);

		$sourceImage = imagecreatefromjpeg($filename);

		imagecopyresized($smallImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagejpeg($smallImage, "images/huilo.jpg");
		
 
	}
}

?>