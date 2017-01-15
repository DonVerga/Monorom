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


</div>
<div class="col s12 m7 container">
    <h2 class="header">Kontakt</h2>
    <div class="card horizontal">
        <div class="card-image">
            <img src="background2.jpg">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <form class=" col s12">
                    <div class="row white-text">
                        <div class="input-field ">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="input-field ">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Textarea</label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<script> $(document).ready(function(){
        $('.materialboxed').materialbox();
    });</script>