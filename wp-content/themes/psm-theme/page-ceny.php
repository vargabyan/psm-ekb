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


<?= do_shortcode('[obshaya_cena id=365]'); ?>


<?php
require __DIR__ . "/cp-help-block/index.php";
?>


<? get_footer();