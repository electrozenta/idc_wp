<?php
/*
Template Name: Home Page
Description: The main page
*/
?>

<?php get_header(); ?>

<main>
    <header>
        <div id="owl-idc" class="owl-carousel owl-theme hidden-xs">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-1.jpg" alt=""
                     class="img-responsive">

                <h2>Стоматологический Центр</h2>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-2.jpg" alt=""
                     class="img-responsive">

                <h2>Учебный Центр</h2>
            </div>
        </div>
    </header>
    <article>
        <?php
        get_template_part('/templates/template-part-content');
        ?>
    </article>

    <div class="row">

        <?php

        $id = $post->ID;

        $pages = get_pages(array(
            'child_of' => $id,
            'parent' => $id,
            'sort_column' => 'menu_order',
            'sort_order' => 'asc'
        ));

        foreach ($pages as $page) {
            if (has_post_thumbnail($page->ID)) {
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
                    <a href="<?php echo get_page_link($page->ID); ?>">
                        <img class="img-responsive" src="<?php
                        $post_thumbnail_id = get_post_thumbnail_id($page->ID);
                        echo wp_get_attachment_url($post_thumbnail_id); ?>" alt="<?php
                        $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
                        if (count($alt)) echo $alt;
                        ?>"/>

                        <h3><?php echo $page->post_title; ?></h3>
                    </a>
                </div>
            <?php
            }
        }

        ?>

    </div>
</main>

<script>
    (function ($) {
        jQuery(document).ready(function () {

            $("#owl-idc").owlCarousel({

                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                pagination: false,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                goToFirstSpeed: 3000,
                singleItem: true,
                transitionStyle: "fade",
                navigationText: [
                    '<span class="glyphicon glyphicon-chevron-left"></span>',
                    '<span class="glyphicon glyphicon-chevron-right"></span>']

            });

        });
    })(jQuery)
</script>

<?php get_footer(); ?>

