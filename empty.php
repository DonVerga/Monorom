<?php
#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Test";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>
<h3>This is a test</h3>