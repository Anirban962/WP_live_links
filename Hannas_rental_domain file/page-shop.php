<?php get_template_part('template/header'); /*Template Name:Shop Page*/ ?>
	<div id="content-block">
         <div class="fixed-background m-bg" style="background-image: url('<?php the_field('rental_catalog_banner_image');?>');">
            <div class="banner-shortcode">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align m-align" style="height:210px;">
                                <h1 class="h1 light">
                                	<?php the_field('rental_catalog_banner_title');?>
                                </h1>
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
                    <?php echo do_shortcode('[rentle_shop shop="hannasrentals"]');?>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
        </div>
<?php get_footer();?>