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
    $TPL->PageTitle = "Programm";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>
<p>Hallo</p>
