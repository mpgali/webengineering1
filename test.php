<?php
$email = "hier kommt Ihre E-Mail-Adresse";
$textnr = 4;
$textbreite = imagefontwidth($textnr) * strlen($email);
$texthoehe  = imagefontheight($textnr);
 
header ("Content-type: image/png");
$bild = imagecreate ($textbreite , $texthoehe);
 
$hintergund_farbe  = imagecolorallocate ($bild, 222, 222, 222);
$text_farbe        = imagecolorallocate ($bild, 0, 0, 0);
 
imagestring ($bild, $textnr, 0, 0, $email, $text_farbe);
imagepng ($bild);
?>

