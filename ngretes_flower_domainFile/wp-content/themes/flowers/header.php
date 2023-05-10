<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Negretes Flowers - Home</title>     
  <!--   <link rel="icon" type="image/x-icon" href="images/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/images/favicon.png" type="image/x-icon">   
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/fontello/css/fontello.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/entypo/entypo.min.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/style.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/template.shortcodes.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/template.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/core.animation.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/magnific/magnific-popup.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/woocommerce/assets/css/plugin.woocommerce.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/essential-grid/public/assets/css/lightbox.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/essential-grid/public/assets/css/settings.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/swiper/swiper.css' type='text/css' media='all' /> 
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/mediaelement/mediaelementplayer.min.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/mediaelement/wp-mediaelement.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/coverslider/css/style.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/js/vendor/testimonialcarousel/slick/slick.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/responsive.css' type='text/css' media='all' /> 
    <link property="stylesheet" rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/style.css' type='text/css' media='all' />
    <!-- add new -->
  <!--   <script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/vendor/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script> -->
    <!-- add new end-->
    <style type="text/css">
        .m-banner .sc_slider_swiper .slides .swiper-slide {
                background-repeat: no-repeat !important;
                background-position: center !important;
                background-size: cover !important;
                background-color: rgba(0, 0, 0, 0.4) !important;
                background-blend-mode: darken;
        }
    	.home-ban .sc_slider_swiper{height: 540px!important;}
        @media screen and (max-width:768px){
            .home-ban.m-banner .sc_slider_swiper, .m-banner .sc_slider_swiper .slides .swiper-slide {height: 80vh !important;} 
        }
        @media screen and (max-width:575px){
            .home-ban.m-banner .sc_slider_swiper, .m-banner .sc_slider_swiper .slides .swiper-slide {height: 70vh !important;} 
        }
    </style>
    <?php wp_head();?>
</head>

<body class="home page  body_filled  scheme_original">
    <!--.body_wrap -->
    <div class="body_wrap">
       <!--.page_wrap -->
		<div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap top_panel_style_2 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_2 top_panel_position_above">
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="columns_wrap columns_fluid">
                                <div class="column-1_5 contact_field contact_phone">
                                    <a href="tel:+<?php the_field('call_us_number','option');?>" style="text-align: right;">   
                                     <span class="contact_icon icon-icon_phone"></span>
                                     <span class="contact_us"><?php the_field('call_us_tagline','option'); ?></span>
                                     <span class="contact_label contact_phone"><?php the_field('call_us_number','option');?></span> 
                                     </a>
                                </div>
                                <div class="column-3_5 contact_logo">
                                    <div class="logo">
                                        <a href="<?php bloginfo('url');?>"><img src="<?php the_field('header_logo','option'); ?>" class="logo_main" alt="<?php the_title(); ?>">
                                        <img src="<?php the_field('header_logo','option'); ?>" class="logo_fixed" alt="<?php the_title(); ?>"></a>
                                    </div>
                                </div>
                                <div class="column-1_5 contact_field contact_cart">
                                    <a href="mailto:<?php the_field('email_id','option'); ?>" class="top_panel_cart_button"> 
                                        <span class="contact_icon icon-mail" style="position: absolute;left: -54px;"></span>
                                       
                                        <span class="contact_cart_totals">
                                        	 <span class="contact_label contact_cart_label"><?php the_field('mail_tagline','option'); ?></span> 
                                        	 <span class="cart_items"><?php the_field('email_id','option'); ?></span>
                                        </span>
                                    </a>
                                       <ul class="widget_area sidebar_cart sidebar">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="hide_cart_widget_if_empty">
                                                    <div class="widget_shopping_cart_content">
                                                        <!-- product list -->
                                                        <ul class="cart_list product_list_widget ">
                                                            <li class="mini_cart_item"> <a href="#" class="remove" title="Remove this item">×</a>
                                                                <a href="#"><img src="<?php echo bloginfo('template_directory');?>/images/product4-180x180.jpg">Flower Decor&nbsp; </a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55.00</span>
                                                                </span>
                                                            </li>
                                                            <li class="mini_cart_item"> <a href="#" class="remove" title="Remove this item">×</a>
                                                                <a href="#"><img src="<?php echo bloginfo('template_directory');?>/images/product1-180x180.jpg">Love Balloons&nbsp; </a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65.00</span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <!-- end product list -->
                                                        <p class="total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                                        </p>
                                                        <p class="buttons"><a href="#" class="button wc-forward">View Cart</a><a href="#" class="button checkout wc-forward">Checkout</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_bottom">
                        <div class="content_wrap clearfix">
                            <nav class="menu_main_nav_area menu_hover_fade">
                               
                                          <?php
                                            wp_nav_menu(
                                                        array(
                                                           'theme_location'  => 'primary', 
                                                           'container' => false,
                                                           'menu_class' => 'menu_main_nav',
                                                           
                                                        )
                                                );
                                                ?>
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="<?php bloginfo('url');?>"><img src="<?php the_field('header_logo','option'); ?>" class="logo_main" alt=""></a>
                    </div>
                    <div class="menu_main_cart top_panel_icon" style='display:none !important;'>
                        <a href="#" class="top_panel_cart_button"> <span class="contact_icon icon-icon_cart"></span><span class="contact_label contact_cart_label">Your cart:</span> <span class="contact_cart_totals">
                        <span class="cart_items">(2)</span> - <span class="cart_summa">&#36;120.00</span> </span>
                        </a>
                        <ul class="widget_area sidebar_cart sidebar">
                            <li>
                                <div class="widget woocommerce widget_shopping_cart">
                                    <div class="hide_cart_widget_if_empty">
                                        <div class="widget_shopping_cart_content">
                                            <!-- product list -->
                                            <ul class="cart_list product_list_widget ">
                                                <li class="mini_cart_item"><a href="#" class="remove" title="Remove this item">×</a>
                                                    <a href="#"><img src="<?php echo bloginfo('template_directory');?>/images/product4-180x180.jpg">Flower Decor&nbsp; </a><span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55.00</span>
                                                    </span>
                                                </li>
                                                <li class="mini_cart_item"><a href="#" class="remove" title="Remove this item">×</a>
                                                    <a href="#"><img src="<?php echo bloginfo('template_directory');?>/images/product1-180x180.jpg">Love Balloons&nbsp; </a><span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65.00</span>
                                                    </span>
                                                </li>
                                            </ul>
                                            <!-- end product list -->
                                            <p class="total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                            </p>
                                            <p class="buttons"><a href="#" class="button wc-forward">View Cart</a><a href="#" class="button checkout wc-forward">Checkout</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                              <?php
                                            wp_nav_menu(
                                                        array(
                                                           'theme_location'  => 'primary', 
                                                           'container' => false,
                                                           'menu_class' => 'd-block',
                                                           
                                                        )
                                                );
                                                ?>
                        </nav>
                    </div>
                    <div class="panel_middle">
                        <div class="contact_field contact_phone">
                             <span class="contact_icon icon-phone"></span>
                             <span class="contact_label contact_phone">800-123-4567</span>
                             <span class="contact_icon icon-mail"></span>
                             <span class="contact_label contact_email ">info@yoursite.com</span>
                        </div>
                    </div>
                </div>
                <div class="mask"></div>
            </div>
        