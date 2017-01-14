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
    $TPL->PageTitle = "Links";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>

<!-- begin content -->
<div class="parallax-container">
    <div class="parallax"><img src="background1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>


        <!--   Titel   -->
        <div class="row container">
            <div class="col s12 m12">

                <h2>Links</h2>

                
            </div>
        </div>
		
		<!-- Wochenüberschrift -->
		
		<div class="row container">
			<div class="col s12 m12">
		<ul class="collapsible popout" data-collapsible="accordion">
			<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 1</div>
				<div class="collapsible-body">
					<ul class="collapsible" data-collapsible="accordion">
						<!-- 2. Ebene -->
						<li>
							<div class="collapsible-header">Das WWW Universum</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://www.pewinternet.org/2014/03/11/world-wide-web-timeline/" class="collection-item">Word Wide Web Timeline</a>
									<a href="http://info.cern.ch/" class="collection-item">Die erste Website</a>
									<a href="http://line-mode.cern.ch/www/hypertext/WWW/TheProject.html" class="collection-item">Line Mode Browser</a>
									<a href="http://www.pizzahut.com/assets/pizzanet/home.html" class="collection-item">Pizzanet</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Webdesign History</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="https://blog.kissmetrics.com/evolution-of-web-design/?wide=1" class="collection-item">kissmetrics</a>
									<a href="http://www.evolutionoftheweb.com/" class="collection-item">Evolution of the Web</a>
									<a href="http://timeline.web.cern.ch/timelines/the-history-of-cern/overlay#1990-12-20" class="collection-item">The History of CERN</a>
									<a href="http://www.webdirections.org/history/" class="collection-item">Web Directions History</a>
									<a href="http://www.zakon.org/robert/internet/timeline/index.html?ver=293" class="collection-item">Hobbe's Timeline 11</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Responsive Webdesign</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://blog.froont.com/brief-history-of-web-design-for-designers/" class="collection-item">A brief history of web design for designers</a>
									<a href="http://engage.synecoretech.com/marketing-technology-for-growth/bid/204297/A-Brief-History-of-Responsive-Web-Design" class="collection-item">A brief history of Responsive Web Design</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Projekt Auswahl</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://www.rohners-hofladen.ch/" class="collection-item">Rohners Hofladen</a>
									<a href="http://www.farmer.ch/" class="collection-item">Farmer</a>
									<a href="http://www.bauer-fritz.ch/" class="collection-item">Bauer Fritz</a>
									<a href="http://www.hof-wiederkehr.ch/de" class="collection-item">Hof Wiederkehr</a>
									<a href="http://www.schuepfenried.ch/" class="collection-item">Hof Schuepfenried</a>
									<a href="http://www.buurpur.ch/" class="collection-item">buurpur</a>
									<a href="https://www.schweizerbauer.ch/" class="collection-item">Schweizerbauer</a>
									<a href="http://www.farmerrock.ch/" class="collection-item">Farmerrock</a>
									<a href="http://www.bauernpferderennen.ch/" class="collection-item">Bauernpferderennen</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Kollaborationswerkzeuge</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://www.google.com/google-d-s/documents/" class="collection-item">Google Docs</a>
									<a href="http://www.google.com/google-d-s/drawings/" class="collection-item">Google Drawings</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>

			<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 2</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Anatomie einer URL</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="https://seomoz.app.box.com/shared/g4ju1fc4it" class="collection-item">SEO Cheat Sheet: Anatomy of a URL</a>
									<a href="https://support.google.com/webmasters/answer/76329?hl=en" class="collection-item">Keep a simple URL structure</a>
									<a href="https://de.wikipedia.org/wiki/Uniform_Resource_Locator" class="collection-item">wikipedia URL</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Dateinamen</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="https://wiki.selfhtml.org/wiki/HTML/Regeln/Konventionen_f%C3%BCr_Dateinamen" class="collection-item">wiki.selfhtml.org</a>
									<a href="http://www.sfs.uni-tuebingen.de/nalida/de/blog/103-benennung-von-dateien.html" class="collection-item">Benennung von Dateien</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">W3C und WHATWG (Web Hypertext Application Technology Working Group)</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://de.wikipedia.org/wiki/HTML5" class="collection-item">Wikipedia</a>
									<a href="http://www.html5rocks.com/en/resources.html" class="collection-item">HTML5 ROCKS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Document Object Model (DOM)</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="https://www.w3.org/DOM/" class="collection-item">w3.org</a>
									<a href="https://de.wikipedia.org/wiki/Document_Object_Model" class="collection-item">wiki/Document_Object_Model</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">HTML5 Elemente</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5/HTML5_element_list" class="collection-item">HTML5 Element Liste</a>
									<a href="http://madebymike.com.au/html5-periodic-table" class="collection-item">Periodic table of HTML5 elements</a>
									<a href="http://intensivstation.ch/html5/" class="collection-item">Anwendung der Layout-Struktur Elemente</a>
									<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements" class="collection-item">Block-level elements</a>
									<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Inline_elemente" class="collection-item">Inline elemets</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">HTML5 Attribute</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://webkompetenz.wikidot.com/html-handbuch:html-attributreferenz" class="collection-item">Liste der Attribute</a>
									<a href="http://www.w3.org/TR/html-markup/global-attributes.html" class="collection-item">Globale HTML5-Attribute</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Für welche Browser arbeiten wir in diesem Workshop?</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="http://html5test.com/" class="collection-item">Browser HTML5 Test</a>
									<a href="http://supportdetails.com/" class="collection-item">supportdetails.com</a>
									<a href="http://caniuse.com/" class="collection-item">Can I use</a>
								</div>
							</div>
						</li>
						<li>
							<div class="collapsible-header">Tools</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="https://www.codecademy.com/" class="collection-item">codecademy</a>
									<a href="http://www.w3schools.com/html/" class="collection-item">w3schools</a>
									<a href="http://de.selfhtml.org/" class="collection-item">selfhtml</a>
									<a href="http://wiki.selfhtml.org/wiki/Startseite" class="collection-item">selfwiki</a>
									<a href="http://learn.shayhowe.com/html-css/" class="collection-item">shayhowe</a>
									<a href="http://de.html.net/tutorials/html/" class="collection-item">HTML Tutorial</a>
									<a href="http://www.lynda.com/" class="collection-item">Lynda</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 3</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 4</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 5</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 6</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 7</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 8</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 9</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 10</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 11</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 12</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 13</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 14</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
						<!-- 1. Ebene -->
			<li>
				<div class="collapsible-header red darken-4 white-text">Woche 15</div>
				<div class="collapsible-body">
					<!-- 2. Ebene -->
					<ul class="collapsible" data-collapsible="accordion">
					<!--Week Title -->
						<li>
							<div class="collapsible-header">Untertitel</div>
							<div class="collapsible-body">
								<div class="collection">
									<a href="#" class="collection-item">Linktext</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</li>
      </ul>
			 </div>
		</div>


<div class="container">
    <div class="section">
    </div>

</div>
