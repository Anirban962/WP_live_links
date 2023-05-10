<?php /*Template Name: About Page*/
get_header();
?>

            <div class="top_panel_title title_present">
                <div class="top_panel_title_inner title_present bg-breadcrumbs" style="background: url(<?php the_field('about_banner_background_image');?>);">
                    <div class="content_wrap">
                        <h1 class="page_title"><?php the_field('about_banner_tagline');?></h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="<?php echo bloginfo('url');?>"><?php the_field('about_breadcrumb_text');?></a>
                            <span class="breadcrumbs_delimiter"></span>
                            <span class="breadcrumbs_item current"><?php the_field('about_breadcrumb_another_text');?></span>                         
                        </div>
                    </div>
                </div>
            </div>
            <!--.page_content_wrap-->
            <div class="page_content_wrap page_paddings_no">
             <!--.content-->
             <div class="content">
                <!--.post_item .post_item_single .page .type-page-->
                <article class="post_item post_item_single page type-page">
                    <!--.post_content -->
                    <div class="post_content">
                        <section class="no-col-padding">
                            <div class="container-fluid sc_a-us-bg-type-a "style="background-image: url(<?php the_field('about_section_three_background_image'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">    
                                <div class="content_container">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">  
                                            <div class="column-inner">
                                                <div class="m_wrapper">
                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_9 sc_a-us-margin-type-a no-pbtm">
                                                        <div class="column-5_9 sc_column_item odd first">
                                                            <h6 class="sc_title sc_title_regular margin_top_null sc_a-us-margin-type-b"><?php the_field('about_section_two_tagline');?></h6>
                                                            <h2 class="sc_title sc_title_iconed margin_top_tiny margin_bottom_null sc_a-us-margin-type-c fsz_cust"><?php the_field('about_section_two_heading');?><span class="sc_title_icon sc_title_icon_bottom  sc_title_icon_small"><img src="<?php the_field('about_section_two_smart_image');?>" alt="<?php the_title();?>" /></span></h2>
                                                            <div class="m_text_column m_content_element ">
                                                                <div class="m_wrapper">
                                                                        <?php the_field('about_section_two_content');?>
                                                                </div>
                                                            </div>
                                                        </div><div class="column-4_9 sc_column_item even">
                                                            <div class="cq-coverslider  navigation-overlay-right tinyshadow grapefruit " data-imagemaxheight="300" data-buttonbackground="" data-buttonhoverbackground="#222F46" data-contentbackground="" data-contentcolor="" data-arrowcolor="" data-arrowhovercolor="" data-delaytime="2">
                                                                <div class="cq-coverslider-area btn-large square">
                                                               
                                                                    <div class="cq-coverslider-cover">
                                                                     
                                                                        <div class="cq-coverslider-itemcontainer">
                                                                             <?php
                                                                       if( have_rows('about_section_two_slider_') ):
                                                                                                    // loop through the rows of data
                                                                        while ( have_rows('about_section_two_slider_') ) : the_row();?>
                                                                        
                                                                            <div class="cq-coverslider-imageitem"><img src="<?php the_sub_field('about_slider_image'); ?>" class="cq-coverslider-image" alt="<?php the_title(); ?>"></div>
                                                                            <?php endwhile;endif;wp_reset_query();?>
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
                                                                       if( have_rows('about_testimonial_slider') ):
                                                                                                    // loop through the rows of data
                                                                        while ( have_rows('about_testimonial_slider') ) : the_row();?>
                                                                <div class="swiper-slide w100" data-style="width:100%;">
                                                                    <div class="sc_testimonial_item">
                                                                        <div class="sc_testimonial_avatar"><img class="post-image" alt="Alison &#038; Mark Priston" src="<?php the_sub_field('testimonial_image');?>"></div>
                                                                        <div class="sc_testimonial_content">
                                                                            <p><?php the_sub_field('testimonial_heading'); ?></p>
                                                                        </div>
                                                                        <div class="sc_testimonial_author"><span class="sc_testimonial_author_name"><?php the_sub_field('testimonial_tagline'); ?>, </span><span class="sc_testimonial_author_position"><?php the_sub_field('testimonial_author_location'); ?></span></div>
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
                                                    <h3 class="sc_blogger_title sc_item_title sc_item_title_without_descr"><?php the_field('about_blog_title'); ?></h3>
                                                    <h6 class="sc_blogger_subtitle sc_item_subtitle"><?php the_field('about_blog_tagline'); ?></h6>
                                                    <div class="isotope_wrap" data-columns="3">
                                                     <!--.isotope_item -->
                                                     
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
                                                                                   
                                                                       ?> 
                                                     <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3 mcol-full">
                                                        <!--.post_item -->
                                                        <div class="post_item post_item_classic post_item_classic_3 post_format_standard odd">
                                                            <div class="post_featured">
                                                                <div class="post_thumb" data-image="<?php the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>">
                                                                    <a class="hover_icon hover_icon_link" href="<?php the_permalink(); ?>"><img class="post-image" alt="An occasion that joins two hearts in a symphony" src="<?php the_post_thumbnail_url(); ?>"></a>
                                                                </div>
                                                            </div>
                                                            <!--.post_content -->
                                                            <div class="post_content isotope_item_content">
                                                                <div class="post_info"> <span class="post_info_item post_info_posted"> <a href="<?php the_permalink(); ?>" class="post_info_date"><?php the_time('F d,Y'); ?></a></span> </div>
                                                                <h5 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                                <div class="post-info-bottom">
                                                                    <div class="post_info"> <span class="post_info_item post_info_posted_by">By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="post_info_author"><?php the_author(); ?></a></span> <span class="post_info_item post_info_counters"> <a class="post_counters_item post_counters_comments" title="Comments - 3" href="<?php the_permalink(); ?>"><span class="post_counters_number"><?php echo get_comments_number($post->ID); ?> comments</span></a> </span>
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
                                        <div class="sc_blogger_button sc_item_button"><a href="<?php the_field('about_blog_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium"><?php the_field('about_blog_button_text'); ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <section class="no-col-padding">
            <div class="container-fluid sc_home-bg-type-d" style="background-image: url(<?php the_field('about_page_contact_section_background_image'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">    
                <div class="content_container">
                    <div class="columns_wrap">
                        <div class="column_container column-1_1">
                            <div class="column-inner">
                                <div class="m_wrapper">
                                    <div class="sc_section sc_section_block sc_home-margin-type-i">
                                        <div class="sc_section_inner">
                                            <div class="sc_section_content_wrap">
                                                <h3 class="sc_title sc_title_underline sc_align_center sc_home-param-type-d" style="font-size: 3em !important;"><?php the_field('about_page_contact_section_title') ;?></h3><a href="<?php the_field('about_page_contact_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter sc_home-param-type-e" style="width: 200px !important;"><?php the_field('about_page_contact_button_text'); ?></a>
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
            <div class="container-fluid sc_home-bg-type-a">    
                <div class="content_container">
                    <div class="columns_wrap">
                        <div class="column_container column-1_1">
                            <div class="column-inner">
                                <div class="m_wrapper">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_large margin_bottom_large" data-equal-height=".sc_column_item">
                                        <div class="column-1_2 sc_column_item odd first">
                                            <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f"><?php the_field('about_page_stay_tune_title'); ?></h3>
                                        </div><div class="column-1_2 sc_column_item even">
                                            <div class="m_text_column m_content_element ">
                                                <div class="m_wrapper">
                                                    <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');?>
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


    </div>
    <!-- end .post_content -->
</article>
<!--end .post_item .post_item_single .page .type-page-->
</div>
<!-- end .content-->
</div>
<!-- end .page_content_wrap-->







<?php get_footer();?>