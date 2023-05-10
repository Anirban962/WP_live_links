<?php get_header();/*Template Name:Home Page*/?>
            
            <!-- banner start-->
              <section class="no-col-padding">
                                <div class="container-fluid">    
                                  <!--   <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner"> -->
                                                    <div class="m_wrapper">
                                                        <div class="sc_testimonials sc_testimonials_style_testimonials-1 margin_bottom_medium sc_home-param-type-c home-ban m-banner" style="margin: 0 !important;">
                                                            <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side" data-interval="5160" data-slides-min-width="250" style="padding: 0 !important;height: 530px!important;">
                                                                <div class="slides swiper-wrapper">
                                                                    <?php
                                                                       if( have_rows('home_page_slider') ):
                                                                                                    // loop through the rows of data
                                                                        while ( have_rows('home_page_slider') ) : the_row();?>
                                                                    <div class="swiper-slide w100" data-style="width:100%;" style="background: url(<?php the_sub_field('slider_image'); ?>);overflow: hidden;">
                                                                        <div class="sc_testimonial_item" style="background: transparent;color: #fff;font-size: 30px;line-height: 15px;padding: 0;position: absolute;top: 50%;transform: translateY(-50%);padding: 0 70px;">
                                                                            <div class="sc_testimonial_content">
                                                                                <p><?php the_sub_field('slider_text'); ?></p>
                                                                                 <img src="<?php the_sub_field('slider_small_image'); ?>" alt="<?php the_sub_field('slider_text'); ?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php endwhile;endif;wp_reset_query();?>
                                                                    
                                                                </div>
                                                                <div class="sc_slider_controls_wrap">
                                                                    <a class="sc_slider_prev" href="#"></a>
                                                                    <a class="sc_slider_next" href="#"></a>
                                                                </div>
                                                                <div class="sc_slider_pagination_wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                               <!--  </div>
                                            </div>
                                        </div>
                                    </div>  -->
                                </div>
                            </section>
            <!-- banner end-->
		    <div class="page_content_wrap page_paddings_no">
                <div class="content">
                    <article class="post_item post_item_single page type-page">
                        <div class="post_content">
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-a">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div  class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_2 sc_call_to_action_align_center w100">
                                                            <div class="sc_call_to_action_info">
                                                                <h2 class="sc_call_to_action_title sc_item_title sc_item_title_without_descr"><?php the_field('section_two_title'); ?></h2>
                                                            </div>
                                                            <div class="sc_call_to_action_buttons sc_item_buttons">
                                                                <div class="sc_call_to_action_button sc_item_button"><a href="<?php the_field('section_two_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small call_to "><?php the_field('section_two_button_text'); ?></a></div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section> 
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-b" style="background-image: url(<?php the_field('section_three_background_image'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                         <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_9 sc_home-margin-type-a">
                                                            <div class="column-5_9 sc_column_item  odd first span_5">
                                                                <h6 class="sc_title sc_title_regular margin_top_null sc_home-margin-type-b"><?php the_field('section_three_short_title'); ?></h6>
                                                                <h2 class="sc_title sc_title_iconed margin_top_tiny margin_bottom_null sc_home-margin-type-c fsz_cust"><?php the_field('section_three_title'); ?><span class="sc_title_icon sc_title_icon_bottom  sc_title_icon_small"><img src="<?php the_field('section_three_tagline_image'); ?>" alt="<?php the_field('section_three_short_title'); ?>" /></span></h2>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p><?php the_field('section_three_content'); ?></p>
                                                                    </div>
                                                                </div> <a href="<?php the_field('section_three_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium sc_home-margin-type-d"><?php the_field('section_three_button_text'); ?></a></div><div class="column-4_9 sc_column_item even span_4">
                                                                <div class="cq-coverslider  navigation-overlay-right tinyshadow grapefruit " data-imagemaxheight="300" data-buttonbackground="" data-buttonhoverbackground="#222F46" data-contentbackground="" data-contentcolor="" data-arrowcolor="" data-arrowhovercolor="" data-delaytime="2">
                                                                    <div class="cq-coverslider-area btn-large square">
                                                                        <div class="cq-coverslider-cover">
                                                                            <div class="cq-coverslider-itemcontainer">
                                                                                <?php
                                                                                   if( have_rows('section_three_slider') ):
                                                                                                                // loop through the rows of data
                                                                                    while ( have_rows('section_three_slider') ) : the_row();?>
                                                                                <div class="cq-coverslider-imageitem"><img src="<?php the_sub_field('image'); ?>" class="cq-coverslider-image" alt="image"></div>
                                                                                <?php endwhile; endif; wp_reset_query(); ?>  
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="cq-coverslider-content">
                                                                            <div class="cq-coverslider-contentitem"></div>
                                                                            <div class="cq-coverslider-contentitem"></div>
                                                                            <div class="cq-coverslider-contentitem"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cq-coverslider-navigation btn-large">
                                                                        <div class="coverslider-navigation-prev"><i class="cq-coverslider-icon entypo-icon entypo-icon-left-open-big"></i></div><div class="coverslider-navigation-next"><i class="cq-coverslider-icon entypo-icon entypo-icon-right-open-big"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>      
                            <section class="no-col-padding">
                                <div class="content_container">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                 <div class="m_wrapper">
                                                   <!--.sc_services_wrap -->
                                                    <div class="sc_services_wrap">
                                                       <!--.sc_services -->
                                                        <div class="sc_services sc_services_style_services-1 sc_services_type_images margin_bottom_medium sc_home-param-type-a">
                                                            <h3 class="sc_services_title sc_item_title sc_item_title_without_descr"><?php the_field('section_four_title'); ?></h3>
                                                            <h6 class="sc_services_subtitle sc_item_subtitle"><?php the_field('section_four_tagline'); ?></h6>
                                                            <div class="sc_columns columns_wrap">
                                                                <?php
                                                                $a=1;
                                                                $args = array(
                                                                'posts_per_page' => 3,
                                                                'order'            => 'DESC',
                                                                'post_type'        => 'service',
                                                                'post_status'      => 'publish',
                                                                'suppress_filters' => true,
                                                                );
                                                                query_posts($args);
                                                                if ( have_posts() ) : while (have_posts()) : the_post();
                                                                               
                                                                   ?><div class="column-1_3 column_padding_bottom mcol-full">
                                                                    <div class="sc_services_item <?php if($a==1){ echo "odd first";} elseif($a%2==0){echo "even";}else{echo "odd";}?>">
                                                                        <div class="sc_services_item_featured post_featured">
                                                                            <div class="post_thumb" data-image="" data-title="Bouquets &amp; Style">
                                                                                <?php  if ( has_post_thumbnail() ) {  ?>
                                                                            <div class="post_thumb" data-image="<?php the_post_thumbnail_url('servicefirst_thumb');?>" data-title="<?php the_title(); ?>">
                                                                                <a class="hover_icon hover_icon_link" href="<?php the_permalink(); ?>"><img class="post-image" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('servicefirst_thumb');?>"></a>
                                                                            </div>
                                                                              <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_services_item_content">
                                                                            <h4 class="sc_services_item_title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                                                            <div class="sc_services_item_description"> <a href="<?php the_permalink(); ?>" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">order now</a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div><?php $a++;endwhile;endif;wp_reset_query();?>
                                                            </div>
                                                        </div>
                                                        <!-- end .sc_services -->
                                                    </div>
                                                    <!-- end .sc_services_wrap -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </section>
                            
                            
                            <section class="no-col-padding overflow-hidden"> 
                                <div class="container-fluid sc_home-bg-type-c m-mbl" style="background-image: url(<?php the_field('section_five_banner'); ?>) !important;background-position: center;background-repeat: no-repeat !important;background-size: cover !important;">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_7 sc_home-margin-type-e mbl-l0" data-equal-height=".sc_column_item">
                                                            <div class="column-4_7 sc_column_item odd first span_4"></div><div class="column-3_7 sc_column_item odd m-full" data-animation="animated fadeInRightBig normal">
                                                                <h6 class="sc_title sc_title_regular sc_home-margin-type-f"><?php the_field('section_five_short_title'); ?></h6>
                                                                <h3 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny sc_home-font-type-a"><?php the_field('section_five_title'); ?></h3>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p><?php the_field('section_five_description'); ?></p>
                                                                    </div>
                                                                </div> <a href="<?php the_field('section_five_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large sc_home-margin-type-g" ><?php the_field('section_five_button_text'); ?></a>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_testimonials sc_testimonials_style_testimonials-1 margin_bottom_medium sc_home-param-type-c">
                                                            <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side" data-interval="5160" data-slides-min-width="250">
                                                                <div class="slides swiper-wrapper">
                                                                    <?php
                                                                       if( have_rows('testimonial') ):
                                                                                                    // loop through the rows of data
                                                                        while ( have_rows('testimonial') ) : the_row();?>
                                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                                        <div class="sc_testimonial_item">
                                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Alison &#038; Mark Priston" src="<?php the_sub_field('image'); ?>"></div>
                                                                            <div class="sc_testimonial_content">
                                                                                <p><?php the_sub_field('description'); ?></p>
                                                                            </div>
                                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name"><?php the_sub_field('name'); ?> </span><span class="sc_testimonial_author_position"><?php the_sub_field('position'); ?></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php endwhile;endif;wp_reset_query();?>
                                                                    
                                                                </div>
                                                                <div class="sc_slider_controls_wrap">
                                                                    <a class="sc_slider_prev" href="#"></a>
                                                                    <a class="sc_slider_next" href="#"></a>
                                                                </div>
                                                                <div class="sc_slider_pagination_wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_blogger layout_classic_3 template_masonry margin_top_small  sc_blogger_horizontal no_description sc_home-margin-type-h">
                                                            <h3 class="sc_blogger_title sc_item_title sc_item_title_without_descr"><?php the_field('blog_title'); ?></h3>
                                                            <h6 class="sc_blogger_subtitle sc_item_subtitle"><?php the_field('blog_tagline'); ?></h6>
                                                            <div class="isotope_wrap" data-columns="3">
                                                                <?php

                                                                    $args = array(
                                                                    'posts_per_page' => 3,
                                                                    'order'            => 'DESC',
                                                                    'post_type'        => 'post',
                                                                    'post_status'      => 'publish',
                                                                    'suppress_filters' => true,
                                                                    );
                                                                    query_posts($args);
                                                                    if ( have_posts() ) : while (have_posts()) : the_post();
                                                                    $perma_cat = get_post_meta($post->ID , '_category_permalink', true);
                                                                   if ( $perma_cat != null ) {
                                                                     $cat_id = $perma_cat['category'];
                                                                     $category = get_category($cat_id);
                                                                   } else {
                                                                     $categories = get_the_category();
                                                                     $category = $categories[0];
                                                                   }
                                                                   $category_link = get_category_link($category);
                                                                   $category_name = $category->name;                  
                                                                ?> 
                                                               <!--.isotope_item -->
                                                                <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3 mcol-full">
                                                                    <!--.post_item -->
                                                                    <div class="post_item post_item_classic post_item_classic_3	post_format_standard odd">
                                                                        <div class="post_featured">
                                                                         <?php  if ( has_post_thumbnail() ) {  ?>
                                                                            <div class="post_thumb" data-image="<?php the_post_thumbnail_url('servicefirst_thumb');?>" data-title="<?php the_title(); ?>">
                                                                                <a class="hover_icon hover_icon_link" href="<?php the_permalink(); ?>"><img class="post-image" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('servicefirst_thumb');?>"></a>
                                                                            </div>
                                                                             <?php } ?>
                                                                        </div>
                                                                        <!--.post_content -->
                                                                        <div class="post_content isotope_item_content">
                                                                            <div class="post_info"> <span class="post_info_item post_info_posted"> <a href="<?php the_permalink(); ?>" class="post_info_date"><?php the_time('F d,Y'); ?></a></span> </div>
                                                                            <h5 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                                            <div class="post-info-bottom">
                                                                                <div class="post_info"> <span class="post_info_item post_info_posted_by">By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="post_info_author"><?php the_author(); ?></a></span> <span class="post_info_item post_info_counters"> <span class="post_counters_number"><a class="post_counters_item post_counters_comments" title="<?=  $category_name; ?>" href="<?= $category_link; ?>"><span class="post_counters_number"><?=  $category_name; ?></span></a></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="post_descr">
                                                                                <p></p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .post_content -->
                                                                    </div>
                                                                    <!-- end .post_item -->
                                                                </div>
                                                                <!-- end .isotope_item -->
                                                                <?php endwhile;endif;wp_reset_query();?>
                                                                
                                                            </div>
                                                            <div class="sc_blogger_button sc_item_button"><a href="<?php the_field('blog_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium"><?php the_field('blog_button_text'); ?></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-d" style="background-image: url(<?php the_field('section_six_banner_image'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section sc_section_block sc_home-margin-type-i">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <h3 class="sc_title sc_title_underline sc_align_center sc_home-param-type-d" style="font-size: 3em !important;"><?php the_field('section_six_title'); ?></h3><a href="<?php the_field('section_six_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter sc_home-param-type-e" style="width:200px!important"><?php the_field('section_six_button_text'); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">     
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section sc_section_block sc_home-margin-type-j">
                                                            <div class="sc_section_inner">
                                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr"><?php the_field('other_service_title'); ?></h2>
                                                                <h6 class="sc_section_subtitle sc_item_subtitle"><?php the_field('other_service_tagline'); ?></h6>
                                                                <div class="sc_section_content_wrap">
                                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                                        <?php
                                                                            $b=1;
                                                                            $args = array(
                                                                            'posts_per_page' => 3,
                                                                            'offset' => 6,
                                                                            'order'            => 'DESC',
                                                                            'post_type'        => 'service',
                                                                            'post_status'      => 'publish',
                                                                            'suppress_filters' => true,
                                                                            );
                                                                            query_posts($args);
                                                                            if ( have_posts() ) : while (have_posts()) : the_post();
                                                                                           
                                                                               ?><div class="column-1_3 sc_column_item <?php if($b==1){ echo "odd first";} elseif($b%2==0){echo "even";}else{echo "odd";}?>">
                                                                            <div class="sc_price_block sc_price_block_style_1">
                                                                                <div class="featured_image"><img alt="Bouquets" src="<?php the_post_thumbnail_url('servicefirst_thumb');?>"></div>
                                                                                <div class="sc_price_block_title"><span style="padding: 0 1em;"><?php the_title();?></span></div>
                                                                                
                                                                                <div class="sc_price_block_description">
                                                                                    <p><?php echo wp_trim_words( get_the_content(), 15, '...' );?></p>
                                                                                    
                                                                                </div>
                                                                               
                                                                                <div class="sc_price_block_link"><a href="<?php the_permalink(); ?>" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">order now</a>
                                                                                </div>
                                                                            </div>
                                                                        </div><?php $b++;endwhile;endif;wp_reset_query();?>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <!--stay tune update-->
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-a">         
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_large margin_bottom_large" data-equal-height=".sc_column_item">
                                                            <div class="column-1_2 sc_column_item odd first stay-text">  
                                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f"><?php the_field('stay_tune_update_tagline'); ?></h3>
                                                            </div><div class="column-1_2 sc_column_item even stay-form">  
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="false"]');?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="m_wrapper">
                                                <article class="myportfolio-container minimal-light" id="esg-grid-5-1-wrap">
                                                    <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                                                    <div id="esg-grid-5-1" class="esg-grid sc_gal-grid-param-type-a">
                                                        <!-- ############################ -->
                                                        <!-- THE GRID ITSELF WITH ENTRIES -->
                                                        <!-- ############################ -->
                                                        <ul>
                                                            
                                                            <?php
                                                                if( have_rows('gallery') ):
                                                                            // loop through the rows of data
                                                                while ( have_rows('gallery') ) : the_row();?>

                                                            <!-- PORTFOLIO ITEM 8 -->
                                                            <li class="filterall eg-vanburen-wrapper">
                                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                                <div class="esg-media-cover-wrapper">
                                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                                    <div class="esg-entry-media">
                                                                        <img src="<?php the_sub_field('gallery_background_image');?>" alt="<?php the_title(); ?>"></div>
                                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <!-- THE COLORED OVERLAY -->
                                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-vanburen-element-5 esgbox" href="<?php the_sub_field('gallery_background_overlay_image');?>">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <!--icon on gallery overlay image-->
                                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05"><?php the_field('gallery_tagline_text');?></div>
                                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                                    </div>
                                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                                </div>
                                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                                            </li><?php endwhile;endif;wp_reset_query();?>
                                                            <!-- END OF PORTFOLIO ITEM -->
                                                            
                                                            
                                                         
                                                        </ul>
                                                        <!-- ############################ -->
                                                        <!--      END OF THE GRID         -->
                                                        <!-- ############################ -->
                                                    </div>
                                                    <!-- END OF THE GRID -->
                                                </article>
                                                <!-- END OF THE GRID WRAPPER -->
                                                <div class="clear"></div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>                         
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-b" style="background-image: url(<?php the_field('home_page_feedback_background_image_'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_form_wrap">
                                                            <div class="sc_form sc_form_style_form_1 aligncenter sc_home-param-type-g">
                                                                <h3 class="sc_form_title sc_item_title sc_item_title_without_descr"><?php the_field('home_page_feedback_titile'); ?></h3>
                                                                <h6 class="sc_form_subtitle sc_item_subtitle"><?php the_field('home_page_feedback_tagline'); ?></h6>
                                                                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]');?>
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </section>  
                        </div>
                        <!--end .post_content-->
                    </article>
                    <!-- end .post_item .post_item_single .page .type-page -->
                </div>
                <!--end .content-->
            </div>
            <!--end .page_content_wrap-->
            <!--.contacts_wrap -->
            <footer class="contacts_wrap scheme_original">
               <!--.contacts_wrap_inner -->
                <div class="contacts_wrap_inner">
                   <!--.content_wrap -->
                    <div class="content_wrap">
                        <div class="contacts_address">
                            <address class="address_right address_block">
                                <span class="sc_icon icon-icon4"></span>
                                <p class="address_title"><?php the_field('footer_address_tagline','option'); ?></p><p><?php the_field('footer_address_information','option'); ?><br></p>            
                            </address><address class="address_center phone_block">
                                <span class="sc_icon icon-icon5"></span>
                                <p class="address_title"><?php the_field('footer_phone_tagline','option'); ?></p><p><a href="tel:+<?php the_field('footer_phone_number','option'); ?>" style="color: #928b84;"><?php the_field('footer_phone_number','option'); ?></a></p>              
                            </address><address class="address_left email_block">
                                <span class="sc_icon icon-icon6"></span>
                                <p class="address_title"><?php the_field('footer_email_tagline','option'); ?></p><p><a href="mailto:<?php the_field('footer_email_id','option'); ?>" style="color: #928b84;"><?php the_field('footer_email_id','option'); ?></a></p>    
                            </address>
                        </div>
                    </div>  
                    <!-- end .content_wrap -->
                </div>  
                <!-- end .contacts_wrap_inner -->
            </footer>
            <!-- end .contacts_wrap -->
            
    <?php get_footer();?>        