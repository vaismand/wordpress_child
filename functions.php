<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery' ,'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
};

function childhood_scripts() {
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';
		
        if ($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }

<<<<<<< HEAD
        if ($item->ID === 180 && ( in_category('_toys') || in_category('edu_toys'))) {
=======
        if ($item->ID === 180 && ( in_category('stuffed_toys') || in_category('edu_toys'))) {
>>>>>>> 8919e29e41ddf7f406d21458e90fe3f689ffa751
            $atts['class'] .= ' header__nav-item-active';
        }
    };

    return $atts;
}
?>