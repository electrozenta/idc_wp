<header>
    <?php
    wp_nav_menu( array(
            'menu'              => 'child-header',
            'theme_location'    => 'child-header',
            'depth'             => 0,
            'container'         => 'div',
            'container_class'   => 'row',
            'menu_class'        => 'nav nav-justified la-page-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
    ?>
</header>

<header class="la-page-header">
    <h3><?php the_title(); ?></h3>
</header>