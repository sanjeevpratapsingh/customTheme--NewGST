<?php
 
function custom_styles() {
    wp_enqueue_style('adding_material', get_template_directory_uri().'/css/materialize.css');
    wp_enqueue_style('adding_material_icons', get_template_directory_uri().'/css/material_icons.css');
}
add_action('wp_enqueue_scripts', 'custom_styles' );
//Including CSS on Header 


/* Including Scripts in Footer */
function custom_js(){
    wp_register_script('adding_jquery', get_template_directory_uri().'/js/jquery.js','','',true );
    wp_register_script('adding_materialjs', get_template_directory_uri().'/js/materialize.min.js','','', true);
    wp_register_script('custom_scripts', get_template_directory_uri().'/js/custom.js','','',true );
    
    wp_enqueue_script('adding_jquery');
    wp_enqueue_script('adding_materialjs');
    wp_enqueue_script('custom_scripts');
}
add_action('wp_enqueue_scripts', 'custom_js' ); 

//Scirpts and Styles Added


/*  Adding Menu*/
function custom_menu() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'sidebar-menu' => __( 'Sidebar Menu' )
      )
    );
  }
  add_action( 'init', 'custom_menu' );






