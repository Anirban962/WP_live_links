<?php
get_template_part('template/header');/*Template Name:About Page*/?>

<div id="content-block">    

    <div class="fixed-background m-bg" style="background-image: url('<?php the_field('background_image');?>');">

        <div class="banner-shortcode">
            <div class="banner-frame border-image" style="border-image-source: url('<?php the_field('about_background_border_image');?>');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="align m-align">
                            <h1 class="h1 light"><?php the_field('about_banner_heading');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="empty-space col-xs-b60 col-sm-b120"></div>
        <div class="row vertical-aligned-columns">
            <div class="col-sm-7 col-sm-push-5 col-xs-b30 col-sm-b0">
                <div class="thumbnail-shortcode-4">
                    <div class="content">
                        <div class="layer-1 background" style="background-image: url('<?php the_field('give_us_a_task_outer_image');?>');"></div>
                        <div class="layer-2 border border-image" style="border-image-source: url('<?php the_field('give_us_a_task_image_border');?>');"></div>
                        <div class="layer-3 background" style="background-image: url('<?php the_field('give_us_a_task_inner_image');?>');"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-sm-pull-7">
                <div class="sa">
                    <h3> <?php the_field('give_us_a_task_heading');?> </h3>

                    <p>
                        <?php the_field('give_us_a_task_sub_heading');?>
                    </p>
                    <p>
                        <?php the_field('give_us_a_task_sub_heading_two');?>
                    </p>
                </div>
            </div>
        </div>
        <div class="empty-space col-xs-b45 col-sm-b90"></div>
        <div class="row" style="display: none!important;">
            <div class="col-md-12 text-center">
                <article class="sa">
                    <h3><?php the_field('our_team_heading');?></h3>
                    <p><?php the_field('our_team_sub_heading');?></p>
                </article>
                <div class="empty-space col-xs-b25 col-sm-b50"></div>
            </div>
        </div>
        <div class="swiper-entry">

            <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="3" data-slides-per-view="3" data-space="30">
                <div class="swiper-button-prev hidden"></div>
                <div class="swiper-button-next hidden"></div>
                <div class="swiper-wrapper" style="display: none!important;">

                  <?php
                  if( have_rows('our_team_content_wrapper') ):

                    while ( have_rows('our_team_content_wrapper') ) : the_row();?>

                        <div class="swiper-slide"> 
                            <div class="thumbnail-shortcode-5">
                                <div class="content">
                                    <div class="layer-1 border-image" style="border-image-source: url('<?php the_sub_field('our_team_slider_border_image');?>');"></div>
                                    <div class="layer-2"><img src="<?php the_sub_field('our_team_slider_image');?>" alt="" /></div>
                                </div>
                                <div class="description">
                                    <h6 class="h6 title"><?php the_sub_field('our_team_slider_description_heading');?></h6>
                                    <div class="sa small"><?php the_sub_field('our_team_slider_description_sub_heading');?></div>
                                </div>
                                <div class="animation follow style-1">
                                    <a class="entry" href="<?php the_sub_field('our_team_slider_instagram_links');?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a class="entry" href="<?php the_sub_field('our_team_slider_facebook_links');?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="entry" href="<?php the_sub_field('our_team_slider_twitter_links');?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a class="entry" href="<?php the_sub_field('our_team_slider_google_link');?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    <?php endwhile;endif;wp_reset_query();?>

                </div>
                <div class="swiper-pagination relative-pagination" style="display: none!important;"></div>
            </div>


        </div>

        <!-- focus slider starts -->
        <div class="empty-space col-xs-b45 col-sm-b90"></div>
        <div class="swiper-entry">
            <div class="swiper-button-prev visible-lg"></div>
            <div class="swiper-button-next visible-lg"></div>
            <div class="swiper-container" data-space="30">
                <div class="swiper-wrapper">

                 <?php
                 $a=1;
                 if( have_rows('focus_slider_wrapper') ):

                    while ( have_rows('focus_slider_wrapper') ) : the_row();?>
                        
                        <?php if($a%2!=0){?>
                        <div class="swiper-slide">
                            <div class="row vertical-aligned-columns">
                                <div class="col-sm-7 col-xs-b30 col-sm-b0">
                                    <div class="thumbnail-shortcode-6">
                                        <div class="content">
                                            <div class="layer-1 border border-image" style="border-image-source: url(<?php the_sub_field('focus_border_image');?>);"></div>
                                            <div class="layer-2 background" style="background-image: url(<?php the_sub_field('focus_slider_background_image');?>);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="sa">
                                        <h3><?php the_sub_field('focus_slider_left_heading');?></h3>
                                        <p> <?php the_sub_field('focus_slider_left_sub_heading');?></p>
                                        <a class="button style-2" href="<?php the_sub_field('focus_slider_button_url');?>">
                                            <?php the_sub_field('focus_slider_button_text');?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }else{?>
                        <div class="swiper-slide">
                            <div class="row vertical-aligned-columns">
                                <div class="col-sm-7 col-sm-push-5 col-xs-b30 col-sm-b0">
                                    <div class="thumbnail-shortcode-6">
                                        <div class="content">
                                            <div class="layer-1 border border-image" style="border-image-source: url(<?php the_sub_field('focus_border_image');?>);"></div>
                                            <div class="layer-2 background" style="background-image: url(<?php the_sub_field('focus_slider_background_image');?>);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-sm-pull-7">
                                    <div class="sa">
                                        <h3><?php the_sub_field('focus_slider_left_heading');?></h3>
                                        <p> <?php the_sub_field('focus_slider_left_sub_heading');?></p>
                                        <a class="button style-2" href="<?php the_sub_field('focus_slider_button_url');?>">
                                            <?php the_sub_field('focus_slider_button_text');?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } $a++;endwhile;endif;wp_reset_query();?>
                </div>
                <div class="swiper-pagination relative-pagination hidden-lg"></div>
            </div>
        </div>
        <div class="empty-space col-xs-b45 col-sm-b90"></div>
        <div class="row" style="display: none!important;">
            <div class="col-md-12 text-center">
                <article class="sa">
                    <h3><?php the_field('our_client_heading');?></h3>
                    <p>
                        <?php the_field('our_client_sub_heading');?>
                    </p>
                </article>
                <div class="empty-space col-xs-b25 col-sm-b50"></div>
            </div>
        </div>
        <div class="row" style="display: none!important;">

                <?php
                  if( have_rows('our_client_brand') ):

                    while ( have_rows('our_client_brand') ) : the_row();?>

            <div class="col-xs-6 col-sm-3">
                <a href="#" class="client-logo mouseover-2"><img src="<?php the_sub_field('our_client_image');?>" alt="" /></a>
            </div>


             <?php endwhile;endif;wp_reset_query();?>
        </div>



    </div>


</div>








<?php get_footer();?>