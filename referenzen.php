<h1>Referenzen</h1>
<article>
<h1>Schweden-Seite</h1>
<p>
<b>Projektbeschreibung</b></br>
Ziel des Projektes ist es, die Länder eines Kontinentes übers Internet zu präsentieren. Die Darstellung eines Landes soll mit den Mitteln von Multimedia bzw. WWW erfolgen. Neben einer Beschreibung des Landes in Textform sollen Bilder und Filme oder Java-Applets einen Eindruck von dem Land vermitteln. Die multimedialen Inhalte sollen dabei auf landestypische Eigenarten eingehen, mit denen sich ein Land identifizieren lässt.
<b>Strukturvorgaben</b></br>
Das Projekte soll auf HTML unter Verwendung von CSS basieren. Texte und multimediale Inhalte sollen in die HTML-Seiten eingefügt werden. 
Die Grundstruktur der Seite soll wie folgt aussehen: </br>
1. Ebene: Weltkarte als "image map" mit Links zu den Kontinenten
(eine Weltkarte ist auf dem Server verfügbar) </br>
2. Ebene: Karte eines Kontinents als "image map" mit Links zu den einzelnen Ländern </br>
3. Ebene: Beschreibungsstartseite eines Landes</br>
Bei großen Ländern, wie z.B. USA, kann es sinnvoll sein, an dieser Stelle eine Landeskarte einzubauen. Auf dieser Karte könnte man beim Anklicken der Hauptstadt eine Beschreibung des Landes bekommen und beim Anklicken der einzelnen Bundesstaaten eine kurze Beschreibung des Bundesstaates. 
</br>
<b>Vorgaben zur technischen Realisierung</b></br>
Die Anzeige der Inhaltsseiten soll dynamisch erfolgen, d.h. die Inhaltsseiten sollen keine statischen HTML-Seiten sein.
Auf dem Server sollen sich folgende Dateien befinden, mit deren Hilfe die Seiten abhängig von der jeweiligen Anfrage erzeugt werden sollen. Die Skripte sollen die nötigen Daten aus entsprechenden Dateien beziehen. 
1. HTML-Schablone (Template) als Gerüst für die Darstellung </br>
2. XML-Textdateien mit den Länderinformationen </br>
Eine AJAX-Anwendung holt entsprechend sich die Textinhalte bzw. Bild- und Animationspfade aus den Dateien. Diese müssen in geeigneter Weise strukturiert sein, damit das Skript anhand der bei der Anfrage übergebenen Parameter die richtigen Daten einsetzen kann.
In der Praxis häufig anzutreffen ist eine tabellenartige Struktur. Die einzelnen Zeilen im Text entsprechen dabei einer Tabellenzeile. 
Das Auslesen dieser Dateien erfordert dann die Verwendung eines XML-Parsers. Solche Parser sind in der Java-Welt weit verbreitet und relativ einfach anzuwenden. Empfohlen wird an dieser Stelle die Verwendung von domj4. 
Die Analyse der Textdateien ist jedoch auch mit herkömmlichen Mitteln realisierbar, wenn möglichst eindeutige Markierungen gewählt werden.
</p>
</article>