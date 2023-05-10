<?php /*Template Name: Our Goal Page*/
get_header();
?>

            <div class="top_panel_title title_present">
               <div class="top_panel_title_inner title_present bg-breadcrumbs" style="background: url(<?php the_field('our_goal_banner_background_image'); ?>);">
                  <div class="content_wrap">
                     <h1 class="page_title"><?php the_field('our_goal_banner_title'); ?></h1>
                     <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="<?php echo bloginfo('url'); ?>">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current"><?php the_title(); ?></span>                         
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
                           <div class="container-fluid sc_a-us-bg-type-a" style="background-image: url(<?php the_field('our_goal_section_two_background_image'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">
                              <div class="content_container">
                                 <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                       <div class="column-inner">
                                          <div class="m_wrapper">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_9 sc_our-team-a-margin">
                                                            <div class="column-5_9 sc_column_item sc_column_item_1 odd first span_5">
                                                                <h6 class="sc_title sc_title_regular margin_top_null sc_our-team-title-margin"><?php the_field('our_goal_section_two_tagline'); ?></h6>
                                                                <h2 class="sc_title sc_title_iconed margin_top_tiny margin_bottom_null"><?php the_field('our_goal_section_two_title'); ?><span class="sc_title_icon sc_title_icon_bottom  sc_title_icon_small"><img src="<?php the_field('our_goal_section_two_smart_image'); ?>" alt="<?php the_title(); ?>" /></span></h2>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p><?php the_field('our_goal_section_two_content'); ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny margin_top_medium margin_bottom_small">
                                                                    <div class="sc_socials_item"><a href="<?php the_field('footer_facebook_url','option'); ?>" class="social_icons social_facebook"><span class="icon-facebook"></span></a></div><div class="sc_socials_item"><a href="<?php the_field('footer_twitter_url','option'); ?>" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div><div class="sc_socials_item"><a href="<?php the_field('footer_instagram_url','option'); ?>" class="social_icons social_instagramm"><span class="icon-instagramm"></span></a></div><div class="sc_socials_item"><a href="<?php the_field('footer_google_plus_url','option'); ?>" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
                                                                </div>
                                                            </div><div class="column-4_9 sc_column_item sc_column_item_6 even span_4">
                                                                <figure class="sc_image  sc_image_shape_square"><img src="<?php the_field('our_goal_section_two_side_image'); ?>" alt="<?php the_title(); ?>" /></figure>
                                                            </div>
                                                        </div>    
                                                    </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section class="no-col-padding" style="padding-bottom: 6em;">
                                <div class="content_container">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                <div class="m_wrapper">
                                                    <div class="sc_section margin_top_huge margin_bottom_huge" style="margin-bottom: 0 !important;">
                                                        <div class="sc_section_inner">
                                                            <h2 class="sc_section_title sc_item_title sc_item_title_without_descr"><?php the_field('our_goal_support_title'); ?></h2>
                                                            <div class="sc_section_content_wrap">
                                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_small">
                                                                    <div class="column-1_2 sc_column_item odd first">
                                                                        <div class="m_text_column m_content_element ">
                                                                            <div class="m_wrapper m-ul">
                                                                                <?php the_field('our_goal_support_content'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div><div class="column-1_2 sc_column_item even">
                                                                        <div class="m_text_column m_content_element ">
                                                                            <div class="m_wrapper m-ul">
                                                                                <?php the_field('our_goal_support_another_content'); ?>
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
                                                            <div class="column-1_2 sc_column_item odd first" style="height: 61.0333px;">
                                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f"><?php the_field('our_goal_page_update_title'); ?></h3>
                                                            </div><div class="column-1_2 sc_column_item even" style="height: 61.0333px;">
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
            <!--.footer_wrap -->




<?php get_footer();?>