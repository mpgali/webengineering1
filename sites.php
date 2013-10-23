<?php

switch ($section)
{

case "impressum":
      include("impressum.php");
  break;
  case "email":
      include("email.php");
  break;
  case "name":
      include("name.php");
  break;
  case "referenzen":
      include("referenzen.php");
  break;
  
default:
     include("home.php");
  break;
}
?>
