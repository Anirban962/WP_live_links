<?php

get_header(); ?>
 <!-- ======breadcrumb=========================================== -->
<div class="slider-area over-hidden">
    <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="<?php bloginfo('template_directory'); ?>/images/page-bg.jpg">
        <div class="slider-shape position-absolute z-index1">
            <span class="slider-bg-round d-block"></span>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                <div class="page-title b-l text-center position-relative z-index1">
                    <h2 class="text-capitalize font600 mb-10"><?php the_title();?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a class="primary-color" href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li class="breadcrumb-item active text-capitalize" aria-current="page"><?php the_title();?></li>
                        </ol>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>
<!-- end breadcrumb  -->
<!-- ====== Blog-start=============================================== -->
         <div class="single-blog mt-80 mb-80">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="container">
               <div class="row">
                  <div class="col-md-9 mx-auto">
                     <div class="blog-details-wrapper pr-45 mt-10">
                        <div class="blog-details-content">
                          <?php  if ( has_post_thumbnail() ) { ?>
                           <img src="<?php the_post_thumbnail_url('blog_list_image'); ?>" alt="<?php the_title(); ?>">
                            <?php } else { ?>
                            <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2022/12/New-Project.jpg" alt="<?php the_title(); ?>">
                            <?php } ?>
                           <ul class="single-blog-info d-sm-flex mt-20">
                              <li class="date pr-15">
                                 <a href="javascript:void();" class="text-uppercase gray-color2 hvr font500">
                                 <span class="pr-1 theme-color"><i class="fas fa-calendar-alt"></i> </span>
                                 <span><?php the_time('d') ?></span>
                                 <span> <?php the_time('M') ?></span>
                                 <span> <?php the_time('Y') ?></span>
                                 </a>
                              </li>
                           </ul>
                           <h3 class="font400 mt-15"><?php the_title(); ?></h3>
                           <ul class="sb-ul">
                              <li>
                                 <div class="blogger d-flex align-items-center">
                                    <p>
                                       <span class="red-color">By</span> <?php the_author(); ?>
                                    </p>
                                 </div>
                              </li>
                              <li>
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
                              </li>
                              
                           </ul>
                              
                              
                          <!-- Blog content -->
                          
                          <!-- Blog content end -->

                        </div>
                        <div class="blog-details-content2 pb-40">
                           <?php the_content(); ?>
                        </div>
                        <div class="blog-social-sharing product-view-info d-lg-flex align-items-center justify-content-start justify-content-md-between pt-25 pb-10 shop-t-border1 shop-b-border1">
                           <!-- <ul class="social-link mb-15">
                              <li class="d-block d-sm-inline-block mr-12">
                                 <span class="cat-title primary-color font600">Share to friends:</span>
                              </li>
                           </ul> -->
                            <!-- AddToAny BEGIN -->
              							<div class="a2a_kit a2a_kit_size_32 a2a_default_style iconsocial">
                              <span class="cat-title primary-color font600">Share to friends:</span>
              							<!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> -->
              							   <a class="a2a_button_facebook"></a>
              							  </li>
              							<a class="a2a_button_twitter"></a>
              							<a class="a2a_button_google_gmail"></a>
              							</div>
              							<script async src="https://static.addtoany.com/menu/page.js"></script>
                                           <!-- AddToAny END -->
                           <div class="d-sm-flex align-items-center justify-content-start justify-content-lg-end">
                              <ul class="p-tags d-flex  mb-15">
                                 <li><span class="font600 primary-color pr-1">Tags:</span></li>
                                 <?php
								$posttags = get_the_tags();
								if ($posttags) {
								  foreach($posttags as $tag) {
								?>
                                <li><a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) ); ?>" class="gray-color2 hvr pr-1"><?php  echo $tag->name ?></a></li>
								<?php   }
								}
								?>
                                
                              </ul>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                              <div class="single-author-post mt-60">
                                 <ul class="blog-posts d-md-flex justify-content-between">
                             	<?php 
                                 $prev_post = get_adjacent_post(false, '', true);
                                  if(!empty($prev_post)) {
                             	?>
                                    <li class="mb-30">
                                       <a href="<?php echo get_permalink($prev_post->ID);?> " class="primary-color font500 hvr mr-1 d-inline-block mb-10">
                                       <span class="mr-2"><i class="fas fa-chevron-left"></i></span>Previous Post
                                       </a>
                                       <h5><?php echo $prev_post->post_title; ?></h5>
                                    </li>
                                <?php } ?>
                                <?php 
                                 $next_post = get_adjacent_post(false, '', false);
                                 if(!empty($next_post)) {

                                ?>
                                    <li class="text-md-right mb-30">
                                       <a href="<?php echo get_permalink($next_post->ID);?>" class="primary-color font500 hvr ml-1 d-block mb-10">
                                       Next Post<span class="ml-2"><i class="fas fa-chevron-right"></i></span>
                                       </a>
                                       <h5><?php echo $next_post->post_title;?></h5>
                                    </li>
                                <?php } ?>
                                 </ul>
                                 
                              </div>
                             
                           </div>
                           <!-- /col -->
                        </div>
                        <!-- /row -->
                     </div>
                  </div>
               </div>
            </div>
         <?php endwhile; endif; ?>
         </div>
         <!-- Blog-end  -->
<?php
get_footer(); ?>
