<?php

switch ($section)
{

case "video":
 include("video.php");
  break;

case "impressum":
include("impressum.php");
  break;

default:
include("home.php");
  break;
}
?>
