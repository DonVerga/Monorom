<?php
/**
 * Created by PhpStorm.
 * User: aggre
 * Date: 10.01.2017
 * Time: 13:36
 */
#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Programm";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>

<div class="parallax-container">
    <div class="parallax"><img src="background2.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>


<div class="container">
        <div class="container">
    </div>
</div>

    <div class="section white">
        <div class="row container">
            <h2 class="header">Programm 2016</h2>
            </div>
    </div>

<!-- Test-->
<div class="row container">
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Einführung Workshop</span>
                <h6 class="light">Lernziele</h6>
                <p class= "bold">Workshop Webdesign</p>
                <p class= "light">Vorstellen, Überblick, Ziele</p>
                <p class= "bold">Workshop Thema</p>
                <p class= "light">Responsiv Webdesign</p>
                <p class= "bold">Vortrag</p>
                <p class= "light">Webhistory - Das WWW - Universum</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>


<!-- Test-->

    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Einführung Workshop</span>
                <h6 class="light">Lernziele</h6>
                <p class= "bold">Workshop Webdesign</p>
                <p class= "light">Vorstellen, Überblick, Ziele</p>
                <p class= "bold">Workshop Thema</p>
                <p class= "light">Responsiv Webdesign</p>
                <p class= "bold">Vortrag</p>
                <p class= "light">Webhistory - Das WWW - Universum</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>

    <!--Test-->
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Einführung Workshop</span>
                <h6 class="light">Lernziele</h6>
                <p class= "bold">Workshop Webdesign</p>
                <p class= "light">Vorstellen, Überblick, Ziele</p>
                <p class= "bold">Workshop Thema</p>
                <p class= "light">Responsiv Webdesign</p>
                <p class= "bold">Vortrag</p>
                <p class= "light">Webhistory - Das WWW - Universum</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="background2.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
              </div>
</div>


<div class="row container">
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Einführung Workshop</span>
                <h6 class="light">Lernziele</h6>
                <p class= "bold">Workshop Webdesign</p>
                <p class= "light">Vorstellen, Überblick, Ziele</p>
                <p class= "bold">Workshop Thema</p>
                <p class= "light">Responsiv Webdesign</p>
                <p class= "bold">Vortrag</p>
                <p class= "light">Webhistory - Das WWW - Universum</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>


    <!-- Test-->

    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Einführung Workshop</span>
                <h6 class="light">Lernziele</h6>
                <p class= "bold">Workshop Webdesign</p>
                <p class= "light">Vorstellen, Überblick, Ziele</p>
                <p class= "bold">Workshop Thema</p>
                <p class= "light">Responsiv Webdesign</p>
                <p class= "bold">Vortrag</p>
                <p class= "light">Webhistory - Das WWW - Universum</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>

    <!--Test-->
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Einführung Workshop</span>
                <h6 class="light">Lernziele</h6>
                <p class= "bold">Workshop Webdesign</p>
                <p class= "light">Vorstellen, Überblick, Ziele</p>
                <p class= "bold">Workshop Thema</p>
                <p class= "light">Responsiv Webdesign</p>
                <p class= "bold">Vortrag</p>
                <p class= "light">Webhistory - Das WWW - Universum</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>


<div class="parallax-container">
    <div class="parallax"><img src="background2.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>


            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>
                <Script>$(document).ready(function(){
                        $('.parallax').parallax();});
                </script>
