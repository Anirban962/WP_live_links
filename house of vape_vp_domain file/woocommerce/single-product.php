<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		//do_action( 'woocommerce_before_main_content' );
	?>
	<!-- ======breadcrumb=========================================== -->
<div class="slider-area over-hidden">
    <div class="page-height d-flex align-items-center justify-content-center position-relative" data-background="<?php bloginfo('template_directory'); ?>/images/page-bg.jpg">
        <div class="slider-shape position-absolute z-index1">
            <span class="slider-bg-round d-block"></span>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                <div class="page-title b-l text-center position-relative z-index1">
                	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                      <h2 class="text-capitalize font600 mb-10"><?php woocommerce_page_title(); ?></h2>
                    <?php endif; ?>
                    <nav aria-label="breadcrumb">
                        <?php woocommerce_breadcrumb(); ?>
                    </nav>
                </div><!-- /page title -->
            </div><!-- /col -->
        </div>
    </div><!-- /single-slider -->
</div>
<!-- end breadcrumb  -->
<div class="product-area mt-80">
	<div class="container">
	    <div class="product-content single-product-tab-content">
	        <div class="row">
	            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

	</div>
</div>
</div>
</div>
</div>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
