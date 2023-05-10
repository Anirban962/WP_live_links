<?php 

get_template_part('template/header'); /*Template Name:Contact Page*/?>
    <div id="content-block">
         <div class="fixed-background m-bg" style="background-image: url('<?php the_field('contact_banner_background_image');?>');">
            <div class="banner-shortcode">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align m-align" style="height:210px;">
                                <h1 class="h1 light"><?php the_field('contact_banner_heading');?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="empty-space col-xs-b40 col-sm-b80"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>
                            <?php the_field('get_a_quote_heading');?>
                        </h3>
                        <p><?php the_field('get_a_quote_sub_heading');?></p>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-shortcode">
                        <h6 class="h6"><?php the_field('telephone_text');?> :</h6>
                        <div class="sa"><a href="tel:<?php the_field('telephone_number');?>"><?php the_field('telephone_number');?></a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-shortcode">
                        <h6 class="h6"><?php the_field('address_text');?> :</h6>
                        <div class="sa"><?php the_field('address_link');?></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-shortcode">
                        <h6 class="h6"><?php the_field('email_text');?> :</h6>
                        <div class="sa"><a href="mailto:<?php the_field('email_link');?>"><?php the_field('email_link');?></a></div>
                    </div>
                </div>
            </div>
           <div class="map-inst">
            <?php the_field('map'); ?>
           </div>

            <div class="empty-space col-xs-b45 col-sm-b90"></div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
                </div>
            </div>
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>Our Instagram</h3>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                    <div class="row m30">
                        <?php echo do_shortcode('[elfsight_instagram_feed id="1"]');?>
                        
                        <!-- <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="thumbnail-shortcode-2 mouseover-1" href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="thumbnail-shortcode-2 mouseover-1" href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="thumbnail-shortcode-2 mouseover-1" href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="thumbnail-shortcode-2 mouseover-1" href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="thumbnail-shortcode-2 mouseover-1" href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="thumbnail-shortcode-2 mouseover-1" href="#">
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                                <img src="<?php echo bloginfo('template_directory');?>/img/thumbnail-50.jpg" alt="" />
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="empty-space col-xs-b15 col-sm-b60"></div>
        </div>
<?php get_footer();?>