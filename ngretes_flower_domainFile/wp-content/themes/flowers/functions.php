<?php
    $themename ="Negretes Flowers";
    
    // This theme uses wp_nav_menu() in header location.  
        register_nav_menus( array(  
         'primary' => __( 'Header Menu', '$themename' ),  
        )); 
        
        
    //theme support
    add_theme_support('title-tag');
    
    //add thumbnail
    add_theme_support('post-thumbnails');
    add_image_size('breadcumb_image',1920,767,true);
     add_image_size('servicefirst_thumb',370,250,true); 
     add_image_size('service_thumb',1170,659,true); 
     add_image_size('blog_thumb',370,260,true); 
     
     // acf code
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

     acf_add_options_sub_page(array(
        'page_title'    => 'Single Service Page Settings',
        'menu_title'    => 'Service Details',
        'parent_slug'   => 'theme-general-settings',
    ));
}

add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );

function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');   
}
