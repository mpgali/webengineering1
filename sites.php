<?php

switch ($section)
{

case "impressum":
      include("impressum.php");
  break;
  
default:
     include("index.php");
  break;
}
?>
