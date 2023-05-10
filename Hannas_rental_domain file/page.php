<?php
// different header 
get_template_part('template/header');

?>

 <div id="content-block">
         <div class="fixed-background" style="background-image: url('<?php the_post_thumbnail_url('breadcumb_image');?>');">
            <div class="banner-shortcode">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align" style="height:210px;">
                                <h1 class="h1 light"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <div class="container">
        <div class="empty-space col-xs-b40 col-sm-b80"></div>
            <div class="row">
                <div class="col-md-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                   <?php endwhile; else: ?>
                <p><?php _e('Post Not Found!'); ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  get_footer(); ?>