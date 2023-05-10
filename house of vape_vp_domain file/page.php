<?php get_header();?>       
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
        
    				
	
   <div class="sec-pdgn des_cls">
       
          <div class="container ">  
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <?php if ( have_posts() ) : while (have_posts()) : the_post();?>    
                    <?php the_content();?>

                     <?php endwhile; else: ?>
                     <h6>Not Found!</h6>
                     <?php endif; ?>   
                </div>
        </div>
    </div> 
</div>
  <?php get_footer();?>       