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
    $TPL->PageTitle = "Lession1";
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
            <h2 class="header">Programm 2016</h2>
            </div>
    </div>


<!-- Test-->
<div class="row container">
    <!--New Card-->
    <div class="col s12 m4">
        <a href="Lesson1.php">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="parallax-container">
    <div class="parallax"><img src="background1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>

<!-- Test-->
<div class="row container">
    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="parallax-container">
    <div class="parallax"><img src="background1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>

<div class="section white">
    <div class="row container">
    </div>
</div>
<!-- Test-->
<div class="row container">
    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="parallax-container">
    <div class="parallax"><img src="background1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>

<div class="section white">
    <div class="row container">
    </div>
</div>
<!-- Test-->
<div class="row container">
    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>

</div>
<div class="parallax-container">
    <div class="parallax"><img src="background1.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
    </div>
</div>

<div class="section white">
    <div class="row container">
    </div>
</div>
<!-- Test-->
<div class="row container">
    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>


    <!--New Card-->
    <div class="col s12 m4">
        <a href="#">
            <div class="card   red darken-4">
                <div class="card-content white-text">
                    <span class="card-title">Einführung Workshop</span>
                    <h6 class="bold">Lernziele</h6>
                    <p class= "bold grey-text lighten-3">Workshop Webdesign</p>
                    <p class= "light">Vorstellen, Überblick, Ziele</p>
                    <p class= "bold grey-text lighten-3">Workshop Thema</p>
                    <p class= "light">Responsiv Webdesign</p>
                    <p class= "bold grey-text lighten-3">Vortrag</p>
                    <p class= "light">Webhistory - Das WWW - Universum</p>
                </div>
            </div>
        </a>
    </div>

</div>

<div class="section white">
    <div class="row container">
    </div>
</div>







            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>
