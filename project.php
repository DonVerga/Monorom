<?php
/**
 * Created by PhpStorm.
 * User: aggre
 * Date: 12.01.2017
 * Time: 15:17
 */#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Projekte";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>

<div class="parallax-container">
    <div class="parallax"><img src="background1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>

    <div class="section white">
        <div class="row container">
            <h2 class="header">Lieferbare Ergebnisse</h2>
            </div>
    </div>
<div class="row container">

<ul class="collection with-header">
<li class="collection-header"><h3>Konzept</h3></li>
<li class="collection-item">Erarbeiten einer strategischen Analyse von Bedürfnissen und Formulierung der Ziele anhand einer geeigneten Methode (Design-Studio, Mind-Map, Personas, ...)</li>
<li class="collection-item">Dokumentation des methodischen Vorgangs</li>
<li class="collection-item">Konkurrenzanalyse</li>
<li class="collection-item">Definition der Kernfunktionalität (z.B. Suche, Produktpräsentation, Tool, ...) mit Begründung hinsichtlich der strategischen Ziele</li>
<li class="collection-item">Methodischer Test der Kernfunktionalität für die Benutzer (Personas, User-Stories/Journeys)</li>
<li class="collection-item">Erarbeitung der Informations-Architektur und Navigationskonzept basierend auf den Inhaltsvorgaben rsp. existierenden Inhalten </li>
<li class="collection-item">Umfang: 3-10 Seiten als PDF</li>
</ul>
<ul class="collection with-header">
<li class="collection-header"><h3>Wireframes und Designvorschlag</h3></li>
<li class="collection-item">Detaillierte wireframes der Kernfunktionalität in der die Benutzerführung und Verhalten der Seite visualisiert werden</li>
<li class="collection-item">Konzeption vom Verhalten der Ansichten für verschiedene Endgeräte</li>
<li class="collection-item">Erstellen Sie einen Designvorschlag in dem ein Gestaltungskonzept und die wichtigsten Elemente sichtbar werden (z.B. für die Startseite, oder der Kernfunktionalität)</li>
<li class="collection-item">Umfang: 3-5 Seiten als PDF</li>
</ul>
<ul class="collection with-header">
<li class="collection-header"><h3>Umsetzung funktionaler Prototyp </h3></li>
<li class="collection-item">Setzen sie die Startseite sowie Abläufe der Kernfunktionalität als klickbaren funktionalen Prototypen um</li>
<li class="collection-item">Implementation für Endgeräte in drei verschiedenen Grössen (Smartphone, Tablet, Desktop)</li>
<li class="collection-item">Optionale Verwendung von einem CSS-Framework</li>
<li class="collection-item">Integration spezieller Interaktionselemente und Auszeichnungen (z.B. Fonts, Slideshows, Galerien, Videos, Animationen)</li>
<li class="collection-item">Umfang: Grundlayout mit ca. 3-5 Detailansichten der Kernfunktionalität </li>
</ul>
</div>
