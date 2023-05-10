<?php 
/*Template Name:Gallery Page*/
get_header(); ?>

 <div class="top_panel_title title_present">
                <div class="top_panel_title_inner title_present bg-breadcrumbs" style="background: url(<?php the_field('banner_image'); ?>);">
                    <div class="content_wrap">
                        <h1 class="page_title"><?php the_title(); ?></h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="<?php bloginfo('url'); ?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current"><?php the_title(); ?></span>
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
                            <section class="no-col-padding pt-1 pb-1">
                                <div class="container-fluid">    
                                    <div class="column_container column-1_1">
                                        <div class="column-inner">
                                            <div class="m_wrapper">
                                                    <div class="sc_section margin_top_tiny-">
                                                    <div class="sc_section_inner">
                                                        <h2 class="sc_section_title sc_item_title sc_item_title_without_descr"><?php the_field('section_two_title'); ?></h2>
                                                        <h6 class="sc_section_subtitle sc_item_subtitle"><?php the_field('section_two_tagline'); ?></h6>
                                                        <div class="sc_section_content_wrap">
                                                            
                                                            <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                                                <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                                                                <div id="esg-grid-1-1" class="esg-grid sc_gal-grid-param-type-a">
                                                                    <!-- ############################ -->
                                                                    <!-- THE GRID ITSELF WITH ENTRIES -->
                                                                    <!-- ############################ -->
                                                                    <ul>
                                                                        <!-- PORTFOLIO ITEM 8 -->
                                                                        
                                                                         <?php
                                                                                if( have_rows('gallery_item_list') ):
                                                                                                             // loop through the rows of data
                                                                                 while ( have_rows('gallery_item_list') ) : the_row();?>
                                                                        <li class="filterall eg-vanburen-wrapper">
                                                                            <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                                            <div class="esg-media-cover-wrapper">
                                                                                <!-- THE MEDIA OF THE ENTRY -->
                                                                                <div class="esg-entry-media"><img src="<?php the_sub_field('image'); ?>" alt="<?php the_title(); ?>" ></div>
                                                                                <!-- THE CONTENT OF THE ENTRY -->
                                                                                <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                                                                                                                  
                                                                                    <!-- THE COLORED OVERLAY -->
                                                                                    <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                                                    <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                                                        <a class="eg-vanburen-element-5 esgbox" href="<?php the_sub_field('image'); ?>">
                                                                                            <i class="eg-icon-search"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                                                        <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                                            <i class="eg-icon-link"></i>
                                                                                        </a>
                                                                                    </div>                                                                                                                                     <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>    
                                                                                    <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05"><?php the_sub_field('title'); ?></div>
                                                                                    <div class="esg-center eg-vanburen-element-3 esg-none esg-clear "></div>
                                                                                 
                                                                                </div>
                                                                                <!-- END OF THE CONTENT IN THE ENTRY -->
                                                                            </div>
                                                                            <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                                                        </li>
                                                                        
                                                                        <?php endwhile;endif;wp_reset_query();?>
                                                                        
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
                                                        <div class="sc_section_button sc_item_button"><a href="<?php the_field('gallery_get_in_touch_button_text_url'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small  sc_button_iconed icon-right"><?php the_field('gallery_get_in_touch_button_text'); ?></a></div>
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
                                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f">Stay Tuned with Updates!</h3>
                                                            </div><div class="column-1_2 sc_column_item even">
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-341" method="post" data-id="341" data-name="">
                                                                            <div class="mc4wp-form-fields">
                                                                                <input type="email" name="EMAIL" placeholder="Enter Your Email" class="emailer_input" required />
                                                                                <input type="submit" class="emailer_submit" value="submit" />
                                                                                <div class="hide">
                                                                                    <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                                                                </div>
                                                                           </div>
                                                                            <div class="mc4wp-response"></div>
                                                                        </form>
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
<?php get_footer(); ?>