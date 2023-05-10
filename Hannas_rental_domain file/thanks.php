<?php get_template_part('template/header');/*Template Name:Thanks Page*/?>

<div id="content-block">
           

    <div class="fixed-background" style="background-image: url('<?php the_field('banner_image');?>');">

        <div class="banner-shortcode">
            <div class="banner-frame border-image" style="border-image-source: url('<?php the_field('background_image');?>');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="align">
                            <h1 class="h1 light"><?php the_field('title');?></h1>
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
                        <h3><?php the_field('description');?></h3>
                        <!-- <p>Serving all of Southern California</p> -->
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
    </div>        
</div>    
<?php get_footer();?>