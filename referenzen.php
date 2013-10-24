<h1>Referenzen</h1>
<article>
<h1>Schweden-Seite</h1>
<h3>Projektbeschreibung</h3>
<p>
Ziel des Projektes ist es, die Länder eines Kontinents über das Internet zu präsentieren. Die Darstellung eines Landes soll mit den Mitteln von Multimedia bzw. WWW erfolgen. Neben einer Beschreibung des Landes in Textform sollen Bilder und Filme oder Java-Applets einen Eindruck von dem Land vermitteln. Die multimedialen Inhalte sollen dabei auf landestypische Eigenarten eingehen, mit denen sich ein Land identifizieren lässt.
</p>
<h4>Strukturvorgaben</h4>
<p>Das Projekte soll auf HTML unter Verwendung von CSS basieren. Texte und multimediale Inhalte sollen in die HTML-Seiten eingefügt werden. 
Die Grundstruktur der Seite soll wie folgt aussehen: </br>
1. Ebene: Weltkarte als "image map" mit Links zu den Kontinenten
(eine Weltkarte ist auf dem Server verfügbar) </br>
2. Ebene: Karte eines Kontinents als "image map" mit Links zu den einzelnen Ländern </br>
3. Ebene: Beschreibungsstartseite eines Landes</br></br>
Bei großen Ländern, wie z.B. USA, kann es sinnvoll sein, an dieser Stelle eine Landeskarte einzubauen. Auf dieser Karte könnte man beim Anklicken der Hauptstadt eine Beschreibung des Landes bekommen und beim Anklicken der einzelnen Bundesstaaten eine kurze Beschreibung des Bundesstaates. 
</p>
<h4>Vorgaben zur technischen Realisierung</h4>
<p>
Die Anzeige der Inhaltsseiten soll dynamisch erfolgen, d.h. die Inhaltsseiten sollen keine statischen HTML-Seiten sein.
Auf dem Server sollen sich folgende Dateien befinden, mit deren Hilfe die Seiten abhängig von der jeweiligen Anfrage erzeugt werden sollen. Die Skripte sollen die nötigen Daten aus entsprechenden Dateien beziehen. 
</br>
1. HTML-Schablone (Template) als Gerüst für die Darstellung </br>
2. XML-Textdateien mit den Länderinformationen </br></br>
Eine AJAX-Anwendung holt entsprechend sich die Textinhalte bzw. Bild- und Animationspfade aus den Dateien. Diese müssen in geeigneter Weise strukturiert sein, damit das Skript anhand der bei der Anfrage übergebenen Parameter die richtigen Daten einsetzen kann.
In der Praxis häufig anzutreffen ist eine tabellenartige Struktur. Die einzelnen Zeilen im Text entsprechen dabei einer Tabellenzeile. 
Das Auslesen dieser Dateien erfordert dann die Verwendung eines XML-Parsers. Solche Parser sind in der Java-Welt weit verbreitet und relativ einfach anzuwenden. Empfohlen wird an dieser Stelle die Verwendung von domj4. 
Die Analyse der Textdateien ist jedoch auch mit herkömmlichen Mitteln realisierbar, wenn möglichst eindeutige Markierungen gewählt werden.
</p>
</br>
<p align="center">
<a href="http://wp.vfh.fh-wolfenbuettel.de/~wfg855/"><img src="image/thumbs/schweden-seite.png"></a>
</p>

</article>
<article>
<h1>Mediendesign</h1>
<h3>Projektbeschreibung</h3>
<p>
Erstellung einer Webseite zur Präsentation verschiedener grafischer Studienobjekte.</p>
</br>
<p align="center">
<img src="image/thumbs/md2-1.png">
<p align="center">
<img src="image/thumbs/md2-2.png">
</p>
</p>
</article>