<?php 
/*Template Name:gallery page*/
get_template_part('template/header');?>

    <div id="content-block">
         <div class="fixed-background m-bg" style="background-image: url('<?php the_field('gallery_image'); ?>');">
            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url('<?php the_field('gallery_border_image'); ?>');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align m-align">
                                <h1 class="h1 light">
                                    <?php the_field('gallery_banner_text'); ?>
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
                <!--<div class="col-md-12 text-center">-->
                <!--    <article class="sa">-->
                <!--        <h3>Our Works</h3>-->
                <!--        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium. </p>-->
                <!--    </article>-->
                <!--    <div class="empty-space col-xs-b25 col-sm-b50"></div>-->  
                <!--</div>-->
                <div class="col-md-12 text-center">
                    <div class="sorting-menu">
                        <div class="title">All</div>
                        <div class="toggle">
                           <?php $count_posts = wp_count_posts( 'galleries' )->publish; ?>
                            <a class="active" data-filter="*"><span class="text">All</span><span class="number"><?= $count_posts; ?></span></a>
                            <?php 

                             $gargs = array(
                               'taxonomy' => 'gallerytypes',
                               'orderby' => 'name',
                               'order'   => 'ASC',
                               'hide_empty' => 1,
                             );

                           $galerycats = get_categories($gargs);

                           if(count($galerycats) > 0){
                           foreach( $galerycats as $cat) {
                        ?>

                            <a data-filter=".<?= $cat->slug; ?>"><span class="text"><?= $cat->name; ?></span><span class="number"><?= $cat->count; ?></span></a>
                        <?php } } ?>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            
           

            <div class="sorting-container portfolio-1">
                <div class="grid-sizer w33"></div>
             <?php 

               if(count($galerycats) > 0):
               foreach( $galerycats as $cat):

                $args = array(
                        'post_type' => 'galleries',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'gallerytypes',
                                'field' => 'slug',
                                'terms' => $cat->slug,
                            )
                        ),
                        'posts_per_page' => -1
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    if(has_post_thumbnail()):
            ?>
                <div class="sorting-item w33 <?= $cat->slug; ?>">
                    <div class="portfolio-preview-1">
                        <a href="<?php the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" class="lightbox">
                            <img class="preview" src="<?php the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php the_title(); ?>" />
                            <span class="valign-middle portfolio-hover-1">                                
                                <span class="valign-middle-content">
                                    <span class="title h4"><?php the_title(); ?></span>
                                    <!-- <span class="description sa dark small">Branding</span> -->
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

            <?php endif; endwhile; ?>

            <?php endforeach; endif; ?>
            </div>
    
        </div>


       
    <?php get_footer();?>