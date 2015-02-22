<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="col-full">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					do_action( 'storefront_page_before' );
					?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
					/**
					 * @hooked storefront_display_comments - 10
					 */
					do_action( 'storefront_page_after' );
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .col-full -->
</div><!-- #content -->

<?php get_footer(); ?>
