<?php 
/*Template Name:Blog Page*/
get_header();?>
 <!-- ======breadcrumb=========================================== -->
<div class="slider-area over-hidden">
    <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="<?php bloginfo('template_directory'); ?>/images/page-bg.jpg">
        <div class="slider-shape position-absolute z-index1">
            <span class="slider-bg-round d-block"></span>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                <div class="page-title b-l text-center position-relative z-index1">
                    <h2 class="text-capitalize font600 mb-10"><?php
               the_archive_title();
              ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page"><?php
               the_archive_title();
              ?></li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>
<!-- end breadcrumb  -->
<!-- ====== Blog-start=============================================== -->
         <div class="blog-area pt-115">
            <div class="container">
               <div class="row" style="display: none;">
                  <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                     <div class="section-title text-center">
                        <span class="theme-color d-block pb-2">Don't Miss</span>
                        <h3>Our Latest News</h3>
                     </div>
                     <!-- /section-title -->
                  </div>
                  <!-- /col -->
               </div>
               <div class="row mt-30">
               	 <?php
	             //  $paged = get_query_var( 'paged' );
	             //  $count=1;
	             //  $args = array(
	             //   'posts_per_page' => 3,
	             //  'paged'    =>      $paged,
	             //  'order'         => 'DESC',
	             //  'post_type'        => 'post',
	             //  'post_status'      => 'publish',
	             //  'suppress_filters' => true,
              // );
              // query_posts($args);
              if(have_posts() ) : while (have_posts()) : the_post();

              ?>
                  <div class="col-md-4">
                     <div class="post-item">
                        <div class="post__img">
                           <a href="<?php the_permalink(); ?>">
                           <?php  if ( has_post_thumbnail() ) { ?>
                           <img src="<?php the_post_thumbnail_url('blog_list_image'); ?>" alt="<?php the_title(); ?>">
                            <?php } else { ?>
                            <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2022/12/New-Project.jpg" alt="<?php the_title(); ?>">
                            <?php } ?>
                           </a>
                        </div>
                        <!-- /.post__img -->
                        <div class="post__content">
                           <ul class="single-blog-info d-sm-flex mb-10">
                              <li class="date pr-15">
                                 <a href="javascript:void();" class="text-uppercase gray-color2 hvr font500">
                                 <span class="pr-1 theme-color"><i class="fas fa-calendar-alt"></i> </span>
                                 <span><?php the_time('d') ?></span>
                                 <span> <?php the_time('M') ?></span>
                                 <span> <?php the_time('Y') ?></span>
                                 </a>
                              </li>
                              <!-- <li class="comment pr-15">
                                 <a href="#" class="text-uppercase gray-color2 hvr font500">
                                 <span class="pr-1 theme-color"><i class="fas fa-comment"></i></span>
                                 <span>Comment(05)</span>
                                 </a>
                              </li> -->
                           </ul>
                           <h4 class="font500 blog-title-1"><a class="d-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                           <div class="site-category">

                              <?php
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
                              <span><a href="<?= $category_link; ?>"><?= $category_name; ?></a></span>
                           </div>
                           <div class="blogger d-flex align-items-center">
                              <p>
                                 <span class="red-color">By</span> <?php the_author(); ?>
                              </p>
                           </div>
                           <p class="pb-1">
                              <?php echo wp_trim_words( get_the_content(), 15, '...' );?>
                           </p>
                           <a href="<?php the_permalink(); ?>" class="d-inline-block text-capitalize primary-color hvr font500">Read more...</a>
                        </div>
                        <!-- /.post__content -->
                     </div>
                     <!-- /.post-item -->
                  </div>
              <?php endwhile; endif;?> 
               </div>
               <div class="pagination-area mt-30 mb-20 over-hidden">
                  <div class="container-wrapper extra-padding-15">
                     <div class="row pb-80">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                           <nav class="pagination-page" aria-label="Page navigation example">
                              <?php
					          global $wp_query;

					          $big = 999999999; // need an unlikely integer

					          echo paginate_links( array(
					          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					          'format' => '?paged=%#%',
					          'current' => max( 1, get_query_var('paged') ),
					          'total' => $wp_query->max_num_pages
					          ) );
					          ?>
                           </nav>
                        </div>
                        <!-- /col -->
                     </div>
                     <!-- /row -->
                  </div>
                  <!-- /container -->
               </div>
            </div>
            <!-- end container -->
         </div>
         <!-- Blog-end  -->

<?php get_footer(); ?>