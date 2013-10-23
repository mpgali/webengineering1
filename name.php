<?php
$email = "Frank Wollenweber";
$textnr = 4;
$textbreite = imagefontwidth($textnr) * strlen($email);
$texthoehe  = imagefontheight($textnr);
 
header ("Content-type: image/png");
$bild1 = imagecreate ($textbreite , $texthoehe);
 
$hintergund_farbe  = imagecolorallocate ($bild1, 244, 244, 244);
$text_farbe        = imagecolorallocate ($bild1, 0, 0, 0);
 
imagestring ($bild1, $textnr, 0, 0, $email, $text_farbe);
imagepng ($bild1);
?>

