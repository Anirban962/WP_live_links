<?php get_header();?>
            <div class="top_panel_title title_present">
               <div class="top_panel_title_inner title_present bg-breadcrumbs" 
               style="background: url(<?php the_field('banner_image','option'); ?>);">
                  <div class="content_wrap">
                     <h1 class="page_title"><?php the_title();?></h1>
                     <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="<?php bloginfo('url');?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current"><?php the_title();?></span>
                     </div>
                  </div>
               </div>
            </div>
            <!--.page_content_wrap -->      
             <div class="page_content_wrap page_paddings_no pt-1 sidebar_left">
               <div class="content_wrap pb-1">
                  <!--.content -->
                  <div class="content">
                     <!--.post_item .post_item_single -->
                     <?php  if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                     <article class="post_item post_item_single">
                         <?php  if ( has_post_thumbnail() ) {  ?>
                        <section class="post_featured">
                           <div class="post_thumb" data-image="<?php the_post_thumbnail_url('service_thumb'); ?>" data-title="Single Service">
                            
                              <a class="hover_icon hover_icon_view" href="<?php the_post_thumbnail_url('service_thumb'); ?>" title="Wedding Planning">
                                 <img class="post-image" alt="Single Service" src="<?php the_post_thumbnail_url('service_thumb'); ?>" alt="<?php the_title();  ?>">
                              </a>
                          
                           </div>
                        </section>
                         <?php } ?>
                        <!--.post_content-->
                        <div class="post_content">
                           <section class="no-col-padding">
                              <div class="container">
                                 <div class="columns_wrap">
                                    <div class="column_container column-1_1">
                                       <div class="column-inner">
                                          <div class="m_wrapper">
                                             <h4 class="sc_title sc_title_regular margin_top_medium margin_bottom_tiny sc_title-single-margin"><?php the_title(); ?></h4>
                                             <div class="m_text_column m_content_element ">
                                                <div class="m_wrapper">
                                                   <?php the_content(); ?>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                        <!-- end .post_content-->
                     </article>
                     <!-- end .post_item .post_item_single -->
                      <?php endwhile;endif;?>
                  </div>
                  <!-- end .content -->
                  <div class="sidebar widget_area scheme_original">
                     <div class="sidebar_inner widget_area_inner">
                        <aside class="widget_number_1 widget widget_nav_menu">
                           <h5 class="widget_title"><?php the_field('related_service_title','option'); ?></h5>
                           <div class="menu-services-menu-container">
                              <ul id="menu-services-menu" class="menu">
                                 <?php
                             $args = array(
                              'posts_per_page' =>-1,
                             'order'         => 'DESC',
                             'post_type'        => 'service',
                             'post_status'      => 'publish',
                             'post__not_in' => array( get_the_id(),),
                             'suppress_filters' => true,
                             );
                             query_posts($args);

                             if ( have_posts() ) : while (have_posts()) : the_post();
                                 ?>
                                 <li class="menu-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                              <?php endwhile; endif;?>
                              </ul>
                           </div>
                        </aside>
                     </div>
                  </div>
                  <!-- end .sidebar -->
               </div>
               <!-- end .content_wrap -->
               <section class="no-col-padding">
                  <div class="container-fluid sc_home-bg-type-d" style="background-image:url(<?php the_field('call_to_action_bg_image','option'); ?>)!important;">
                     <div class="content_container">
                        <div class="columns_wrap">
                           <div class="column_container column-1_1">
                              <div class="column-inner">
                                 <div class="m_wrapper">
                                    <div class="sc_section sc_section_block sc_home-margin-type-i">
                                       <div class="sc_section_inner">
                                          <div class="sc_section_content_wrap">
                                             <h3 class="sc_title sc_title_underline sc_align_center sc_home-param-type-d" style="font-size: 3em !important;"><?php the_field('call_to_action_title','option'); ?></h3>
                                             <a href="<?php the_field('call_to_action_button_url','option'); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter sc_home-param-type-e"><?php the_field('call_to_action_button_text','option'); ?></a>
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
                                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f"><?php the_field('subscribe_title','option'); ?></h3>
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
            <!--end .page_content_wrap-->
          
    <?php get_footer();?>        