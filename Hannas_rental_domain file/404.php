<?php

get_template_part('template/header');

?>

<div id="content-block">    

    <div class="fixed-background" style="background-image: url('<?php the_field('banner_image','option'); ?>');">

        <div class="banner-shortcode">
            <div class="banner-frame border-image" style="border-image-source: url('<?php the_field('banner_rectangle_image', 'option'); ?>');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="align">
                            <h1 class="h1 light"><?php the_field('title','option'); ?></h1>
                           <div class="h3 light"><span class="ht-1"><?php the_field('short_description','option'); ?></span></div>
                           <a class="button light" href="<?php bloginfo('url'); ?>"><?php the_field('button_text', 'option'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php  get_footer(); ?>