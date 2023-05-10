<?php

get_header(); 
/*Template Name:Home Page*/?>


    <div id="content-block">

        <div class="swiper-entry slider-1">
            <div class="swiper-container full-screen-height" data-direction="vertical" data-parallax="1" data-mousewheel="1" data-speed="1000">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-wrapper">
                    <?php
               if( have_rows('section_one_part') ):
                                            // loop through the rows of data
                while ( have_rows('section_one_part') ) : the_row();?>
                    <div class="swiper-slide"> 
                        <div class="leftside">
                            <div class="sl right-align"><?php the_sub_field('first_title'); ?></div>
                            <div class="leftside-middle valign-middle">
                                <div class="valign-middle-content">
                                <div class="banner-frame border-image" style="border-image-source: url('<?php the_sub_field('back_image'); ?>');" data-swiper-parallax-y="-100%">
                                        <div class="content" data-swiper-parallax-y="-70%">
                                            <div class="text">
                                                <div class="text-container">
                                                    <div class="align">
                                                        <div class="h3 title" style="color: #3c6255;"><span class="ht-1"><a href="<?php the_sub_field('main_title_url'); ?>"><?php the_sub_field('main_title'); ?></a></span></div>
                                                        <div class="sa description"><?php the_sub_field('main_description'); ?></div>
                                                        <a class="button" href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button_text'); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sl left-align"><?php the_sub_field('lower_title'); ?></div>
                    </div>
                    <?php
                    $a=1;
                   if( have_rows('first_image') ):
                                                // loop through the rows of data
                    while ( have_rows('first_image') ) : the_row();?>
                        
                    <?php if(!empty (get_sub_field('image'))){ ?>
                    <a class="<?php if($a%2!=0){echo 'right-top';} else{echo 'right-bottom';}?> lightbox" href="<?php the_sub_field('image'); ?>" data-swiper-parallax-y="100%">
                        <div class="content" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
                        <div class="content" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
                    </a>
                <?php } else{ ?>
                    <a class="<?php if($a%2!=0){echo 'right-top';} else{echo 'right-bottom';}?> lightbox" href="<?php echo the_sub_field('video'); ?>" data-swiper-parallax-y="100%">
                    <!-- <iframe src="<?php echo the_sub_field('video'); ?>" width="100%" height="483" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  ></iframe> -->
                    <video controls width="100%" height="603" autoplay muted class="content">
                        <source src="<?php echo the_sub_field('video'); ?>" type="video/mp4">
                        <source src="<?php echo the_sub_field('video'); ?>" type="video/ogg">
                        
                    </video>
                    
                    </a>
                <?php } ?>

                    <?php $a++;endwhile;endif;?>
                </div>
            <?php endwhile;endif;wp_reset_query();?>
                
                    
                </div>
                <div class="swiper-pagination visible-xs"></div>
                <div class="swiper-pager hidden-xs">
                    <div class="swiper-pager-current">01</div>
                    <div class="swiper-pager-total">04</div>
                </div>
            </div>
        </div>

    </div>


 <!-- <div class="phone-marker visible-xs"></div><div class="tablet-marker visible-sm"></div> -->
 <?php get_template_part('template/footer');?>