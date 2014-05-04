<footer>
    <hr/>
    <?php
    wp_nav_menu( array(
            'menu'              => 'child-footer',
            'theme_location'    => 'child-footer',
            'depth'             => 0,
            'container'         => 'div',
            'container_class'   => 'row',
            'menu_class'        => 'list-inline text-center',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
    ?>
</footer>