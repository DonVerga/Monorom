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

        <a id="logo-container" href="index.php" class="brand-logo">
            Workshop Webdesign </a>

        <ul class="right hide-on-med-and-down">
            <li><a href="programm.php">Programm</a></li>
            <li><a href="umfrage.php">Umfrage</a></li>
            <li><a href="#">Projekte</a></li>
            <li><a href="#">Kontakte</a></li>
            <li><a href="#">Links</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="programm.php">Programm</a></li>
            <li><a href="umfrage.php">Umfrage</a></li>
            <li><a href="#">Projekte</a></li>
            <li><a href="#">Kontakte</a></li>
            <li><a href="#">Links</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
</nav>
    <div>
        <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>
    </div>
      <script src="js/init.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<script> $(".button-collapse").sideNav();</script>
<script> $(document).ready(function(){
        $('.parallax').parallax();
    });</script>
  </body>
</html>
