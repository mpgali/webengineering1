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
<article>
<h1>App für mobile Systeme</h1>
<h3>Projektbeschreibung</h3>
<p>Mit dem Netzwerk-Diagnose Tool ist es möglich verschiedene Informationen aus dem
angebundenen Netzwerk auszulesen:</br>
1. Eine Funktion befasst sich mit der Anzeige der lokalen IP-Adresse, sowie die
dazugehörige externe bzw. öffentliche IP-Adresse.</br>
2. Mit dem LAN-IP-Scanner ist es möglich, alle im Netzwerk aktive Rechner in einer
Liste anzuzeigen. Dabei wird das lokale Netzwerk, indem das mobile Endgerät
eingebunden ist, abgefragt ob hinter jeder IP, beginnend von 1-255, ein Rechner aktiv
ist.</br>
3. Die Ping-Funktion ermöglicht eine Überprüfung, ob ein bestimmter Host ( entweder
im lokalen oder externen Netz ) erreichbar ist.</br>
4. Der WiFi Finder ist zur Kontrolle von Wireless Local Area Network in der direkten
Nähe.</br>
5. Das letzte Tool liest allgemein die Mac-Adressen der zugehörigen IP-Adresse aus.</br>
</p>
<h4>Hardware</h4>
<p>
Es wurden 2 Computer der neueren Generation zur Bearbeitung benutzt, ein Samsung
i9000 mit Android Version 2.3.3 für Programm Tests.</p>
<h4>Software</h4>
<p>
Auf einem PC wurde unter Windows 7 (64bit) die VMware Workstation 7.1.5 installiert, in der die virtuellen Umgebung Ubuntu 11.10 zum Einsatz kam. Der Gedanke war, das man
in einer Linux Umgebung besser programmieren kann und dadurch auch unabhängig vom
Hauptrechner ist.</br>
Nach der Installation von Ubuntu Linux wurden alle Updates eingespielt.</br>
Im Weiteren wurde Eclipse der Version 3.7.0 (Indigo) installiert und über „Install New
Software“ das Android SDK. Anschließend wurden die Updates für das Eclipse installiert und
dieses auf den neusten Stand gebracht.</br>
Das erste Android Projekt konnte Hilfe der Seite AndroidPIT [AndPit01] zum
Laufen gebracht werden. Damit war der erste Einstieg in die Android Programmierung
begonnen.</br>
Die Bildbearbeitung wurde mit Hilfe von Adobe Photoshop CS3 vorgenommen und zur
Suche von Informationen kam der Firefox 9 zum Einsatz.
</p>
<p align="center">
<img src="image/thumbs/programmstart.png">
<img src="image/thumbs/lan-ip-scan-eingabe.png">
<img src="image/thumbs/ping-eingabe.png">
</p>
<p align="center">
<img src="image/thumbs/startbild.png">
<img src="image/thumbs/wlan-finder.png">
</p>
</article>