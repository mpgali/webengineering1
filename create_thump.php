 <?php
  error_reporting(E_ALL);

  // Diese Funktion gibt es im Original unter [url]www.codeschnipsel.net[/url]
  // Ich habe sie ein wenig modifiziert
  function mkthumb($img_src,     // Dateiname
                   $img_width = "400",   // max. Größe in x-Richtung
                   $img_height = "400",  // max. Größe in y-Richtung
                   $folder_scr = "image",  // Ordner der normalen Bilder
                   $des_src = "thumbs")     // Ordner der Thumbs
  {
    $image = imagecreatefromjpeg($folder_scr."/".$img_src);
    list($src_width, $src_height) = getimagesize($folder_scr."/".$img_src);
    if($src_width >= $src_height)
    {
      $new_image_width = $img_width;
      $new_image_height = $src_height * $img_width / $src_width;
    }
    if($src_width < $src_height)
    {
      $new_image_height = $img_width;
      $new_image_width = $src_width * $img_height / $src_height;
    }
    $new_image = imagecreatetruecolor($new_image_width, $new_image_height);
    imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_image_width,$new_image_height, $src_width, $src_height);
    imagejpeg($new_image, $des_src."/".$img_src, 100);
    RETURN TRUE;
  }
?> 