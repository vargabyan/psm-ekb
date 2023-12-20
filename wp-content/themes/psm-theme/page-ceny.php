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


<?= do_shortcode('[help_block id=365]'); ?>


<? get_footer();