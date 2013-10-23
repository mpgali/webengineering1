<?php
$email = "system23@hotmail.de";
$textnr = 4;
$textbreite = imagefontwidth($textnr) * strlen($email);
$texthoehe  = imagefontheight($textnr);
 
//header ("Content-type: image/png");
$bild2 = imagecreate ($textbreite , $texthoehe);
 
$hintergund_farbe  = imagecolorallocate ($bild, 244, 244, 244);
$text_farbe        = imagecolorallocate ($bild, 0, 0, 0);
 
imagestring ($bild2, $textnr, 0, 0, $email, $text_farbe);
imagepng ($bild2;
?>

