<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <!-- Static navbar -->
    <div class="navbar navbar-default la-top-nav" role="navigation">
        <div class="container-fluid">
            <div class="col-sm-4">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo home_url('/'); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="navbar-brand logo"
                       rel="home">
                    </a>
                </div>
            </div>

            <div class="col-sm-8 no-gutter">
                <div class="navbar-collapse collapse no-gutter">
                    <div class="row">
                        <a href="<?php echo home_url('/'); ?>" class="la-home pull-left"></a>
                        <a href="#" class="la-facebook pull-right"></a>
                        <div class="la-contact pull-right">
                            <address class="la-phone">+7(495) 797-47-37</address>
                            <a href="mailto:idc@idc-skolkovo.ru" class="la-email">idc@idc-skolkovo.ru</a>
                        </div>
                    </div>
                    <?php
                    wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'row',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                    <div class="row">
                        <?php
                        wp_nav_menu(array(
                                'menu' => 'secondary',
                                'theme_location' => 'secondary',
                                'depth' => 0,
                                'container' => '',
                                'container_class' => '',
                                'menu_class' => 'list-inline la-lang pull-left',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                        <ul class="list-inline la-lang pull-right">
                            <li class="active"><a class="navbar-link" href="#">Рус</a></li>
                            <li><span>|</span></li>
                            <li><a class="navbar-link" href="#">Eng</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!--/.container-fluid -->
    </div>