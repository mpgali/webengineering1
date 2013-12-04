<?php

 if(isset($_GET["section"]))
 {
      $section = $_GET["section"];
 }
 else {
       $section = "";
 
 }
 
?>
<!DOCTYPE html> 
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Weblog: -=[WebEngineering]=-</title>
</head>
<body>
<div id="wrapper" class="shadow"> 
<div id="header"></div>
<div id="menue-top" class="shadow-menu">
<?php include ("menu.php"); ?>
</div>
<div id="content">
<?php include ("sites.php"); ?>
</div>
</div>
<div id="footer">
<?php include ("footer.php"); ?>
</div>
</body>

</html>