<?php
/**
 * Created by PhpStorm.
 * User: aggre
 * Date: 13.01.2017
 * Time: 21:56
 */
#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Lektion 2";
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
<div class="container">
    <p class="section white">
    <h2 class="header">2. Lektion Workshop</h2>
    <h4>Kursprogramm & Vorstellung</h4>
    <p> Vorstellung, Dozentin & Studenten (2 Minuten)
        Der Workshop findet jeden Montag von 09:15 – 15:00 statt.
    <ul><li> Modulanlass: ws3C-3iCa 09:15 – 11:00</li>
        <li>Modulanlass: ws3C-5iCbb 13:15 – 15:00</li></ul>
    Kontaktunterricht und Selbstudiumsanteile wechseln sich ab.
    Hier die detaillierte Workshop Programm Übersicht.

    <h4>Kommunikation
        Blog / Facebook / what else?</h4>
    <p>Brauchen wir einen Workshop-blog?
        Sind Kommunikation-Tools notwendig?

    <h2>Workshop Thema – Responsive Webdesign</h2>

    <h4>Vortrag: Das WWW-Universum</h4>
    In einem ca. 45 minütigen Vortrag wird in die verschiedenen Aspekte der Webentwicklung eingeführt.
    </p>
    <p>
    <p> <a href="http://www.pewinternet.org/2014/03/11/world-wide-web-timeline/">World Wide Web Timeline</a></p>
    Die <a href="http://info.cern.ch"/> erste Website /
    <a href="http://line-mode.cern.ch/www/hypertext/WWW/TheProject.html"> Line Mode Browser /</a>
    <a href="http://www.pizzahut.com/assets/pizzanet/home.html">Pizzanet</a>
    </p>
    <p>
    <h4> Webdesign History</h4>
    <a href="kissmetrics.com"> kissmetrics.com //</a> <a href="https://blog.kissmetrics.com/evolution-of-web-design/?wide=1"> evolution-of-web-design //</a>
    <a href="http://www.evolutionoftheweb.com/"> Evolution of the Web</a>
    </p>
    <p>
    <h5> Weitere Links</h5>
    timeline.web.cern.ch <a href="http://timeline.web.cern.ch/timelines/the-history-of-cern/overlay#1990-12-20"> the-history-of-cern</a><br>
    <a href="http://www.webdirections.org/history/"> web directions.org History</a><br>
    <a href="https://www.zakon.org/robert/internet/timeline/index.html?ver=293">  Hobbes' Internet Timeline 11 </a>
    </p>

    <h5> Responsive Webdesign (RWD)</h5>
    <p> Die Anzahl mobiler Benutzer steigt stetig.</p>
    <p>
        <a href="http://blog.froont.com/brief-history-of-web-design-for-designers/"> A brief history of web design for designers</a>
        <a href="http://engage.synecoretech.com/marketing-technology-for-growth/bid/204297/A-Brief-History-of-Responsive-Web-Design">A Brief History of Responsive Web Design</a>
    </p>

    <!--white section -->
    <div class="section white">
        <div class="row container">
        </div>
    </div>

    <div >
        <img src="Cern.gif" style=" width: 100%">
    </div>

    <!--white section -->
    <div class="section white">
        <div class="row container">
        </div>
    </div>

    <h4>  Aufgabe</h4>

    <h5> Vorschläge für ein Website-Update</h5>
    <p>Ein Kunde äussert den Wunsch nach einem Update für seine Website.  Die bestehende Seite funktioniere, er will nichts komplett neues. Jedoch besteht das Gefühl man könnte einiges verbessern. Die Site sollte in Zukunft auch auf mobilen Geräten funktionieren.
        Sie erklären sich bereit für eine Analyse nach den üblichen strukturellen Aspekten.
    </p>

    <!--white section -->
    <div class="section white">
        <div class="row container">
        </div>
    </div>
    <!--Picture-->
    <div>
        <img src="content.png" style="width: 100%">
    </div>
    <!--white section -->
    <div class="section white">
        <div class="row container">
        </div>
    </div>

    <!--CardStart-->
    <div class="row ">
        <div class="col s12 m3 ">
            <div class="card-panel card small  red darken-4">
          <span class="white-text">
              <a class="card-title white-text"> CONTENT (Inhalt)</a>
              <ul>
                  <li>- Informations-Architektur (Aufbau, Auffindbarkeit)</li>
                  <li>- Navigation</li>
                  <li>- Urls</li>
                  <li>- Accessibility (Barrierefreiheit)</li>
                  <li>- Medien (Text, Bilder, Videos, ...)</ul>
          </span>
            </div>
        </div>

        <div class="col s12 m3 ">
            <div class="card-panel card small  red darken-4">
          <span class="white-text">
               <a class="card-title white-text"> Context</a>
              <ul>
                  <li>- Zweck (Homepage, Shop, Präsentation, ...)</li>
                  <li> - Ziele (Mehr Benutzer, News, Sale, Verbreitung, ...)</li>
                  <li> - Konkurrenz</li>
              </ul>
          </span>
            </div>
        </div>



        <div class="col s12 m3">
            <div class="card-panel card small  red darken-4">
          <span class="white-text">
               <a class="card-title white-text"> Users</a>
              <ul>
                  <li>- Zielpublikum</li>
                  <li> - Erwartungen</li>
                  <li>- Interaktionen und Abläufe (Navigation, Suche, Bestellungen, ...)</li>
              </ul>

          </span>
            </div>
        </div>


        <div class="col s12 m3">
            <div class="card-panel card small red darken-4">
          <span class="white-text">
              <a class="card-title white-text"> Surface</a>
              <ul>
                  <li> - Layout</li>
                  <li> - Elemente (UX Patterns: Navigation, Formulare, Auswahl, Suche, ...)</li>
                  <li> - Interaktionen (Seitenwechsel, Views, Abläufe)</li>
                   <li> - Design (Fonts, Farben, Grössen)</li>
                   <li>  - Affordance, Benutzerführung</li>
              </ul>

          </span>
            </div>
        </div>
    </div>



    <p>
        Die Aufgabe bis zur nächsten Lektion ist es, in Zweierteams eine Analyse durchzuführen. Dabei untersuchen sie eine Website hinsichtlich der beschriebenen Aspekte und finden heraus was funktioniert und wo in Ihren Augen Verbesserungspotential besteht.
    </p>
    <p>
        Eine Webpräsenz ist eine Synthese von inhaltlichen Strukturen, interaktiven Abläufen, Benutzerfreundlichkeit, Gestaltung und technischen Rahmenbedingungen. Diese Übung soll das Bewusstsein für die Vielschichtigkeit und Komplexität aktueller Webprojekte schärfen, um die verschiedene Teilbereiche der Webentwicklung besser zu verstehen.
    </p>
    <h4> Geforderte Lieferergebnisse</h4>
    <p>
        Erstellen Sie eine kritische Analyse einer der untenstehenden Webpräsenzen. Zeigen Sie auf welche Punkte relevant sind bezüglich Inhalten, Kontext, den Benutzern und der Gestaltung und wie diese in der jeweiligen Seite berücksichtigt und verwendet werden.  Extrahieren sie positive Aspekte wie auch Unzulänglichkeiten. Formulieren Sie in einem weiteren Schritt konstruktive Verbesserungsvorschläge.
    </p>
    <p>
        Fassen Sie Ihre Analyse in einem illustrierten und nach den strukturellen Aspekten gegliederten Dokument zusammen, welches der Klasse als PDF vorgelegt werden kann.
        Der Umfang soll nicht mehr als zwei bis drei A4 Seiten betragen.
        WICHTIG: Name, Kursnummer sollen im Filenamen und im Dokument ersichtlich sein.
    </p>
    <p>
    <h5><strong>Senden Sie das PDF bis Samstag 24. September 2016 / 22.00 Uhr  an madam@monorom.com.</strong>
    </h5>
    </p>
    <h5>  Vorlagen</h5>

    <p>
        Junge moderne Farmer Seiten <br>
        <a href="http://www.junglandwirte.ch/de"> Junglandwirte</a> |<a href="http://www.juckerfarm.ch/"> juckerfarm</a>
    </p>
    <p>
        Hofläden <br>
        <a href="http://www.gemuese.ch/Gemuse/Saisonalitat-Regionalitat/Hofladen">  Hofladen Liste</a> |<a href="https://www.schweizerbauer.ch/artikel_11372.html"> Hofladen Suche</a>
    </p>


    <p>

    <h5>  Projekt Auswahl</h5>
    <ul>
        <li> <a href="http://www.rohners-hofladen.ch/">Rohners Hofladen</a></li>
        <li>  <a href="http://www.farmer.ch/">Farmer</a></li>
        <li> <a href="http://www.bauer-fritz.ch/">Bauer Fritz</a></li>
        <li> <a href="http://www.hof-wiederkehr.ch/de">Hof Wiederkehr</a></li>
        <li> <a href="http://www.schuepfenried.ch/hof/front_content.php"> Hof Schuepfenried</a></li>
        <li> <a href="http://www.buurpur.ch/"> buurpur</a></li>
        <li>  <a href="https://www.schweizerbauer.ch/">  Schweizerbauer</a></li>
        <li>  <a href="http://www.farmerrock.ch/"> Farmerrock</a></li>
        <li>  <a href="https://www.bauernpferderennen.ch/">  Bauernpferderennen</a></li>
    </ul>

    </p>
    <p>
        Kollaborationswerkzeuge
        Zur Erstellung des Analyseberichts eignet sich am besten ein A3 Blatt auf das Ihr post-it Zettel klebt.
        Natürlich kann auch auf herkömmliche Werkzeuge zurückgegriffen werden (Word, InDesign usw.), oder man verwendet eine der nachfolgend kurz beschriebenen Online-Lösungen.

        Google Docs
        Kollaboratives Textverarbeitungsprogramm mit dem sich Word oder PDF-Dokumente erstellen lassen. Vorteil gegenüber nativen Softwarelösungen ist sicherlich die Möglichkeit, gemeinsam, zeit- und ortsunabhängig an den geforderten Lieferergebnissen zu arbeiten.
        http://www.google.com/google-d-s/documents/

        Google Drawings
        Mit Google Drawings lässt sich bspw. auf einfache Art und Weise ein Strukturdiagramm erstellen.
        http://www.google.com/google-d-s/drawings/

        Umfrage

        Bitte beantworte die Umfrage zum «Workshop Webdesign» bis zum Freitag 23. September 2016.
        Die Antworten werden am zweiten Workshop-Tag präsentiert.
    </p>

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="Lesson1.php">1</a></li>
            <li class="active"><a href="Lesson2.php">2</a></li>
            <li class="waves-effect"><a href="Lesson3.php">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>

