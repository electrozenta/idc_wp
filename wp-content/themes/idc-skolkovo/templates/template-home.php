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

    <div class="row"> <?php

        $pages = $cfs->get('child_pages');
        if ($pages) :

            foreach ($pages as $page_id) :
                $page = get_post($page_id);
                $post_thumbnail_id = get_post_thumbnail_id($page_id);
                $attachment_url = wp_get_attachment_url($post_thumbnail_id);
                $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);

                if (has_post_thumbnail($page->ID)) : ?>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
                        <a href="<?php echo get_page_link($page->ID); ?>">
                            <img class="img-responsive" src="<?php echo $attachment_url; ?>"
                                 alt="<?php if (count($alt)) echo $alt; ?>"/>

                            <h3><?php echo $page->post_title; ?></h3>
                        </a>
                    </div> <?php
                endif;

            endforeach;

        endif; ?>

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

