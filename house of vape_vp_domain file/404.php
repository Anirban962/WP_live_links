<?php

get_header(); ?>
<div class="slider-area over-hidden">
                <div class="single-page not-found-page-height d-flex align-items-center justify-content-center" data-background="images/slider/not-found.jpg" style="background-image: url(&quot;images/slider/not-found.jpg&quot;);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10  col-lg-12  col-md-12  col-sm-12 col-12 offset-xl-1">
                                <div class="page-content text-center">
                                    <h2 class="mt-30 font600">404</h2>
                                    <h4 class="pb-25">Error. We can’t find the page you’re looking for.</h4>
                                    <p>Sorry for the inconvenience. Go to our homepage or check out our latest collections..</p>
                                    <form action="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" method="GET" id="myForm">
                                    <div class="blog-search position-relative mt-25 ml-90 mr-90">
                                        <input class="form-control" type="text" placeholder="Search ..." <?php echo get_search_query(); ?> name="s">
                                        <a class="position-absolute primary-color" href="javascript:void();" onclick='document.getElementById("myForm").submit();'><span><i class="far fa-search"></i></span></a>
                                    </div>
                                     </form>
                                    <a href="<?php bloginfo('url'); ?>" class="web-btn  theme-border  d-inline-block mt-50 text-uppercase white theme-bg position-relative rounded-0 over-hidden pl-60 pr-60 pt-20 pb-20">back to home page</a>
                                </div>
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
            </div>
<?php
get_footer(); ?>
