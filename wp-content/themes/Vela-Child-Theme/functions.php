<?php


function vela_child_theme_enqueue_styles() {
	$theme_info = wp_get_theme('Vela');
    $version = $theme_info->get( 'Version' );
    wp_enqueue_style( 'vela-child', get_stylesheet_directory_uri() .'/style.css', array( 'vela-theme' ), $version );
}
add_action( 'wp_enqueue_scripts', 'vela_child_theme_enqueue_styles' );


function vela_after_setup_theme() {
    load_child_theme_textdomain( 'Vela', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'vela_after_setup_theme' );


/*
add_filter( 'vc_iconpicker-type-openiconic', 'custom_iconpicker_type_openiconic' );
function custom_iconpicker_type_openiconic($icons){
    $your_icons = array(
		array( "your-icon-class-1" => "Icon 1" ),
		array( "your-icon-class-2" => "Icon 2" ),
    );

    return array_merge_recursive( $icons, $your_icons );
}
*/