<?php

switch ($section)
{

case "impressum":
      include("impressum.php");
  break;
  
  case "test":
      include("test.php");
  break;

default:
     include("index.php");
  break;
}
?>
