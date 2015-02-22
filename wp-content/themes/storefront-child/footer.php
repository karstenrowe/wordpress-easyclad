<?php
/**
 * The template for displaying the footer.
 */
?>

	<div class="example-photos-wrap">
		<div class="col-full">

			<section class="footer-widgets example-photos col-3 fix">
				<h4>What is EasyClad hygienic wall cladding?</h4>
				<p class="lead">Hygienic PVC Wall Cladding is the best alternative to ceramic tiles and paint in areas such as commercial kitchens, showers, store rooms, laboratories and any other areas that require a hygienic environment. It provides a sealed finish that requires minimal maintenance and cleaning.</p>
				<section class="block footer-widget-1">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo/easyclad-example-04.jpg" class="img-responsive img-centered" alt="An example of EasyClad cladding installed and fitted.">
					</aside>
				</section>
				<section class="block footer-widget-2">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo/easyclad-example-02.jpg" class="img-responsive img-centered" alt="An example of EasyClad cladding installed and fitted.">
					</aside>
				</section>
				<section class="block footer-widget-3">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo/easyclad-example-05.jpg" class="img-responsive img-centered" alt="An example of EasyClad cladding installed and fitted.">
					</aside>
				</section>
				<section class="block footer-widget-1">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo/easyclad-example-08.jpg" class="img-responsive img-centered" alt="An example of EasyClad cladding installed and fitted.">
					</aside>
				</section>
				<section class="block footer-widget-2">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo/easyclad-example-07.jpg" class="img-responsive img-centered" alt="An example of EasyClad cladding installed and fitted.">
					</aside>
				</section>
				<section class="block footer-widget-3">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo/easyclad-example-09.jpg" class="img-responsive img-centered" alt="An example of EasyClad cladding installed and fitted.">
					</aside>
				</section>
			</section><!-- /.footer-widgets  -->
		</div>
	</div>

	<div class="partner-logo-wrap">
		<div class="col-full">

			<section class="footer-widgets partner-logos col-4 fix">

				<h4>Who we work with &hellip;</h4>
				<section class="block footer-widget-1">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-partners/logo-costa.png" class="img-responsive img-centered" alt="Logo of business we supply with wall cladding to.">
					</aside>
				</section>
				<section class="block footer-widget-2">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-partners/logo-tesco.png" class="img-responsive img-centered" alt="Logo of business we supply with wall cladding to.">
					</aside>
				</section>
				<section class="block footer-widget-3">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-partners/logo-yum.png" class="img-responsive img-centered" alt="Logo of business we supply with wall cladding to.">
					</aside>
				</section>
				<section class="block footer-widget-4">
		    	<aside class="widget widget_text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-partners/logo-wetherspoon.png" class="img-responsive img-centered" alt="Logo of business we supply with wall cladding to.">
					</aside>
				</section>

			</section><!-- /.footer-widgets  -->
		</div>
	</div>

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

						<?php
			/**
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit - 20
			 */
			do_action( 'storefront_footer' ); ?>

			<section class="footer-widgets contact-details col-4 fix">

					<section class="block footer-widget-1">
				    <p class="company-copyright">&copy; <span itemprop="name">EasyClad</span> 2015</p>
						<p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
							<p itemprop="streetAddress">Unit 1, Cardale Park</p>
							<p><span itemprop="addressLocality">Harrogate, </span><span itemprop="postalCode">HG3 1GY</span></p>
						</p>
					</section>
					<section class="block footer-widget-2">
						<p itemprop="telephone"><em>T</em> 0330 100 0313</p>
						<p itemprop="fax"><em>F</em> 0330 100 0314</p>
						<p itemprop="email"><em>E</em> <a href="mailto:sylvester.rowe@easyclad.co.uk?subject=EasyClad website enquiry">sylvester@easyclad.co.uk</a></p>
					</section>
					<section class="block footer-widget-3">
						<p>
							<a href="http://eepurl.com/bcdFbf" target="_blank">Subscribe to the EasyClad newsletter</a> for the latest wall cladding news and deals.
						</p>
					</section>
					<section class="block footer-widget-4">
						<p>
			        <p><a href="https://www.facebook.com/pages/EasyClad/355086737949390" target="_blank" title="Like EasyClad on Facebook for wall cladding news."><i class="fa fa-facebook"></i>Facebook</a></p>
		          <p><a href="#" target="_blank" title="Follow EasyClad on Pinterest for wall cladding news."><i class="fa fa-pinterest"></i>Pinterest</a></p>
              <p><a href="https://twitter.com/easyclad" target="_blank" title="Follow EasyClad on Twitter for wall cladding news."><i class="fa fa-twitter"></i>Twitter</a></p>
						</p>
					</section>

			</section

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- jQuery -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/classie.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cbpAnimatedHeader.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/theme.js"></script>

<!-- PureChat widget -->
<script type='text/javascript'>(function () { var done = false;var script = document.createElement('script');script.async = true;script.type = 'text/javascript';script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';document.getElementsByTagName('HEAD').item(0).appendChild(script);script.onreadystatechange = script.onload = function (e) {if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {var w = new PCWidget({ c: '869bf676-455d-4915-92d4-286c12a3527e', f: true });done = true;}};})();</script>

</body>
</html>
