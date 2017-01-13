<?php
/**
 * Created by PhpStorm.
 * User: aggre
 * Date: 11.01.2017
 * Time: 21:10
 */

#Hello.php
require_once('PageTemplate.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Kontakt";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>

<div class="section white">
    <div class="row container">
    </div>
</div>

<form class="container col s12">
    <div class="row">
        <div class="input-field col s6 m3">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6 m3">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
        </div>
    </div>


    <div class="row">
        <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
    </div>

            <div class="row">
                <div class="input-field col s6">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>
            </div>

</form>

<script>  $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');</script>
