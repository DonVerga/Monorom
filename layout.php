<?php
#layout.php
require_once('PageTemplate.php')
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav class="bordeau">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Monorom</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="programm.php">Programm</a></li>
        <li><a href="umfrage.php">Umfrage</a></li>
        <li><a href="projekte.php">Projekte</a></li>
        <li><a href="kontakte.php">Kontakte</a></li>
        <li><a href="links.php">Links</a></li>
      </ul>
    </div>
  </nav>
    <div class="container">
        <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>
    </div>
      <script src="js/init.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
