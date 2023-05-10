<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet" />
    <link href="<?php echo bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo bloginfo('template_directory');?>/css/bootstrap.extension.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo bloginfo('template_directory');?>/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo bloginfo('template_directory');?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo bloginfo('template_directory');?>/css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo bloginfo('template_directory');?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/img/favicon.png" />
    <!-- <title><?php the_title();?></title> -->
    <meta name="facebook-domain-verification" content="y0iu48ht290nwlxhpwr86w3t65peb6" />
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <!-- HEADER -->
    <header class="type-3 transparent">
        <div class="header-wrapper">
            <a id="logo" href="<?php bloginfo('url');?>"><img src="<?php echo bloginfo('template_directory');?>/img/logo-1.png" alt="The Hanna’s Rentals"/></a>
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="follow style-1">
                <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
        <div class="navigation-wrapper">
            <nav>
               
               <?php
               wp_nav_menu(
                array(
                 'theme_location'  => 'primary', 
                 'container' => false,
                 'menu_class' => 'd-block'           
             )
            );
            ?>
        </nav>
    </div>
</header>