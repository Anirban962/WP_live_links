<?php 

    $themename="House Of Vape";
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
//'thumbnail_image_width' => 200,
'gallery_thumbnail_image_width' => 100,
'single_image_width' => 640,
) );
  
     
     add_theme_support( 'title-tag' );
     
     
     
     
     ?>