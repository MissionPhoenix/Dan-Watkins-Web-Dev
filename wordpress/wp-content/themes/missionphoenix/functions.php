<?php

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascripts()
{

    wp_register_script('phoenixjs', get_template_directory_uri() . '/bootstrap/js/scripts.js', array(), false, true);
    wp_enqueue_script('phoenixjs');


}
add_action('wp_enqueue_scripts', 'load_javascripts');

function add_nav_menus() {
    register_nav_menus(

        array( 
            'top-menu' => __( 'Top Menu', 'theme' ),
            'footer-menu' => __('Footer Menu', 'theme')
        )
    );
}
add_action( 'init', 'add_nav_menus' );

//add_theme_support( 'post-formats' )
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
///add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
//add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
//add_theme_support( 'customize-selective-refresh-widgets' );

add_image_size('smallest', 300, 300, true);
add_image_size('small', 500, 500, true);
add_image_size('regular', 700, 700, true);
add_image_size('big', 900, 900, true);
add_image_size('biggest', 1100, 1100, true);
