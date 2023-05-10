<?php get_header();?>
            <div class="top_panel_title title_present">
               <div class="top_panel_title_inner title_present bg-breadcrumbs" 
               style="background: url(<?php the_field('banner_image','option'); ?>);">
                  <div class="content_wrap">
                     <h1 class="page_title"><?php the_archive_title();?></h1>
                     <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="<?php bloginfo('url');?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current"><?php the_archive_title();?></span>
                     </div>
                  </div>
               </div>
            </div>
            <!--.page_content_wrap -->      
             <div class="page_content_wrap page_paddings_no">
                <div class="content">
                    <article class="post_item post_item_single page type-page">
                        <div class="post_content">
                            <section class="no-col-padding">
                                <div class="container-fluid">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_blogger layout_classic_3 template_masonry margin_top_small  sc_blogger_horizontal no_description sc_home-margin-type-h">
                                                            <div class="isotope_wrap" data-columns="3">
                                                                <?php

                                                                   
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
                                                                <div class="isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
                                                                    <!--.post_item -->
                                                                    <div class="post_item post_item_classic post_item_classic_3 post_format_standard odd">
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
                                                                                <div class="post_info"> <span class="post_info_item post_info_posted_by">By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="post_info_author"><?php the_author(); ?></a></span> <span class="post_info_item post_info_counters"> <a class="post_counters_item post_counters_comments" title="<?=  $category_name; ?>" href="<?= $category_link; ?>"><span class="post_counters_number"><?=  $category_name; ?></span></a></span></span>
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
                                                            <div class="sc_blogger_button sc_item_button pagination">
                                                                 <?php
                                                                      global $wp_query;

                                                                      $big = 999999999; // need an unlikely integer

                                                                      echo paginate_links( array(
                                                                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                                                      'format' => '?paged=%#%',
                                                                      'current' => max( 1, get_query_var('paged') ),
                                                                        'total' => $wp_query->max_num_pages,
                                                                        'prev_next' => True,
                                                                        'prev_text' => __('&lt;'),
                                                                        'next_text' => __('&gt;'),
                                                                        'type'      => 'list',
                                                                      ) );
                                                                ?>
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