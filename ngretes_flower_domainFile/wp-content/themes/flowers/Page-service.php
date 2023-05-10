<?php get_header();/*Template Name:Service Page*/?>
            <div class="top_panel_title title_present">
                <div class="top_panel_title_inner title_present bg-breadcrumbs" style="background: url(<?php the_field('section_one_banner_image'); ?>);">
                    <div class="content_wrap">
                        <h1 class="page_title"><?php the_field('section_one_banner_title'); ?></h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="<?php bloginfo('url');?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current"><?php the_field('section_one_banner_title'); ?></span>
                        </div>  
                    </div>
                </div>
            </div>
            <!--.page_content_wrap -->      
            <div class="page_content_wrap page_paddings_no">
                <!--.content-->
                <div class="content">
                   <!--.post_item .post_item_single .page .type-page -->
                    <article class="post_item post_item_single page type-page">
                       <!--.post_content-->
                        <div class="post_content">
                            <section class="no-col-padding pt-1">
                                <div class="content_container">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                <div class="m_wrapper">
                                                    <!--.sc_services_wrap -->
                                                    <div class="sc_services_wrap">
                                                        <!-- .sc_services -->
                                                        <div class="sc_services sc_services_style_services-1 sc_services_type_images  margin_top_tiny- margin_bottom_large full-width">
                                                            <h3 class="sc_services_title sc_item_title sc_item_title_without_descr"><?php the_field('section_two_title'); ?></h3>
                                                            <h6 class="sc_services_subtitle sc_item_subtitle"><?php the_field('section_two_tagline'); ?></h6>
                                                            <div class="sc_columns columns_wrap">
                                                                <?php
                                                                $a=1;
                                                                $args = array(
                                                                'posts_per_page' => 6,
                                                                'order'            => 'DESC',
                                                                'post_type'        => 'service',
                                                                'post_status'      => 'publish',
                                                                'suppress_filters' => true,
                                                                );
                                                                query_posts($args);
                                                                if ( have_posts() ) : while (have_posts()) : the_post();
                                                                               
                                                                   ?><div class="column-1_3 column_padding_bottom">
                                                                    <div class="sc_services_item <?php if($a==1){ echo "odd first";} elseif($a%2==0){echo "even";}else{echo "odd";}?>">
                                                                        <div class="sc_services_item_featured post_featured">
                                                                            <div class="post_thumb" data-image="" data-title="Bouquets &amp; Style">
                                                                                <a class="hover_icon hover_icon_link" href="<?php the_permalink(); ?>"><img class="post-image" alt="img1.jpg" src="<?php the_post_thumbnail_url('servicefirst_thumb');?>"></a>
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
                            <section class="no-col-padding" style="display: none;">
                                <div class="container-fluid sc_home-bg-type-d" style="background-image: url(<?php the_field('section_three_banner_image'); ?>) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section sc_section_block sc_home-margin-type-i">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <h3 class="sc_title sc_title_underline sc_align_center sc_home-param-type-d" style="font-size: 3em !important;"><?php the_field('section_three_title'); ?></h3><a href="<?php the_field('section_three_button_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter sc_home-param-type-e" style="width: 200px !important;"><?php the_field('section_three_button_text'); ?></a>
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
                            <section class="no-col-padding" style="display: none;">
                                <div class="container-fluid">    
                                    <div class="content_container">     
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_section sc_section_block sc_home-margin-type-j">
                                                            <div class="sc_section_inner">
                                                                <h2 class="sc_section_title sc_item_title sc_item_title_without_descr"><?php the_field('section_four_title'); ?></h2>
                                                                <h6 class="sc_section_subtitle sc_item_subtitle"><?php the_field('section_four_tagline'); ?></h6>
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
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-a">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_large margin_bottom_large" data-equal-height=".sc_column_item">
                                                            <div class="column-1_2 sc_column_item odd first">
                                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f"><?php the_field('section_five_title'); ?></h3>
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
                        <!--end .post_content-->
                    </article>
                    <!-- end .post_item .post_item_single .page .type-page -->
                </div>
                <!--end .content-->
            </div>
            <!--end .page_content_wrap-->
         
        <?php get_footer();?>