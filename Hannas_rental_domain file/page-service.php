<?php 
/*Template Name:Services Page*/
get_template_part('template/header');?>

<div id="content-block">

    <div class="fixed-background m-bg" style="background-image: url('<?php the_field('banner_background_image');?>');">

        <div class="banner-shortcode">

            <div class="banner-frame border-image" style="border-image-source: url('<?php the_field('banner_border_image');?>');"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="align m-align">
                            <h1 class="h1 light">
                                <?php the_field('banner_background_heading');?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="empty-space col-xs-b60 col-sm-b120"></div>
        <div class="row">
            <div class="col-md-12 text-center">
                <article class="sa">
                    <h3><?php the_field('no_matter_heading');?>
                </h3>
                <p><?php the_field('no_matter_sub_heading');?></p>
            </article>
            <div class="empty-space col-xs-b25 col-sm-b50"></div>
        </div>
    </div>
    <div class="empty-space col-xs-b45 col-sm-b90"></div>

    <?php
    $a=1;
    if( have_rows('service_wrapper') ):
    while ( have_rows('service_wrapper') ) : the_row();


      $my_frst_char = substr(get_sub_field('header'), 0, 1); 
      if($a%2!=0){  
    ?>
            <!-- item 1 -->
                <div class="services-shortcode-1">
                    <div class="preview-wrapper">
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="preview">
                            <span class="text-mask" style="background-image: url('<?php the_sub_field('image');?>');">
                                <span class="text"><span class="text-align" data-letter="<?= $my_frst_char; ?>"></span></span></span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="align">
                                <div class="sl"><?php the_sub_field('upper_header');?></div>
                                <div class="sa">
                                    <h4 class="h4 title"><?php the_sub_field('header');?></h4>
                                    <?php the_sub_field('sub_header');?>                           
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{?>

                    <div class="services-shortcode-1 style-1">
                        <div class="preview-wrapper">
                            <div class="icon"></div>
                            <div class="icon"></div>
                            <div class="icon"></div>
                            <div class="icon"></div>
                            <div class="preview">
                                <span class="text-mask" style="background-image: url(' <?php the_sub_field('image');?>');">
                                    <span class="text"><span class="text-align" data-letter="<?= $my_frst_char; ?>"></span></span></span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="align">
                                    <div class="sl"><?php the_sub_field('upper_header');?></div>
                                    <div class="sa">
                                        <h4 class="h4 title"><?php the_sub_field('header');?></h4>
                                        <p>
                                            <?php the_sub_field('sub_header');?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- item 1 -->

                    <!-- item 2 start -->








                    <?php $a++;endwhile;endif;wp_reset_query();?>


                    <div class="row">
                        <div class="col-md-12 text-center">
                            <article class="sa">
                                <h3>
                                   <?php the_field('offer_title');?>
                               </h3>
                               <p>
                                <?php the_field('offer_description');?>
                            </p>
                        </article>
                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                    </div>
                </div>
                <div class="row">

                  <?php
                  if( have_rows('offer_list') ):

                    while ( have_rows('offer_list') ) : the_row();?>

                        <div class="col-sm-4">
                            <div class="services-shortcode-2">
                                <div class="icon"><img src=" <?php the_sub_field('image');?>" alt="" /></div>
                                <div class="sl"><?php the_sub_field('offer_list_tagline');?></div>
                                <div class="content">
                                    <div class="sa middle">
                                        <h6>
                                            <?php the_sub_field('offer_list_title');?>
                                        </h6>

                                        <?php the_sub_field('offer_list_description');?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;endif;wp_reset_query();?>


                </div>

                <div class="empty-space col-xs-b45 col-sm-b90"></div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <article class="sa">
                            <h3>
                               <?php the_field('customer_testimonials_title');?>
                           </h3>
                           <p>
                               <?php the_field('customer_testimonials_description');?>
                           </p>
                       </article>
                       <div class="empty-space col-xs-b25 col-sm-b50"></div>
                   </div>
               </div>

               <div class="row">
                <div class="swiper-entry">
                    <div class="swiper-button-prev visible-lg"></div>
                    <div class="swiper-button-next visible-lg"></div>
                    <div class="swiper-container" data-space="30">
                        <div class="swiper-wrapper">

                           <?php
                           $a=1;
                           if( have_rows('customer_testimonials_slider_items') ):

                            while ( have_rows('customer_testimonials_slider_items') ) : the_row();?>

                                <?php if($a%2!=0){?>
                                    <div class="swiper-slide">
                                        <div class="row vertical-aligned-columns">
                                            <div class="col-sm-7 col-xs-b30 col-sm-b0">      
                                                <div class="thumbnail-shortcode-6">
                                                    <div class="content">
                                                        <div class="layer-1 border border-image" style="border-image-source: url(' <?php the_sub_field('customer_testimonials_border_image');?>');"></div>
                                                        <div class="layer-2 background" style="background-image: url('<?php the_sub_field('customer_testimonials_image');?>');"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="sa">
                                                    <h3>
                                                        <?php the_sub_field('customer_testimonials_title');?>
                                                    </h3>
                                                    <p>
                                                       <?php the_sub_field('customer_testimonials_description');?>
                                                   </p>
                                                   <span class="style-2" href="<?php the_sub_field('customer_testimonials_link_url');?>">
                                                       <?php the_sub_field('customer_testimonials_link_text');?>
                                                   </span>
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
                                                    <div class="layer-1 border border-image" style="border-image-source: url(<?php echo bloginfo('template_directory');?>/img/thumbnail-65.jpg);"></div>
                                                    <div class="layer-2 background" style="background-image: url(<?php echo bloginfo('template_directory');?>/img/thumbnail-66.jpg);"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-pull-7">
                                            <div class="sa">
                                                <h3>We can focus users attention on your design</h3>
                                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae itaque earum rerum.</p>
                                                <span class="style-2" href="#">NAME HERE</span>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } $a++;endwhile;endif;wp_reset_query();?>
                        </div>
                        <div class="swiper-pagination relative-pagination hidden-lg"></div>
                    </div>
                </div>
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
        </div>




        <?php get_footer();?>