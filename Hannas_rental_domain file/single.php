<?php
get_template_part('template/header');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

    <div id="content-block">

        <div class="fixed-background m-bg" style="background-image: url('https://hannasrentals.com/wp-content/uploads/2023/01/about-1.jpg');">

            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url('https://hannasrentals.com/wp-content/uploads/2023/01/about2.jpg');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align m-align">
                                <h3 class="h1 light">Our Blog</h3>
                                <p><?php the_title();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="empty-space col-xs-b40 col-sm-b80"></div>

         

            <div class="row">
                <div class="col-sm-9 col-xs-b30 col-sm-b0">
                    <h2 class="h4 col-xs-b15"><?php the_title();?> </h2>
                    <div class="row col-xs-b15">
                        <div class="col-sm-12">
                            <div class="sa xsmall grey"><?php the_time('F'); ?> <?php the_time('d'); ?> / <?php the_time('Y'); ?> by <?php the_author(); ?></div>
                        </div>
                        
                    </div>
                    <div class="sa">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php the_post_thumbnail_url('blog_image');?>" alt="<?php the_title();?>" />
                            
                            <?php } else { ?>
                            <img src="https://hannasrentals.com/wp-content/uploads/2023/03/dummypic.jpeg" alt="<?php the_title();?>" />
                            
                             <?php } ?>
                        <?php the_content();?>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-b30 col-sm-b0">
                            <div class="tags-wrapper">
                                <div class="title h6">Tags</div>
                                <?php
                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                      
                                      foreach($posttags as $tag) {
                                        echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                                      }
                                      
                                    }
                                    ?>

                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-text-right">
                            <div class="follow style-1">
                                <div class="title h6">Share</div>
                                <a class="entry" href="https://www.instagram.com/?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a class="entry" href="https://www.facebook.com/sharer?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="entry" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b45 col-sm-b90"></div>
                    
                    
                    
                    
                </div>
                <div class="col-sm-3">
                    <div class="sidebar-entry">
                        <form action="<?php echo get_home_url(); ?>" class="search-form" method="get">
                            <div class="simple-input-wrapper">
                                <div class="form-icon small"><i class="fa fa-search" aria-hidden="true"></i><input type="submit"/></div>
                                <input class="simple-input small" type="text" name="s" value="" placeholder="Search here"/>
                                <span></span>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-entry">
                        <div class="sidebar-title h6">Category</div>
                        <ul class="categories-wrapper">
                            <li>
                            <?php
                                $categories =  get_categories();
                                foreach  ($categories as $category) {
                            ?>
                            <a itemprop="url" href="<?php echo esc_url( get_category_link($category->term_id)); ?>" rel="nofollow"><?php echo $category->cat_name; ?></a>
                            <?php } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-entry">
                        <div class="sidebar-title h6">Popular tags</div>
                        <div class="tags-wrapper">
                            <?php
                        $tags = get_tags(array(
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'number' => 10 // Display 10 tags
                        ));

                        if ($tags) {
                            echo '<div class="popular-tags">';
                            echo '<h3>Popular Tags</h3>';
                            echo '<div class="tag-cloud">';
                            echo wp_tag_cloud(array(
                                'smallest' => 10, // Set the smallest font size
                                'largest' => 18, // Set the largest font size
                                'unit' => 'px', // Set the font size unit
                                'format' => 'flat', // Set the tag cloud format
                                'separator' => ', ', // Set the separator between tags
                                'orderby' => 'count',
                                'order' => 'DESC',
                                'number' => 10, // Display 10 tags
                                'taxonomy' => 'post_tag', // Specify the taxonomy
                                'include' => $tags // Only include the popular tags
                            ));
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                        </div>
                    </div>
                    <div class="sidebar-entry">
                        <div class="sidebar-title h6">Popular posts</div>
                        <?php

                           $related = get_posts( array( 'category_in' => wp_get_post_categories(get_the_ID()), 'numberposts' => 5, 'post__not_in' => array(get_the_ID()) ) );
                          if( $related ) foreach( $related as $post ) {
                           setup_postdata($post); 
                          ?>
                        <div class="blog-small-entry size-1">
                            <a class="blog-small-preview mouseover-1" href="<?php the_permalink();?> ">
                                <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php the_post_thumbnail_url('blogshort_image');?>" alt="<?php the_title();?>" />
                            <img src="<?php the_post_thumbnail_url('blogshort_image');?>" alt="<?php the_title();?>" />
                            <?php } else { ?>
                            <img src="https://hannasrentals.com/wp-content/uploads/2023/03/short.jpeg" alt="<?php the_title();?>" />
                            <img src="https://hannasrentals.com/wp-content/uploads/2023/03/short.jpeg" alt="<?php the_title();?>" />
                             <?php } ?>
                            </a>
                            <div class="sa xsmall grey blog-small-data"><?php the_time('F'); ?> <?php the_time('d'); ?> / <?php the_time('Y'); ?> by <?php the_author();?></div>
                            <div class="h6 blog-small-title"><span class="ht-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></span></div>
                        </div>
                        <?php }wp_reset_query();?>
                    </div>
                    
                </div>
            </div>

            <div class="empty-space col-xs-b45 col-sm-b90"></div>
    
        </div>

<?php endwhile;endif;?>


<?php get_footer();?>