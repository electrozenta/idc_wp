<?php

// Register Custom Navigation Walker
require_once('includes/wp_bootstrap_navwalker.php');

/* Theme setup */
add_action( 'after_setup_theme', 'wp_setup' );

/* Setup function for Theme */
function wp_setup() {
    register_nav_menu( 'primary', 'Parent header navigation' );
    register_nav_menu( 'secondary', 'Parent header minor navigation' );
    register_nav_menu( 'child-header', 'Child header navigation' );
    register_nav_menu( 'child-footer', 'Child footer navigation' );

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );
}

/* Load Bootstrap CSS styles and scripts */
function wpt_register_css()
{
    wp_register_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.0', 'all');
    wp_enqueue_style('bootstrap.min');

    wp_register_style('owl.carousel.css', get_template_directory_uri() . '/assets/css/owl.carousel.css', false, '1.0', 'all');
    wp_enqueue_style('owl.carousel.css');

    wp_register_style('owl.theme.css', get_template_directory_uri() . '/assets/css/owl.theme.css', false, '1.0', 'all');
    wp_enqueue_style('owl.theme.css');

    wp_register_style('owl.transitions.css', get_template_directory_uri() . '/assets/css/owl.transitions.css', false, '1.0', 'all');
    wp_enqueue_style('owl.transitions.css');

//get theme css e.g. style.css
    wp_enqueue_style('idc.theme.css', get_stylesheet_uri(), false, '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'wpt_register_css');

/* Load Bootstrap JS with dependencies in footer */
function wpt_register_js()
{
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery.bootstrap.min');

    /* Load Owl Carousel Plugin with dependencies in footer*/
    wp_register_script('owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl.carousel.min.js');
}

add_action('init', 'wpt_register_js');


function icl_load_jquery_ui() {
    wp_enqueue_script( 'jquery-ui-dialog', false, array('jquery'), false, true );
}

add_action( 'admin_enqueue_scripts', 'icl_load_jquery_ui' );



/*
// Custom post for Doctors Biography
*/
function doctor_init() {
    $labels = array(
        'name'               => 'Doctors',
        'singular_name'      => 'Doctor',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Doctor',
        'edit_item'          => 'Edit Doctor',
        'new_item'           => 'New Doctor',
        'all_items'          => 'All Doctors',
        'view_item'          => 'View Doctor',
        'search_items'       => 'Search Doctors',
        'not_found'          => 'No doctor found',
        'not_found_in_trash' => 'No doctors found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Doctors'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'doctor' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
        //'taxonomies'         => array( 'category', 'post_tag' )
    );

    register_post_type( 'doctor', $args );
}
add_action( 'init', 'doctor_init' );



?>