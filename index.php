<?Php


	$month 	   = date('F');
	$daytext   = date('l');
	$day 	   = date('d');
	$year	   = date('Y');

	$white 	   = array('r' => '255' , 'g' => '255','b' => '255');
	$black 	   = array('r' => '0' , 'g' => '0','b' => '0');

	$image = @imagecreatefromjpeg("calendar-icon-blank.jpg");
	$white = imagecolorallocate($image, $white['r'], $white['g'], $white['b']);
	$black = imagecolorallocate($image, $black['r'], $black['g'], $black['b']);
	$font  = "HoboStd.otf";

	imagettftext($image, 15, 0, 175, 75, $white, $font, $month);
	imagettftext($image, 18, 0, 165, 150, $black, $font, $daytext);
	imagettftext($image, 100, 0, 140, 290, $black, $font, $day);
	imagettftext($image, 21, 0, 185, 340, $black, $font, $year);
	header ('Content-type: image/png');	

	imagepng($image, NULL, 0);

	imagedestroy($image);




?>