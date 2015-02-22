<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link name="author" content="" href="humans.txt">
	<link rel="shortcut icon" href="ico/favicon.png">

	<link rel="profile" href="http://twitter.com/karstenrowe">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <!-- Bootstrap Core CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icon fonts -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Google fonts import -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700|Asap:400,700,400italic' rel='stylesheet' type='text/css'>

	<!-- Google analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-15109235-15', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Alexa verification -->
	<meta name="alexaVerifyID" content="dzVwBjT6hOjOQIL6VfYpkED_dF0"/>

	<!-- Google verification -->
	<meta name="google-site-verification" content="G0QRKFyreSqkRy5mohOtHt0t-YiHHd_KSblORw38Q-s" />

<?php
/**
 * WordPress 4.1 + uses native `title-tag` theme feature.
 */
if ( ! function_exists( '_wp_render_title_tag' ) ) { ?>
	<title><?php wp_title( '|', true, 'right' ); ?></title><?php
}
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'storefront' ); ?></a>

	<?php
	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header navbar navbar-default" role="banner" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ')";'; } ?>>
		<div class="col-full">

			<?php
			/**
			 * @hooked storefront_social_icons - 10
			 * @hooked storefront_site_branding - 20
			 * @hooked storefront_secondary_navigation - 30
			 * @hooked storefront_product_search - 40
			 * @hooked storefront_primary_navigation - 50
			 * @hooked storefront_header_cart - 60
			 */
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>
