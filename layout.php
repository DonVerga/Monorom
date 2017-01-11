<?php
#layout.php
require_once('PageTemplate.php')
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav >
    <div class="nav-wrapper container">

        <a id="logo-container" href="index.php" class="brand-logo amber-text accent-1">
            Workshop Webdesign </a>

        <ul class="right hide-on-med-and-down">
            <li><a class="white-text" href="programm.php">Programm</a></li>
            <li><a class="white-text" href="umfrage.php">Umfrage</a></li>
            <li><a class="white-text" href="#">Projekte</a></li>
            <li><a class="white-text" href="contact.php">Kontakt</a></li>
            <li><a class="white-text" href="#">Links</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a class="white-text" href="programm.php"><i class="material-icons amber-text accent-1">event</i>Programm</a></li>
            <li><a class="white-text" href="umfrage.php"><i class="material-icons amber-text accent-1">check circle</i>Umfrage</a></li>
            <li><a class="white-text" href="#"><i class="material-icons amber-text accent-1">work</i>Projekte</a></li>
            <li><a class="white-text" href="contact.php"><i class="material-icons amber-text accent-1">contacts</i>Kontakt</a></li>
            <li><a class="white-text" href="#"><i class="material-icons amber-text accent-1">link</i>Links</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
</nav>
    <div>
        <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>
    </div>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="amber-text accent-1">Workshop Webdesign</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="amber-text accent-1">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="programm.php">Programm</a></li>
                    <li><a class="grey-text text-lighten-3" href="umfrage.php">Umfrage</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Projekte</a></li>
                    <li><a class="grey-text text-lighten-3" href="contact.php">Kontakte</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Links</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Workshop Webdesign
        </div>
    </div>
</footer>

<script src="js/init.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script> $(".button-collapse").sideNav();</script>
<script> $(document).ready(function(){
        $('.parallax').parallax();
    });</script>
  </body>
</html>
