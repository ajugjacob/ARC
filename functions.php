<?php 


function arc_theme_scripts(){
    wp_enqueue_style( 'arc-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'boostrap-css', get_template_directory_uri(). '/assets/lib/bootstrap/css/bootstrap.min.css' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri(). '/assets/lib/font-awesome/css/font-awesome.min.css' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'animate-css', get_template_directory_uri(). '/assets/lib/animate/animate.min.css' , array(), wp_get_theme()->get( 'Version' ) );
    
    wp_enqueue_script( 'arc-script', get_template_directory_uri(). '/assets/js/main.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'jquery-script', get_template_directory_uri(). '/assets/lib/jquery/jquery.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'jquery-migrate-script', get_template_directory_uri(). '/assets/lib/jquery/jquery-migrate.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'boostrap-script', get_template_directory_uri(). '/assets/lib/bootstrap/js/bootstrap.bundle.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'wow-script', get_template_directory_uri(). '/assets/lib/wow/wow.min.js' , array(), wp_get_theme()->get( 'Version' ) );
    
    
}

add_action( 'wp_enqueue_scripts', 'arc_theme_scripts' );