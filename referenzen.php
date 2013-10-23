<h1>Referenzen</h1>
<article>
<h1>Schweden-Seite</h1>
<p>
<b>Projektbeschreibung</b></br></br>
Ziel des Projektes ist es, die Länder eines Kontinents über das Internet zu präsentieren. Die Darstellung eines Landes soll mit den Mitteln von Multimedia bzw. WWW erfolgen. Neben einer Beschreibung des Landes in Textform sollen Bilder und Filme oder Java-Applets einen Eindruck von dem Land vermitteln. Die multimedialen Inhalte sollen dabei auf landestypische Eigenarten eingehen, mit denen sich ein Land identifizieren lässt.
</br></br>
<b>Strukturvorgaben</b></br>
Das Projekte soll auf HTML unter Verwendung von CSS basieren. Texte und multimediale Inhalte sollen in die HTML-Seiten eingefügt werden. 
Die Grundstruktur der Seite soll wie folgt aussehen: </br>
1. Ebene: Weltkarte als "image map" mit Links zu den Kontinenten
(eine Weltkarte ist auf dem Server verfügbar) </br>
2. Ebene: Karte eines Kontinents als "image map" mit Links zu den einzelnen Ländern </br>
3. Ebene: Beschreibungsstartseite eines Landes</br>
Bei großen Ländern, wie z.B. USA, kann es sinnvoll sein, an dieser Stelle eine Landeskarte einzubauen. Auf dieser Karte könnte man beim Anklicken der Hauptstadt eine Beschreibung des Landes bekommen und beim Anklicken der einzelnen Bundesstaaten eine kurze Beschreibung des Bundesstaates. 
</br></br>
<b>Vorgaben zur technischen Realisierung</b></br>
Die Anzeige der Inhaltsseiten soll dynamisch erfolgen, d.h. die Inhaltsseiten sollen keine statischen HTML-Seiten sein.
Auf dem Server sollen sich folgende Dateien befinden, mit deren Hilfe die Seiten abhängig von der jeweiligen Anfrage erzeugt werden sollen. Die Skripte sollen die nötigen Daten aus entsprechenden Dateien beziehen. 
</br>
1. HTML-Schablone (Template) als Gerüst für die Darstellung </br>
2. XML-Textdateien mit den Länderinformationen </br>
Eine AJAX-Anwendung holt entsprechend sich die Textinhalte bzw. Bild- und Animationspfade aus den Dateien. Diese müssen in geeigneter Weise strukturiert sein, damit das Skript anhand der bei der Anfrage übergebenen Parameter die richtigen Daten einsetzen kann.
In der Praxis häufig anzutreffen ist eine tabellenartige Struktur. Die einzelnen Zeilen im Text entsprechen dabei einer Tabellenzeile. 
Das Auslesen dieser Dateien erfordert dann die Verwendung eines XML-Parsers. Solche Parser sind in der Java-Welt weit verbreitet und relativ einfach anzuwenden. Empfohlen wird an dieser Stelle die Verwendung von domj4. 
Die Analyse der Textdateien ist jedoch auch mit herkömmlichen Mitteln realisierbar, wenn möglichst eindeutige Markierungen gewählt werden.
</p>
<?php

function makeThumb( $obild, $maxbreite = 100, $maxhoehe = 100, $quadratisch = false, $qualitaet = 80, $speichern = NULL )
{
	// Bilddaten auslesen
	list( $original_breite, $original_hoehe, $typ, $imgtag, $bits, $channels, $mimetype ) = @getimagesize( $obild );
	
	switch ($typ)
	{
		case '1': $originalbild = imagecreatefromgif( $obild ); break;
		case '2': $originalbild = imagecreatefromjpeg( $obild ); break;
		case '3': $originalbild = imagecreatefrompng( $obild ); break;
		default :
			header( 'Content-Type: text/html; charset=utf-8' );
			die( 'Die übergebene Datei ist keine Grafik!' );
		break;
	}

	if ($quadratisch === false)
	{
		// Höhe und Breite für proportionales Thumbnail berechnen
		if ($original_breite > $maxbreite || $original_hoehe > $maxhoehe)
		{
			$thumb_breite = $maxbreite;
			$thumb_hoehe  = $maxhoehe;
			if ($thumb_breite / $original_breite * $original_hoehe > $thumb_hoehe)
			{
				$thumb_breite = round( $thumb_hoehe * $original_breite / $original_hoehe );
			}
			else
			{
				$thumb_hoehe = round( $thumb_breite * $original_hoehe / $original_breite );
			}
		}
		else
		{
			$thumb_breite = $original_breite;
			$thumb_hoehe = $original_hoehe;
		}
		// Thumbnail erstellen
		$thumb = imagecreatetruecolor( $thumb_breite, $thumb_hoehe );
		imagecopyresampled( $thumb, $originalbild, 0, 0, 0, 0, $thumb_breite, $thumb_hoehe, $original_breite, $original_hoehe );
	}
	else if ($quadratisch === true)
	{
		// Kantenlänge für quadratisches Thumbnail ermitteln
		$originalkantenlaenge = $original_breite < $original_hoehe ? $original_breite : $original_hoehe;
		$tmpbild = imagecreatetruecolor( $originalkantenlaenge, $originalkantenlaenge );
		if ($original_breite > $original_hoehe)
		{
			imagecopy( $tmpbild, $originalbild, 0, 0, round( $original_breite-$originalkantenlaenge )/2, 0, $original_breite, $original_hoehe );
		}
		else if ($original_breite <= $original_hoehe )
		{
			imagecopy( $tmpbild, $originalbild, 0, 0, 0, round( $original_hoehe-$originalkantenlaenge )/2, $original_breite, $original_hoehe );
		}
		// Thumbnail erstellen
		$thumb = imagecreatetruecolor( $maxbreite, $maxbreite );
		imagecopyresampled( $thumb, $tmpbild, 0, 0, 0, 0, $maxbreite, $maxbreite, $originalkantenlaenge, $originalkantenlaenge );
	}

	// Korrekten Image Header senden, wenn nicht gespeichert wird
	if (!$speichern) { header( 'Content-Type: ' . $mimetype ); }
	switch ($typ)
	{
		case '1': imagegif( $thumb, $speichern ); break;
		case '2': imagejpeg( $thumb, $speichern, $qualitaet ); break;
		case '3': imagepng( $thumb, $speichern ); break;
		default : imagejpeg( $thumb, $speichern, $qualitaet ); break;
	}
	// Speicher freigeben
	imagedestroy( $thumb );
}

// Anwendungsbeispiel
makeThumb( "./image/thumbs/schweden.png", 90, 90, false );

?>
</article>