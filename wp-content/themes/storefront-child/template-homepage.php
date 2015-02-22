<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<div id="carousel-hero" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slideshow/hero-slide-01.jpg" class="slide-img" alt="A photo of EasyClad wall cladding.">
    </div>
    <div class="item">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slideshow/hero-slide-02.jpg" class="slide-img" alt="A photo of EasyClad wall cladding.">
    </div>
    <div class="item">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slideshow/hero-slide-03.jpg" class="slide-img" alt="A photo of EasyClad wall cladding.">
    </div>
    <div class="item">
	    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slideshow/hero-slide-04.jpg" class="slide-img" alt="A photo of EasyClad wall cladding.">
    </div>
  </div>
	<!-- Controls -->
  <a class="left carousel-control" href="#carousel-hero" role="button" data-slide="prev">
    <span><i class="fa fa-chevron-left"></i></span>
  </a>
  <a class="right carousel-control" href="#carousel-hero" role="button" data-slide="next">
    <span><i class="fa fa-chevron-right"></i></span>
  </a>
</div>

<div id="content" class="site-content">
	<div class="col-full">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php
				/**
				 * @hooked storefront_page_content - 10
				 * @hooked storefront_product_categories - 20
				 * @hooked storefront_recent_products - 30
				 * @hooked storefront_featured_products - 40
				 * @hooked storefront_popular_products - 50
				 * @hooked storefront_on_sale_products - 60
				 */
				do_action( 'homepage' ); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php do_action( 'storefront_sidebar' ); ?>

	</div><!-- .col-full -->
</div><!-- #content -->

<?php get_footer(); ?>
