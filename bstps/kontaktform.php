<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "fw23@columba.uberspace.de";
    $email_subject = "Kontaktanfrage von Webseite";
     
     
    function died($error) {
        // your error code can go here
        echo "Es sind Fehler im Kontaktformular aufgetreten. ";
        echo "Diese Fehler sind untern aufgelistet.<br /><br />";
        echo $error."<br /><br />";
        echo "Bitte gehen Sie zurück zum Kontaktformular und korrigieren Sie die Fehler.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Die Email Adresse scheint nicht gültig zu sein.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Sie haben keinen Vorname eingetragen.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Sie haben kein Nachname eingetragen.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'Sie haben keine Nachricht eingetragen.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Details siehe unten.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Vorname: ".clean_string($first_name)."\n";
    $email_message .= "Nachname: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefon: ".clean_string($telephone)."\n";
    $email_message .= "Nachricht: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'Von: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Boostraps Spielwiese ">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Weblog: -=[WebEngineering]=- Bootstraps</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="ueber.html">Über</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
        <h3 class="text-muted">Bootstraps Spielwiese</h3>
      </div>

 

<p id="row marketing">
     Ihre Nachricht wurde übermittelt.Wir werden uns in Kürze mit Ihnen in Verbindung setzen.<br /><br />
     Bitte warten Sie werden weitergeleitet.
	 </p>
	</div>
<meta http-equiv="refresh" content="4;url=index.html"/>
<?php
}
?>
