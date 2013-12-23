<?php

switch ($section)
{

case "impressum":
      include("impressum.php");
  break;

  case "referenzen":
      include("referenzen.php");
  break;
  
  case "projekte":
  	include("projekte.php");
  	break;
  
default:
     include("home.php");
  break;
}
?>
