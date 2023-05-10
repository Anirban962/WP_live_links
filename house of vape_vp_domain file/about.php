<?php get_header(); /*Template Name:About Page*/?>
      <main>

            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area over-hidden">
                <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="<?php the_field('section_one_banner');?>">
                    <div class="slider-shape position-absolute z-index1">
                        <span class="slider-bg-round d-block"></span>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <div class="page-title b-l text-center position-relative z-index1">
                                <h2 class="text-capitalize font600 mb-10"><?php the_title();?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                    <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active text-capitalize" aria-current="page"><?php the_title();?></li>
                                    </ol>
                                </nav>
                            </div><!-- /page title -->
                        </div><!-- /col -->
                    </div>
                </div><!-- /single-slider -->
            </div>
            <!-- slider-area-end  -->
           
            <!-- ====== about-area-start=============================================== --> 
            <div class="about-area over-hidden pt-90">
                <div class="container">
                    <div class="row justify-content-center">                     
                        <div class="col-xl-6 col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="about-left mb-90 pr-20">
                                <div class="about-title text-left pb-20">
                                    <h2 class="theme-color pb-20 d-block font600"> <?php the_field('section_two_tagline');?> </h2>
                                    <h3 class="font500 mb-50"><?php the_field('section_two_title');?></h3>
                                    <div class="about-quote">
                                        <blockquote>
                                            <p><?php the_field('section_two_quote');?></p>
                                        </blockquote>
                                    </div>
                                    <p><?php the_field('section_two_content');?>
                                    </p>
                                    
                                </div><!-- /section-title -->
                               

                            </div>
                        </div><!-- /col -->
                        <div class="col-xl-5  col-lg-6  col-md-12 col-sm-12 col-12">
                            <div class="about-right mb-90">
                                <img src="<?php the_field('section_two_image');?>" alt="about">
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- about-area-end -->

            <!-- ====== about-video-area-start=============================================== --> 
            <div class="product-off-banner product-off-banner2 product-off-banner3 product-off-banner4 over-hidden new-arrive">
                <div class="container-fluid px-0">
                    <div class="row">
                     <?php
                     if( have_rows('section_three_parts') ):
                                                  // loop through the rows of data
                      while ( have_rows('section_three_parts') ) : the_row();?>
                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="banner banner-overlay transition-3 position-relative over-hidden wow slideInLeft" >
                                <a href="#" class="d-block">
                                    <img class="img-zoom transition-3 w-100 h-100" src="<?php the_sub_field('banner_image');?>" alt="<?php the_sub_field('short_title');?>">
                                </a>
                                <div class="banner-content banner-content-s-4 position-absolute transfY transfY50 w-100 pl-130">
                                    <span class="pro-tittle theme-color d-none d-sm-block mb-15"><?php the_sub_field('short_title');?></span>
                                    <h4 class="mb-20">
                                        <?php the_sub_field('title');?>
                                    </h4>
                                    <p class="d-none d-xl-block"><?php the_sub_field('tagline');?></p>
                                    <a href="<?php the_sub_field('button_url');?>" class="web-btn primary-color d-inline-block text-uppercase gray-border2 position-relative over-hidden pl-20 pr-20 pt-2 pb-2 mt-10"><?php the_sub_field('button_text');?> <span class="pl-2"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                </div>
                            </div>
                        </div><!-- /col -->
                     <?php endwhile;endif;wp_reset_query();?>   
                    </div><!-- /row -->
                </div><!-- /container -->
            <div></div></div>
            <!-- about-video-area-end -->
            
            <!-- ====== about-ser-information-area-start=============================================== --> 
            <div class="about-quote-area pt-90 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 col-md-12 col-12">
                            <div class="about-quote-wrapper-2">
                                <blockquote>
                                    <img src="<?php the_field('section_four_image');?>" alt="about">
                                    <p><?php the_field('section_four_title');?></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                            <div class="about-quote-content">
                                <p><?php the_field('section_four_description');?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-ser-information-area-end -->

            <!-- ====== testimonial-area-start ========================================= --> 
            <div class="testimonial-area testimonial-bg pt-90 pb-80" data-background="<?php the_field('testimonial_banner');?>">
                <div class="container">
                    <div class="testimonial-active">
                        <?php
                     if( have_rows('testimonial_parts') ):
                                                  // loop through the rows of data
                      while ( have_rows('testimonial_parts') ) : the_row();?>
                        <div class="row align-items-center pb-30">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                <div class="user-comment text-center">
                                    <div class="testi-author">
                                        <img class="d-inline-block mb-20" src="<?php the_sub_field('image');?>" alt="about">
                                        <h6 class="author-name font500 pb-1 text-white"><?php the_sub_field('name');?>
                                        <!-- <span class="author-p font400 d-block pt-2">Ceo &amp; Co</span></h6> -->
                                    </div>
                                    <div class="quit text-white mt-20"><i class="fas fa-quote-right"></i></div>
                                        <blockquote class="testimonials-text mt-25 pr-80 pl-80 text-white font300">
                                        <?php the_sub_field('content');?> </blockquote>
                                 </div>
                            </div><!-- /col -->
                        </div><!-- /row -->
                     <?php endwhile;endif;wp_reset_query();?>
                        
                    </div>
                </div><!-- /container -->
            </div>
            <!-- testimonial-area-end  -->

            <!-- ====== subscribe-area-start ========================================= -->
            <div class="subscribe-area pt-75 pb-25 wow slideInUp" data-background="<?php the_field('subscribe_banner');?>">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5  col-lg-4  col-md-12  col-sm-12 col-12">
                            <div class="section-title  mb-50">
                                <span class="theme-color d-block pb-2"><?php the_field('upper_title');?></span>
                                <h3><?php the_field('title');?></h3>
                            </div><!-- /section-title -->
                        </div><!-- /col -->
                        <div class="col-xl-7  col-lg-8  col-md-12  col-sm-12 col-12">
                            <div class="subscribe-form-area subscribe-form-area1 mb-50">
                                <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');?>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- subscribe-area-end  -->

            <!-- ====== service-area-start ========================================= -->

        </main>
      <!-- ====== footer-area-start ============================================ -->
      <?php get_footer();?>