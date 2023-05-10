<?php 

$themename = 'The Hanna’s Rentals';
    // This theme uses wp_nav_menu() in header location.  

register_nav_menus( array(  
  'primary' => __( 'Header Menu', '$themename' ),
  // 'header' => __( 'Header Main Menu', '$themename' ), 

) );


    //Theme Title-tag support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

//add image sizes
add_image_size('breadcumb_image',1920,767,true);
add_image_size('blog_image',848,449,true);
add_image_size('blogshort_image',263,190,true);

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme 404 Page Settings',
        'menu_title'    => '404 Pages',
        'parent_slug'   => 'theme-general-settings',
    ));
}



add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );

function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');   
}


