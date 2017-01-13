<?php
/**
 * Created by PhpStorm.
 * User: aggre
 * Date: 10.01.2017
 * Time: 12:46
 */
#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Index";
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


        <!--   Icon Section   -->
        <div class="row container">
            <div class="col s12 m12">

                <h5>Modul ws3C-3iCa & ws3C-3iCbb</h5>

                <p class="light">Modulanlass: ws3C-3iCa 09:15 – 11:00 <br>Modulanlass: ws3C-3iCbb 13:15 – 15:00</p>
                <h5 class="light">Lernziele</h5>
                <p class0"light">Dieses Modul vermittelt praxisnah Webdesign (Frontend, UI) Technologien und Methoden für die Konzeption, Design und Entwicklung von Web-Frontend für den Desktop und mobile Geräte. Neben der fundierten Vermittlung von Webstandards wird ein typischer Interaktionsdesignprozess durchlaufen: von der Entwicklung eigener Interaktions-, Funktions- und Gestaltungsideen, über deren initiale Umsetzung in Wireframe-Lösungen, bis hin zu fertig ausgearbeiteten HTML/CSS/JS Interface-Prototypen.

                Die Studierenden werden befähigt ein eigenes Webdesignprojekt in einem ganzheitlichen Designprozess zu planen und erfolgreich durchzuführen. Sie lernen angemessene Interfacelösungen basierend auf den Webstandards HTML 5, CSS 3 und dem Javascript Framework jQuery zu entwickeln.</p>
            </div>
        </div>




<div class="container">
    <div class="section">
    </div>

</div>
