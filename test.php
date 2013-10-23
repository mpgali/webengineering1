<?php

    function emailPic($email)
    {
        header("Content-type:image/png");

        $image =        imagecreate (150,16);
        $background =   imagecolorallocate($image,255,255,255);
        $color =        imagecolorallocate($image,102,102,102);
        $font =         "fonts/arial.ttf";

        imageTTFtext($image,9,0,5,12,$color,$font,$email);
        imagegif($image,"email.png");
    }

    $email = "system23@hotmail.de";
    
   emailPic($email);
    echo '[img]email.png[/img]';
?>
