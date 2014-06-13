<?php
/*
Template Name: Price and Service
Description: Child page for price
*/

get_header();

get_template_part('/templates/template-part-color');
get_template_part('/templates/template-part-header');

?>
    <div class="row">
        <div class="col-sm-4 no-gutter-left">
            <?php
            wp_nav_menu(array(
                    'menu' => 'price-service',
                    'theme_location' => 'price-service',
                    'depth' => 0,
                    'container' => 'div',
                    'container_class' => 'la-nav-skew',
                    'menu_class' => 'list-unstyled la-nav-vertical',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
            );
            ?>
            <button type="button" class="btn btn-block btn-info">Записаться на прием</button>
        </div>
        <div class="col-sm-8 no-gutter-right">
            <?php get_template_part('/templates/template-part-content'); ?>
        </div>
    </div>

<?php

get_template_part('/templates/template-part-footer');
get_footer();
?>