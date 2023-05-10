
			<!--.footer_wrap -->
			<footer class="footer_wrap widget_area scheme_original">
               <!--.footer_wrap_inner -->
                <div class="footer_wrap_inner widget_area_inner">
                   <!--.content_wrap -->
                    <div class="content_wrap">
                        <aside id="lovestory_widget_socials-2" class="widget_number_1 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="<?php bloginfo('url');?>"><img src="<?php the_field('footer_logo','option'); ?>" class="logo_main" alt="" style="max-height: 110px;"></a>
                                </div>
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                                    <div class="sc_socials_item"><a href="<?php the_field('footer_facebook_url','option'); ?>" class="social_icons social_facebook"><span class="icon-facebook"></span></a>
                                    </div>
                                    <div class="sc_socials_item"><a href="<?php the_field('footer_twitter_url','option'); ?>" class="social_icons social_twitter"><span class="icon-twitter"></span></a></div>
                                    <div class="sc_socials_item"><a href="<?php the_field('footer_instagram_url','option'); ?>" class="social_icons social_instagramm"><span class="icon-instagramm"></span></a></div>
                                    <div class="sc_socials_item"><a href="<?php the_field('footer_google_plus_url','option'); ?>" class="social_icons social_gplus"><span class="icon-gplus"></span></a></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- end .content_wrap -->
                </div>
                <!-- end .footer_wrap_inner -->
            </footer>
            <!-- end .footer_wrap -->
				 
				 
			<div class="copyright_wrap copyright_style_text  scheme_original">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="copyright_text">
                            <?php the_field('footer_copyright_information','option'); ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>	
		<!-- end .page_wrap -->
	</div>		
   <!-- end .body_wrap -->
    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
    
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/jquery-3.1.1.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/custom/core.init.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/photostack/modernizr.min.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/superfish.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/essential-grid/public/assets/js/lightbox.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/essential-grid/public/assets/js/jquery.themepunch.essential.min.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/js/custom/_main.js"></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/custom/core.utils.js'></script>
    
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/custom/template.init.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/custom/template.shortcodes.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/magnific/jquery.magnific-popup.min.js'></script>
    <!-- <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/core.messages/core.messages.js'></script>  -->
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/testimonialcarousel/slick/slick.min.js'></script> 
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/coverslider/js/init.min.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/swiper/swiper.js'></script>
    <script type='text/javascript' src='<?php echo bloginfo('template_directory');?>/js/vendor/isotope.pkgd.min.js'></script>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            //contact form error
            $('html, body').animate({
                scrollTop: $(".gform_validation_error").parent().offset().top
            },2000);

            $('html, body').animate({
                scrollTop: $("#gform_2_validation_container").parent().offset().top
            },2000);

            $('html, body').animate({
                scrollTop: $("#gform_confirmation_message_2").parent().offset().top
            },2000);

            $('html, body').animate({
                scrollTop: $("#gform_confirmation_message_1").parent().offset().top
            },2000);
            
    //         document
    // // .querySelector("#gform_1_validation_container")
    // // .scrollIntoView({ behavior: "smooth" });
        });
    </script>
   <?php wp_footer();?>
</body>
</html>