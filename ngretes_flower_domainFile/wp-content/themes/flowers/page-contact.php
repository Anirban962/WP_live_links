<?php /*Template Name: Contact Page*/
get_header();
?>
   
<div class="top_panel_title title_present">
                <div class="top_panel_title_inner title_present bg-breadcrumbs" style="background: url(<?php the_field('contact_page_banner_background_image'); ?>);">  
                    <div class="content_wrap">
                        <h1 class="page_title"><?php the_field('contact_page_banner_title'); ?></h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="<?php echo bloginfo('url'); ?>">HOME</a>
                            <span class="breadcrumbs_delimiter"></span>
                            <span class="breadcrumbs_item current"><?php the_title(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page_content_wrap page_paddings_no scheme_original">      
                <div class="content">
                   <!-- .post_item_single .page .type-page  -->
                    <article class="post_item_single page type-page">
                       <!-- .post_content -->
                        <div class="post_content">
                           <section class="no-col-padding">
                                <div class="container-fluid">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_1">
                                            <div class="column-inner">
                                                <div class="m_wrapper google-map-wrap">
                                                    <?php the_field('contact_page_google_map'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                             
                            <section class="no-col-padding">
                                <div class="container-fluid sc_home-bg-type-b" style="background-image: url(<?php the_field('contact_page_feedback_background_image'); ?>) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;">    
                                    <div class="content_container">
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1">
                                                <div class="column-inner">
                                                    <div class="m_wrapper">
                                                        <div class="sc_form_wrap">
                                                            <div class="sc_form sc_form_style_form_1 aligncenter sc_home-param-type-g">
                                                                <h3 class="sc_form_title sc_item_title sc_item_title_without_descr"><?php the_field('contact_page_feedback_title');?></h3>
                                                                <h6 class="sc_form_subtitle sc_item_subtitle"><?php the_field('contact_page_feedback_tagline');?></h6>
                                                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]');?>
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
                    <!-- end .post_item_single .page .type-page  -->
                </div>
                <!-- end .content> -->
            </div>
            <!-- end .page_content_wrap> -->
            
<!--.contacts_wrap -->
            <footer class="contacts_wrap scheme_original">
               <!--.contacts_wrap_inner -->
                <div class="contacts_wrap_inner">
                   <!--.content_wrap -->
                    <div class="content_wrap">
                        <div class="contacts_address">
                            <address class="address_right address_block">
                                <span class="sc_icon icon-icon4"></span>
                                <p class="address_title"><?php the_field('footer_address_tagline','option'); ?></p><p><?php the_field('footer_address_information','option'); ?><br></p>            
                            </address><address class="address_center phone_block">
                                <span class="sc_icon icon-icon5"></span>
                                <p class="address_title"><?php the_field('footer_phone_tagline','option'); ?></p><p><a href="tel:+<?php the_field('footer_phone_number','option'); ?>" style="color: #928b84;"><?php the_field('footer_phone_number','option'); ?></a></p>              
                            </address><address class="address_left email_block">
                                <span class="sc_icon icon-icon6"></span>
                                <p class="address_title"><?php the_field('footer_email_tagline','option'); ?></p><p><a href="mailto:<?php the_field('footer_email_id','option'); ?>" style="color: #928b84;"><?php the_field('footer_email_id','option'); ?></a></p>    
                            </address>
                        </div>
                    </div>  
                    <!-- end .content_wrap -->
                </div>  
                <!-- end .contacts_wrap_inner -->
            </footer>
            <!-- end .contacts_wrap -->

<?php get_footer(); ?>