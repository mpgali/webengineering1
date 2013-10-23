<?php
$textnr = 4;
header ("Content-type: image/png");
$bild = imagecreate (400 , 50);
imagecolorallocate ($bild, 0, 0, 0);
$text_farbe = ImageColorAllocate ($bild, 255, 255, 0);
 
ImageString ($bild, $textnr, 0, 0, "Hallo Welt", $text_farbe);
ImagePNG ($bild);
?>

