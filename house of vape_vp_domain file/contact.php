<?php 
/*Template Name:Contact Page*/
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
<!-- ====== contact-form-area-start=============================================== --> 
            <div class="contact-form-area over-hidden pt-30">
                <div class="container">
                    <div class="row">                     
                        <div class="col-xl-4  col-lg-4  col-md-12  col-sm-12 col-12">
                            <div class="contact-form-left mt-55 pr-40">
                                <div class="section-title text-left pb-20">
                                    <h4 class="dark-black-color pb-3 d-block"><?php the_field('section_one_title'); ?></h4>
                                       <?php the_field('section_one_title_copy'); ?>
                                </div><!-- /section-title -->
                                <ul class="social-link mt-20">
                                    <li class="primary-color d-dlock d-sm-inline-block pr-15">
                                        <span><?php the_field('section_one_social_link_title'); ?></span>
                                    </li>
                                    <?php
                                       $i=1; 
                                       if( have_rows('section_one_social_media_item') ):
                                        // Loop through rows.
                                        while( have_rows('section_one_social_media_item') ) : the_row();
                                    ?>
                                    <li class="d-inline-block">
                                        <a class="<?php if($i==1){echo"active";}?> primary-color text-center pr-0 d-inline-block transition-3" href="<?php the_sub_field('social_media_link'); ?>" target="_blank"><?php the_sub_field('font_awesome_icon_tag'); ?></a>
                                    </li>
                                <?php $i++; endwhile; endif; wp_reset_query(); ?> 
                                </ul>
                            </div>
                        </div><!-- /col -->
                        <div class="col-xl-8  col-lg-8  col-md-12 col-sm-12 col-12">
                            <div class="contact-form-right mt-55">
                                 <h4 class=" text-left dark-black-color pb-15 d-block">Write to us</h4>
                                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'); ?>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- contact-form-area-end -->
            
            <!-- ====== contact-information-area-start=============================================== --> 
            <div class="contact-information-area position-relative mt--35">
                <div class="container">
                    <div class="row theme-bg no-gutters contact-information-height align-items-center pt-55 pb-30">
                        <?php
                        $i=1; 
                        if( have_rows('section_two_contact_item') ):
                        // Loop through rows.
                        while( have_rows('section_two_contact_item') ) : the_row();
                      ?>

                        <div class="col-xl-4  col-lg-4  col-md-6  col-sm-12 col-12">
                            <ul class="contact-address text-center text-md-left transition-3 d-md-flex justify-content-center align-items-center width100 mb-30">
                                <li>
                                    <span class="contact-icon theme-color transition-3 white-bg text-center d-inline-block  mr-20"><?php the_sub_field('font_awesome_icon_tag'); ?></span>
                                </li>
                                <li>
                                    <?php the_sub_field('address_content'); ?>
                                </li>
                            </ul>  
                        </div><!-- /col -->
                     <?php $i++; endwhile; endif; wp_reset_query(); ?>
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- contact-information-area-end -->

            <!-- ====== contact-map-area-start=============================================== --> 
            <div class="contact-map w-100 mb--6">
                <div class="container-fluid px-0">
                 <?php the_field('section_two_map'); ?>
                </div>
            </div>
            <!-- contact-map-area-end  -->

<?php get_footer(); ?>