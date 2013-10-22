<?php

switch ($section)
{

case "videos":
     include("videos.php");
  break;

case "impressum":
      include("impressum.php");
  break;

default:
     include("home.php");
  break;
}
?>
