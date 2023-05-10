<?php

get_header();
/*Template Name: Home Page*/?>

<main>
         <!-- ======slider-area-start=========================================== -->
         <div class="slider-area over-hidden">
            <div class="slider-active">
            <?php
                if( have_rows('section_one_banner') ):

                while ( have_rows('section_one_banner') ) : the_row();?>

               <div class="single-slider slider-height slider2-height d-flex align-items-center" data-background="<?php the_sub_field('banner_background_image');?>">
                  <div class="container">
                     <div class="row ">
                        <div class="col-xl-6  col-lg-6  col-md-7  col-sm-12 col-12 d-flex align-items-center ">
                           <div class="slider-content">
                              <span data-animation="fadeInLeft" data-delay=".7s" class="d-block text-white"><?php the_sub_field('upper_tagline');?></span>
                              <h2 data-animation="fadeInLeft" data-delay="1s" class="pt-15 mb-1 text-white text-capitalize pb-10"><?php the_sub_field('tagline');?></h2>
                              <p class="pr-20 text-white" data-animation="fadeInLeft" data-delay="1.5s"><?php the_sub_field('semi_tagline');?></p>
                              <a data-animation="fadeInUp" data-delay="1.7s" href="<?php the_sub_field('button_url');?>" class="web-btn    d-inline-block mt-2 text-uppercase white border-white02 position-relative over-hidden pl-30 pr-30 pt-15 pb-15"><?php the_sub_field('button_text');?><span class="pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                           </div>
                        </div>
                        <!-- /col -->
                        <div class="col-xl-6  col-lg-6  col-md-5  col-sm-12 col-12 d-flex align-items-center ">
                           <div class="slider-img" data-animation="fadeInRight" data-delay="1.5s">
                              <img src="<?php the_sub_field('banner_side_image');?>" alt="">
                           </div>
                        </div>
                        <!-- /col -->
                     </div>
                     <!-- /row -->
                  </div>
                  <!-- /container -->
               </div>
               <?php endwhile;endif;wp_reset_query();?>




            </div>
            <!-- /slider-active -->
         </div>
         <!-- slider-area-end=  -->
         <!-- ====== brand-logo-area-start ========================================= -->
         <!-- <div class="brand-logo-area bg-white over-hidden">
            <div class="container border-t-gray pt-50 pb-50">
               <div class="mlr--60">
                  <div class="row brand-active d-flex align-items-center justify-content-lg-between">
                        <?php
                            if( have_rows('brand_logo_area_start_wrapper') ):

                            while ( have_rows('brand_logo_area_start_wrapper') ) : the_row();?>

                     <div class="col-xl-12  col-lg-2  col-md-2  col-sm-2 col-2">
                        <div class="text-center">
                           <a href="<?php the_sub_field('brand_logo_area_start_url');?>" class="d-block p-1">
                           <img class="d-inline-block" src="<?php the_sub_field('brand_logo_area_start_image');?>" alt="brand_img">
                           </a>
                        </div>
                     </div>
                     <?php endwhile;endif;wp_reset_query();?>




                  </div>
                  <!- /brand-active -->
               <!-- </div> -->
            <!-- </div> -->
            <!-- /container -->
         <!-- </div> -->

         <!-- brand-logo-area-end  -->

         <div class="brand-logo-area bg-white over-hidden">
            <div class="container pt-50">
               <div class="brand-logo-div">
                  <div class="row">
                     <div class="col-md-7 mx-auto">
                        <div class="row owl-carousel">
                            <?php
                            if( have_rows('brand_logo_area_start_wrapper') ):

                            while ( have_rows('brand_logo_area_start_wrapper') ) : the_row();?>
                           <div class="item">
                              <a href="<?php the_sub_field('brand_logo_area_start_url');?>" class="d-block p-1">
                                 <img src="<?php the_sub_field('brand_logo_area_start_image');?>">
                              </a>
                           </div>
                           <?php endwhile;endif;wp_reset_query();?>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
            <!-- /container -->


         <!-- ====== top-product-area-start=========================================== -->
         <div class="banner-area mt-80 mb-50 hm2">
            <div class="container">
               <div class="row">
                   <?php
                if( have_rows('product_area_list') ):

                while ( have_rows('product_area_list') ) : the_row();?>

                  <div class="col-xl-4 col-lg-4  col-md-6  col-sm-12 col-12 ">
                     <div class="banner mb-30 transition-3 position-relative over-hidden">
                        <a href="#" class="d-block">
                        <img class="img-zoom transition-3 width100 height100" src="<?php the_sub_field('background_image');?>" alt="">
                        </a>
                        <div class="banner-content position-absolute transfY50 w-100 pl-35">
                           <span class="text-white d-block mb-10"><?php the_sub_field('upper_tagline');?></span>
                           <h4 class="text-white"><a href="<?php the_sub_field('tagline_link');?>"><?php the_sub_field('tagline');?></a> </h4>
                           <a href="<?php the_sub_field('button_url');?>" class="web-btn  d-inline-block text-uppercase white-bg primary-color  position-relative over-hidden px-3 pt-6 pb-6 mt-25"><?php the_sub_field('button_text');?><span class="pl-1"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                        </div>
                     </div>
                  </div>

                     <?php endwhile;endif;wp_reset_query();?>
                  <!-- /col -->



               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </div>
         <!-- top-product-area-end -->
         <!-- ====== product-area-start================================ -->
         <div class="product-area home2-product-area pb-80">
            <div class="container">
               <div class="product-content single-product-tab-content">
                  <div class="row">
                     <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                        <div class="section-title text-center">
                           <span class="theme-color d-block pb-2"><?php the_field('featured_product');?></span>
                           <h3><?php the_field('trending_this_week');?></h3>
                        </div>
                        <!-- /section-title -->
                     </div>
                     <!-- /col -->
                  </div>
                  <!-- /row -->
                  <!-- test -->
                  <div class="popular-wrp mt-30">
                     <div class="row">
                        <?php
                             global $product;
                            $args = array(
                            'paged' => $paged,
                            'posts_per_page' => 4,
                            'order'=> 'popularity',
                            'post_type'=> array('product'),
                            'post_status'=> 'publish',
                            'suppress_filters' => true,
                            );
                            query_posts($args);
                            if ( have_posts() ) : while (have_posts()) : the_post();
                            ?>


                        <div class="col-md-3">
                           <div class="s-p-wrapper">
                              <div class="single-product mb-35">
                                 <div class="single-product-img position-relative over-hidden">
                                    <div class="single-product-label position-absolute theme-bg text-center px-2 transition-3 z-index1">
                                       <span class="white text-uppercase d-block"><span>
                                           <?php
                                              if ( $product->is_type( 'simple' ) ) {
                                                $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
                                             } elseif ( $product->is_type( 'variable' ) ) {
                                                $max_percentage = 0;
                                                foreach ( $product->get_children() as $child_id ) {
                                                   $variation = wc_get_product( $child_id );
                                                   $price = $variation->get_regular_price();
                                                   $sale = $variation->get_sale_price();
                                                   if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
                                                   if ( $percentage > $max_percentage ) {
                                                      $max_percentage = $percentage;
                                                   }
                                                }
                                             }

                                       ?>
                                       <?php if( isset($max_percentage) && $max_percentage > 0 ){  echo "" . round( $max_percentage ) . "%"; ?>
                                       </span>off</span>
                                    <?php } ?>
                                    </div>
                                    <!-- /product-label -->
                                     <a class="position-relative d-block" href="<?php the_permalink(); ?>" tabindex="0">

                                   <?php  if(has_post_thumbnail()){ ?>
                                    <img class="width100 height100" src="<?php the_post_thumbnail_url('home_big-image'); ?>" alt="<?php the_title(); ?>">
                                  <?php } else { ?>
                                     <img class="width100 height100" src="<?php echo get_template_directory_uri(); ?>/images/product1.jpg" alt="
                                    product">
                                  <?php } ?>

                                    </a>
                                    <ul class="product-action d-flex position-absolute transition-3">
                                       <li data-toggle="tooltip" data-placement="top">
                                         <!--  <a href="#" class="text-center mb-10 white-bg primary-color d-block" tabindex="0">
                                          <span><i class="far fa-shopping-cart"></i></span>
                                          </a> -->
                                          <a href="<?php the_permalink();?>" data-quantity="1" class="button text-center mb-10 white-bg primary-color d-block">View Details</a>
                                       </li>

                                    </ul>
                                    <!-- /view-btn -->
                                 </div>
                                 <!-- /single-product-img -->
                                 <div class="single-product-info position-relative mt-25 text-center">
                                    <h6 class="p-heading"><a href="<?php the_permalink(); ?>" tabindex="0"><?php the_title();?></a></h6>
                                    <ul class="single-product-price d-flex transition-3">
                                       <li>
                                        <?php if ( $price_html = $product->get_price_html() ) : ?>
                                          <span class="price"><?php echo $price_html; ?></span>
                                       <?php endif; ?>
                                       </li>
                                    </ul>
                                    <!-- /single-product-price -->
                                    <div class="rating">

                                       <?php echo wc_get_rating_html($product->get_average_rating() ); ?>
                                    </div>
                                 </div>
                              </div>
                              <!-- /single-product -->
                           </div>
                        </div>
                        <?php endwhile;endif;wp_reset_query();?>

                     </div>
                  </div>
                  <!-- test end -->
                  <!--need to modify-->

                  <div class="text-center">
                     <a data-animation="fadeInUp" data-delay="1.7s" href="<?php the_field('_popular_products_button_url');?>" class="web-btn black-btn d-inline-block mt-2 text-uppercase position-relative over-hidden pl-30 pr-30 pt-15 pb-15"><?php the_field('_popular_products_button_text');?><span class="pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>

                  </div>
                  <!--need to modify-->
               </div>
               <!-- /product-content -->
            </div>
            <!-- /container -->
         </div>
         <!-- product-area-end  -->
         <!-- test -->
            <div class="deal-of-the-day pdgn75" style='background-image: url("<?php echo get_template_directory_uri(); ?>/images/subscribe-bg.jpg");' >
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="deal-of-day-banner">
                              <a href="<?php the_field('trending_this_week_url');?>"><img src="<?php the_field('trending_this_week_banner');?>" alt="demo"></a>
                        </div>
                     </div><!-- end col -->
                     <div class="col-md-8">
                        <div class="deal-day-top">
                           <div class="deal-day-title">
                              <h4 class="title">Deal Of The Day</h4>
                           </div>
                           <div class="view-all-deal">
                              <a href="<?php bloginfo('url'); ?>/shop/">View All</a>
                           </div>
                        </div>
                        <div class="row news-post-active">
                            <?php
                             global $product;
                             $args = array(
                               'post_type'      => 'product',
                               'meta_query'     => array(
                                   'relation' => 'OR',
                                   array( // Simple products type
                                       'key'           => '_sale_price',
                                       'value'         => 0,
                                       'compare'       => '>',
                                       'type'          => 'numeric'
                                   ),
                                   array( // Variable products type
                                       'key'           => '_min_variation_sale_price',
                                       'value'         => 0,
                                       'compare'       => '>',
                                       'type'          => 'numeric'
                                   )
                               )
                           );

                            query_posts($args);
                            if(have_posts() ) : while (have_posts()) : the_post();

                               $price = get_post_meta( get_the_ID(), '_regular_price', true);
                               $price_sale = get_post_meta( get_the_ID(), '_sale_price', true);
                               $units_sold = $product->get_total_sales();
                               $stocks = $product->get_stock_quantity();
                            ?>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="most-popular-viewed-item mb-30">
                                 <div class="viewed-item-top">
                                    <div class="most--popular--item--thumb mb-8">
                                       <a href="<?php the_permalink(); ?>">
                                       <?php  if(has_post_thumbnail()){ ?>
                                            <img src="<?php the_post_thumbnail_url('home_big-image'); ?>" alt="<?php the_title(); ?>">
                                       <?php } else { ?>
                                          <img src="<?php echo get_template_directory_uri(); ?>/images/deal.jpg" alt="<?php the_title(); ?>">
                                       <?php } ?>
                                       </a>
                                    </div>
                                    <div class="super-deal-content">
                                    <h4>
                                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <p><?php
                                    if ($price_sale !== "") {
                                         echo'<del>'.get_woocommerce_currency_symbol().$price.'</del>&nbsp;';
                                         echo get_woocommerce_currency_symbol().$price_sale;
                                     } else {
                                         echo get_woocommerce_currency_symbol().$price;
                                     }
                                    ?>

                                    <?php
                                        if ( $product->is_type( 'simple' ) ) {
                                          $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
                                       } elseif ( $product->is_type( 'variable' ) ) {
                                          $max_percentage = 0;
                                          foreach ( $product->get_children() as $child_id ) {
                                             $variation = wc_get_product( $child_id );
                                             $price = $variation->get_regular_price();
                                             $sale = $variation->get_sale_price();
                                             if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
                                             if ( $percentage > $max_percentage ) {
                                                $max_percentage = $percentage;
                                             }
                                          }
                                       }

                                       ?>
                                      <?php if( isset($max_percentage) && $max_percentage > 0 ) { ?>
                                       <span>(<?php echo  round($max_percentage); ?>% off)</span>
                                    <?php } ?>
                                    </p>
                                 </div>
                                 </div>
                                 <div class="viewed-item-bottom">
                                    <ul>
                                       <?php if($units_sold > 0){ ?>
                                       <li>Total Sold : <?= $units_sold; ?></li>
                                      <?php } ?>
                                      <?php if($stocks > 0){ ?>
                                       <li>Stocks : <?php echo $stocks; ?></li>
                                      <?php } ?>
                                    </ul>
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <!-- end col -->
                            <?php endwhile;endif;wp_reset_query();?>

                           <!-- end col -->
                        </div>
                     </div><!-- end col -->
                  </div>
               </div>
            </div><!-- end deal-of-the-day -->
         <!-- end test -->
          <!-- top-product-area-end -->

         <!-- ====== product-area-start================================ -->
         <div class="product-area home2-product-area pt-80">
            <div class="container">
               <div class="product-content single-product-tab-content">
                  <div class="row">
                     <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                        <div class="section-title text-center">
                           <span class="theme-color d-block pb-2"><?php the_field('featured_popular_product');?></span>
                           <h3><?php the_field('popular_products');?></h3>
                        </div>
                        <!-- /section-title -->
                     </div>
                     <!-- /col -->
                  </div>
                  <!-- /row -->
                  <!-- test -->
                  <div class="popular-wrp mt-30">
                     <div class="row">
                        <?php
                        $args = array(
                       'post_type'  => array( 'product' ),
                       'meta_key'   => 'total_sales',
                       'orderby'    => 'meta_value_num',
                       'order'      => 'desc',
                       'posts_per_page'      => 4
                     );

                     $popular_products = new WP_Query( $args );
                     if($popular_products->have_posts() ) :
                     while ( $popular_products->have_posts() ) : $popular_products->the_post();

                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $price_sale = get_post_meta( get_the_ID(), '_sale_price', true);
                     ?>
                        <div class="col-md-3">
                           <div class="s-p-wrapper">
                              <div class="single-product mb-35">
                                 <div class="single-product-img position-relative over-hidden">
                                    <div class="single-product-label position-absolute theme-bg text-center px-2 transition-3 z-index1">
                                    <?php
                                        if ( $product->is_type( 'simple' ) ) {
                                          $max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
                                       } elseif ( $product->is_type( 'variable' ) ) {
                                          $max_percentage = 0;
                                          foreach ( $product->get_children() as $child_id ) {
                                             $variation = wc_get_product( $child_id );
                                             $price = $variation->get_regular_price();
                                             $sale = $variation->get_sale_price();
                                             if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
                                             if ( $percentage > $max_percentage ) {
                                                $max_percentage = $percentage;
                                             }
                                          }
                                       }

                                       ?>
                                        <?php if( isset($max_percentage) && $max_percentage > 0 ) { ?>
                                       <span class="white text-uppercase d-block"><span><?= round( $max_percentage ); ?>% </span>off</span>
                                       <?php } ?>
                                    </div>
                                    <!-- /product-label -->
                                    <a class="position-relative d-block" href="<?php the_permalink(); ?>" tabindex="0">

                                   <?php  if(has_post_thumbnail()){ ?>
                                    <img class="width100 height100" src="<?php the_post_thumbnail_url('home_big-image'); ?>" alt="<?php the_title(); ?>">
                                  <?php } else { ?>
                                     <img class="width100 height100" src="<?php echo get_template_directory_uri(); ?>/images/product1.jpg" alt="
                                    product">
                                  <?php } ?>
                                    <ul class="product-action d-flex position-absolute transition-3">
                                       <li data-toggle="tooltip" data-placement="top">
                                         <a href="<?php the_permalink();?>" data-quantity="1" class="button text-center mb-10 white-bg primary-color d-block">View Details</a>
                                       </li>


                                    </ul>
                                    <!-- /view-btn -->
                                 </div>
                                 <!-- /single-product-img -->
                                 <div class="single-product-info position-relative mt-25 text-center">
                                    <h6 class="p-heading"><a href="<?php the_permalink(); ?>" tabindex="0"><?php the_title(); ?></a></h6>
                                    <ul class="single-product-price d-flex transition-3">
                                      <li>
                                      <?php if ( $price_html = $product->get_price_html() ) : ?>
                                          <span class="price"><?php echo $price_html; ?></span>
                                       <?php endif; ?>

                                      </li>
                                    </ul>
                                    <!-- /single-product-price -->
                                    <div class="rating">

                                        <?php echo wc_get_rating_html($product->get_average_rating() ); ?>
                                    </div>
                                 </div>
                              </div>
                              <!-- /single-product -->
                           </div>
                        </div>
                     <?php endwhile; endif; wp_reset_query(); ?>
                     </div>
                  </div>
                  <!-- test end -->
                  <div class="text-center">
                     <a data-animation="fadeInUp" data-delay="1.7s" href="<?php bloginfo('url'); ?>/shop/" class="web-btn black-btn d-inline-block mt-2 text-uppercase position-relative over-hidden pl-30 pr-30 pt-15 pb-15">view all<span class="pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>
               </div>
               <!-- /product-content -->
            </div>
            <!-- /container -->
         </div>

         <!-- ====== product-area-start================================ -->


         <div class="product-area best-seller-product-area pt-80">
            <div class="container">
               <div class="product-content single-product-tab-content">
                  <div class="row">
                     <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pb-15">
                        <div class="section-title text-center">
                           <span class="theme-color d-block pb-2"><?php the_field('regular_product');?></span>
                           <h3><?php the_field('best_seller_products');?></h3>
                        </div>
                        <!-- /section-title -->
                     </div>
                     <!-- /col -->
                  </div>
                  <!-- /row -->
                  <div class="row mt-30">
                     <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12 pr-lg-0 pl-lg-0">
                        <div class="home2-best-product-left-active wow slideInLeft">
                           <?php
                        $args = array(
                       'post_type'  => array( 'product' ),
                       'meta_key'   => 'total_sales',
                       'orderby'    => 'popularity',
                       'order'      => 'desc',
                       'posts_per_page'      => 2
                     );

                     $popular_products = new WP_Query( $args );
                     if($popular_products->have_posts() ) :
                     while ( $popular_products->have_posts() ) : $popular_products->the_post();

                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $price_sale = get_post_meta( get_the_ID(), '_sale_price', true);
                     ?>
                           <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">

                              <div class="s-p-wrapper">
                                 <div class="single-product mb-35">
                                    <div class="single-product-img position-relative over-hidden">
                                       <a class="position-relative d-block" href="<?php the_permalink();?>">
                                       <?php  if(has_post_thumbnail()){ ?>
                                    <img class="width100 height100" src="<?php the_post_thumbnail_url('home_big-image'); ?>" alt="<?php the_title(); ?>">
                                  <?php } else { ?>
                                     <img class="width100 height100" src="<?php echo get_template_directory_uri(); ?>/images/product1.jpg" alt="
                                    product">
                                  <?php } ?>
                                       </a>
                                       <ul class="product-action d-flex position-absolute transition-3">
                                       <li data-toggle="tooltip" data-placement="top">
                                          <a href="<?php the_permalink();?>" data-quantity="1" class="button text-center mb-10 white-bg primary-color d-block">View Details</a>
                                       </li>


                                    </ul>
                                       <!-- /view-btn -->
                                    </div>
                                    <!-- /single-product-img -->
                                    <div class="single-product-info position-relative mt-25">
                                       <h6 class="p-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                                       <ul class="single-product-price d-flex transition-3">
                                          <li>
                                             <?php if ( $price_html = $product->get_price_html() ) : ?>
                                          <span class="price"><?php echo $price_html; ?></span>
                                       <?php endif; ?>


                                          </li>
                                       </ul>
                                       <!-- /single-product-price -->
                                    </div>
                                 </div>
                                 <!-- /single-product -->
                              </div>


                           </div>
                        <?php endwhile;endif;wp_reset_query();?>
                           <!-- /col -->

                           <!-- /col -->
                        </div>
                        <div class="home2-best-product-left-active wow slideInLeft">
                           <?php
                        $args = array(
                       'post_type'  => array( 'product' ),
                       'meta_key'   => 'total_sales',
                       'orderby'    => 'popularity',
                       'order'      => 'desc',
                       'offset'     => 2,
                       'posts_per_page'      => 2
                     );

                     $popular_products = new WP_Query( $args );
                     if($popular_products->have_posts() ) :
                     while ( $popular_products->have_posts() ) : $popular_products->the_post();

                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $price_sale = get_post_meta( get_the_ID(), '_sale_price', true);
                     ?>
                           <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">

                              <div class="s-p-wrapper">
                                 <div class="single-product mb-35">
                                    <div class="single-product-img position-relative over-hidden">
                                       <a class="position-relative d-block" href="<?php the_permalink();?>">
                                       <?php  if(has_post_thumbnail()){ ?>
                                    <img class="width100 height100" src="<?php the_post_thumbnail_url('home_big-image'); ?>" alt="<?php the_title(); ?>">
                                  <?php } else { ?>
                                     <img class="width100 height100" src="<?php echo get_template_directory_uri(); ?>/images/product1.jpg" alt="
                                    product">
                                  <?php } ?>
                                       </a>
                                       <ul class="product-action d-flex position-absolute transition-3">
                                       <li data-toggle="tooltip" data-placement="top">
                                          <a href="<?php the_permalink();?>" data-quantity="1" class="button text-center mb-10 white-bg primary-color d-block">View Details</a>
                                       </li>


                                    </ul>
                                       <!-- /view-btn -->
                                    </div>
                                    <!-- /single-product-img -->
                                    <div class="single-product-info position-relative mt-25">
                                       <h6 class="p-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                                       <ul class="single-product-price d-flex transition-3">
                                          <li>
                                             <?php if ( $price_html = $product->get_price_html() ) : ?>
                                          <span class="price"><?php echo $price_html; ?></span>
                                       <?php endif; ?>


                                          </li>
                                       </ul>
                                       <!-- /single-product-price -->
                                    </div>
                                 </div>
                                 <!-- /single-product -->
                              </div>


                           </div>
                        <?php endwhile;endif;wp_reset_query();?>
                           <!-- /col -->

                           <!-- /col -->
                        </div>
                     </div>

                     <!-- /col -->
                     <?php
                        $args = array(
                       'post_type'  => array( 'product' ),
                       'meta_key'   => 'total_sales',
                       'orderby'    => 'popularity',
                       'order'      => 'desc',
                       'offset'     => 4,
                       'posts_per_page'      => 1
                     );

                     $popular_products = new WP_Query( $args );
                     if($popular_products->have_posts() ) :
                     while ( $popular_products->have_posts() ) : $popular_products->the_post();

                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                        $price_sale = get_post_meta( get_the_ID(), '_sale_price', true);
                     ?>
                     <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                        <div class="best-product-right wow slideInRight position-relative mb-90 over-hidden">
                           <a href="<?php the_permalink();?>" class="d-block">
                              <?php  if(has_post_thumbnail()){ ?>
                                    <img class="img-zoom transition-3 width100 height100" src="<?php the_post_thumbnail_url('list_image'); ?>" alt="<?php the_title(); ?>">
                                  <?php } else { ?>
                                     <img class="img-zoom transition-3 width100 height100" src="<?php echo get_template_directory_uri(); ?>/images/product1.jpg" alt="
                                    product">
                                  <?php } ?>
                           </a>
                           <div class="single-product-info best-product-right-content position-absolute mt-0">
                              <h6 class="p-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                              <ul class="single-product-price d-flex justify-content-center transition-3">
                                 <li>
                                    <?php if ( $price_html = $product->get_price_html() ) : ?>
                                          <span class="price"><?php echo $price_html; ?></span>
                                       <?php endif; ?>
                                 </li>
                              </ul>
                              <!-- /single-product-price -->
                           </div>
                        </div>
                     </div>
                  <?php endwhile;endif;wp_reset_query();?>
                     <!-- /col -->
                  </div>
                  <!-- /row -->
               </div>
               <!-- /product-content  -->
            </div>
            <!-- /container -->
         </div>
         <!-- product-area-end  -->
         <!-- New Arrival -->
         <div class="product-off-banner product-off-banner2 product-off-banner3 product-off-banner4 over-hidden new-arrive">
                <div class="container-fluid px-0">
                    <div class="row">
                          <?php
                            if( have_rows('new_arrival_product_wrapper') ):

                            while ( have_rows('new_arrival_product_wrapper') ) : the_row();?>


                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="banner banner-overlay transition-3 position-relative over-hidden wow slideInUp">
                                <a href="<?php the_sub_field('_new_arrival_product_background_image_url');?>" class="d-block">
                                    <img class="img-zoom transition-3 w-100 h-100" src="<?php the_sub_field('new_arrival_product_background_image');?>" alt="">
                                </a>
                                <div class="banner-content banner-content-s-4 position-absolute transfY transfY50 w-100 pl-130">
                                    <span class="pro-tittle theme-color d-none d-sm-block mb-15"><?php the_sub_field('new_arrival_product_upper_tagline');?></span>
                                    <h4 class="mb-20">
                                        <a href="<?php the_sub_field('new_arrival_product_link');?>"><?php the_sub_field('new_arrival_product_tagline');?></a>
                                    </h4>
                                    <p class="d-none d-xl-block"><?php the_sub_field('new_arrival_product_sub_tagline');?></p>
                                    <a href="<?php the_sub_field('new_arrival_product_button_url');?>" class="web-btn primary-color d-inline-block text-uppercase gray-border2 position-relative over-hidden pl-20 pr-20 pt-2 pb-2 mt-10"><?php the_sub_field('new_arrival_product_button_text');?><span class="pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                </div>
                            </div>
                        </div><!-- /col -->
                            <?php endwhile;endif;wp_reset_query();?>




                    </div><!-- /row -->
                </div><!-- /container -->
            <div></div></div>
         <!-- ====== blog-area-start=============================================== -->
         <div class="blog-area mt-75 pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                     <div class="section-title text-center">
                        <span class="theme-color d-block pb-2">Popular News</span>
                        <h3>Latest News & Blog</h3>
                     </div>
                     <!-- /section-title -->
                  </div>
                  <!-- /col -->
               </div>
               <!-- /row -->
               <div class="row news-post-active mt-40">
                  <?php
                  $catpost = new WP_Query();
                  $catpost->query('showposts=6');
                  while($catpost->have_posts()) : $catpost->the_post();?>
                  <div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
                     <div class="single-blog wow slideInUp">
                        <div class="blog-img over-hidden transition-3">
                           <a href="<?php the_permalink();?>">
                              <?php  if(has_post_thumbnail()){ ?>
                                    <img class="img-zoom transition-3 width100 height100" src="<?php the_post_thumbnail_url('blogs_image'); ?>" alt="<?php the_title(); ?>">
                                  <?php } else { ?>
                                     <img class="img-zoom width100 height100" src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="blog">
                                  <?php } ?>

                           </a>
                        </div>
                        <div class="single-blog-content bg-white pt-25">
                           <ul class="single-blog-info d-flex mb-10">
                              <li class="date pr-25">
                                 <a href="javascript:void(0)" class="text-uppercase gray-color2">
                                 <span class="pr-1"><i class="fal fa-calendar-alt"></i></span>
                                 <span> <?php the_time('d F,Y'); ?></span>

                                 </a>
                              </li>

                           </ul>
                           <h5><a class="pb-2 d-block" href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
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
                           <p class="pb-1"><?php echo wp_trim_words( get_the_content(), 15, '...' );?>
                           </p>
                           <ul class="blogger d-flex align-items-center">
                              <li>
                                 <span class="primary-color"><span class="red-color">By</span> <?php the_author(); ?></span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- /col -->
                  <?php endwhile;wp_reset_query();?>
               </div>
               <!-- /row -->

               <!--btn added-->
                 <div class="text-center mt-50">
                     <a data-animation="fadeInUp" data-delay="1.7s" href="<?php the_field('news_blog_button_url');?>" class="web-btn black-btn d-inline-block mt-2 text-uppercase position-relative over-hidden pl-30 pr-30 pt-15 pb-15"><?php the_field('news_blog_button_text');?><span class="pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                  </div>

            </div>
            <!-- /container -->
         </div>
         <!-- blog-area-end -->

         </div>

      </main>



<?php
get_footer(); ?>
