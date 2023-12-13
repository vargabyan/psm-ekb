<?php
get_header(); ?>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>


<?php require __DIR__ . '/prices/index.php' ?>


<?php
require __DIR__ . "/cp-help-block/index.php";
?>


<? get_footer();