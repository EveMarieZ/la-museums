<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="footer-sitemap d-flex">
						<div class="col-md-3">
							<ul class="text-uppercase footer-sitemap-list">
								<li><a href="">About</a></li>
								<li><a href="">Conference</a></li>
								<li><a href="">Membership</a></li>
								<li><a href="">Resources</a></li>
								<li><a href="">Blog</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="text-uppercase footer-sitemap-list">
								<li><a href="">Jobs</a></li>
								<li><a href="">Museums Directory</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<p class="text-uppercase">Louisiana Association of Museums<br>
							100 North Blvd<br>
							Baton Rouge, LA 70801<br>
							225-383-6800</p>
						</div>
						<div class="col-md-3">
							<p class="text-uppercase">Copyright &copy; 2019<br>
							Louisiana Association of Museums <br>
							<a href="https://www.facebook.com/LAMuseums/">Follow Us on Facebook</a></p>
						</div>
					</div>
					<div class="col-xs-12 site-info d-flex justify-content-center">

						<!-- <?php understrap_site_info(); ?> -->
						<p>Designed & Developed by <span class="color-links"><a href="http://evewebdesign.com">Eve Web Design</a></span><p>
					</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

