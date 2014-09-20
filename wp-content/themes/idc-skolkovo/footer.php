<footer>

    <?php
    $args = array (
        'post_type'              => 'partner',
        'pagination'             => false,
        'posts_per_page'         => '-1',
        'order'                  => 'ASC',
        'orderby'                => 'menu_order'
    );
    $query = new WP_Query( $args );

    if($query->have_posts()){

        ?>

        <header>
            <div class="row">
                <h2><?php _e("Partners", "idc-skolkovo") ?></h2>
            </div>
        </header>

        <div id="owl-idc-footer" class="row la-partners owl-carousel owl-theme">

        <?php

        while($query->have_posts()){
            $query->the_post();

            $id = get_the_ID();

            $url = $cfs->get('partner_url', $id);

            ?>

            <a href="<?php echo $url; ?>" rel="external" target="_blank" class="la-partner" title="<?php the_title(); ?>">
                <?php echo get_the_post_thumbnail( $id, 'full' ); ?>
                <p><?php the_title(); ?></p>
            </a>

        <?php

        }

        ?>
        </div>
            <?php
    }

    ?>

    <footer>
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/copyright.png" class="la-copyright" alt="">
            </div>
            <div class="col-sm-6">
                <address class="la-dev pull-right"><?php _e("Powered by", "idc-skolkovo") ?> <a href="http://overallsolutions.am/">OverallSolutions.am</a></address>
            </div>
        </div>
    </footer>
</footer>

</div>
<!-- /container -->

<?php wp_footer(); ?>
</body>
</html>