<?php
/**
 * Created by PhpStorm.
 * User: aggre
 * Date: 11.01.2017
 * Time: 00:56
 */
#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Umfrage";
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
    <div><h5> Webkompetenz - Umfrage zum «Workshop Webdesign»</h5>
    <p>Zur besseren inhaltlichen Ausrichtung Seminars «Webdesign» freue ich mich über eure Angaben.</p></div>

        <div><h5>1. Kompetenz</h5>
        </div>
    <div class="section white">
        <div class="row container">
        </div>
    </div>
    <div>
        <form action="#">
            <h6>1.1. Wie schätzt du deine HTML und CSS Kenntnisse ein?</h6>

            <p>
                <input type="checkbox" id="test1" />
                <label for="test1">Sehr gut: Ich schreibe valides HTML/CSS nach W3C Standart.</label>
            </p>
            <p>
                <input type="checkbox" id="test2" />
                <label for="test2">Gut: HTML/CSS ist für mich kein Fremdwort… eine kleine Repetition schadet nicht.</label>
            </p>
            <p>
                <input type="checkbox" id="test3" />
                <label for="test3">Mittelmässig: auch schon mal was gemacht, aber so richtig gut Bescheid weiss ich doch nicht…</label>
            </p>
            <p>
                <input type="checkbox" id="test4" />
                <label for="test4">Eher schlecht: HTML/CSS ist mir ein Begriff, aber ehrlich gesagt, so richtig kann ich’s nicht…</label>
            </p>
            <p>
                <input type="checkbox" id="test5" />
                <label for="test5">Schlecht: HTML/CSS ist absolutes Neuland für mich… bin sehr motiviert das zu lernen…</label>
            </p>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="sonstiges" class="materialize-textarea"></textarea>
                            <label for="sonstiges">Sonstiges:</label>
                        </div>
                    </div>
                </form>
            </div>


        </form>
    </div>

<script>
    $(document).ready(function() {
        Materialize.updateTextFields();
    });</script>
    <script>$('#sonstiges').val('New Text');
        $('#sonstiges').trigger('autoresize');
    </script>