<?php 

    $themename="Demo Shop";

    //define path
    define('THEME_PATH', get_template_directory());
    define('THEME_URI', get_template_directory_uri());

    //File include
    include(THEME_PATH.'/inc/helper-function.php');




    // This theme uses wp_nav_menu() in header location.  
    register_nav_menus( array(  
        'primary' => __( 'Header Menu', '$themename' ),  
       ) );
       
    //Theme Title-tag support
    add_theme_support( 'title-tag' );
       
    //Theme support post thumb nil
    add_theme_support( 'post-thumbnails' );
    
     //images sizeing add here
    add_image_size('blog-image',730,350,true);
    add_image_size('blog_list_image',800,460,true);
    add_image_size('list_image',570,777,true);
    add_image_size('blogs_image',370,250,true);
    add_image_size('home_big-image',270,300,true);
     
     
       //woocommerce support
   function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
   }
  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
  
  add_filter( 'woocommerce_product_thumbnails_large_size', 'change_magnifier_lightbox_image_size' );
  
  add_theme_support( 'woocommerce', array(

        'gallery_thumbnail_image_width' => 100,
        'single_image_width' => 640,
    ));

  //ACF fields options

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
    
}

  
     
     
     
     
     
     
     