<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			
	</div><!-- #content -->
		<!-- Modal -->
		<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h5 class="modal-title" id="regModalLabel">Ön kayıt formu</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<?php echo do_shortcode( '[contact-form-7 id="276" title="Order form"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
		<!--Footer-->
		<footer class="footer">
			<div class="footer-socials">
				<div class="container">
					<!--Grid row-->
					<div class="row py-4 d-flex align-items-center">
						<!--Grid column-->
						<div class="col-lg-5 text-center text-md-left mb-4 mb-md-0">
							<h6 class="mb-0 white-text">Sosyal ağlarda bizimle bağlantı kurun!</h6>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-lg-7 text-center text-md-right">
							<!--Facebook-->
							<a href="https://www.facebook.com/profile.php?id=100005510418535" class="footer-socials-icon ml-0"><span class="socials-wrap fi"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
							<!--Instagram-->
							<a href="https://www.instagram.com/iskenderunyelken" class="footer-socials-icon ml-4"><span class="socials-wrap fi"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
					</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
				</div>
			</div>
			<!--Footer Links-->
			<div class="container mt-2 mt-md-5 text-center text-md-left">
				<div class="row mt-3">
					<!--First column-->
					<div class="col-lg-4 col-xl-3 mb-4">
						<?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>">
                    <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" width="200" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                </a>
            <?php else : ?>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
            <?php endif; ?>
					</div>
					<!--/.First column-->
					<!--Second column-->
					<div class="col-lg-2 col-xl-2 mx-auto mb-2 mb-md-4">
						<?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1', 'menu_class' => 'list-unstyled footer-menu' )); ?>
					</div>
					<!--/.Second column-->
					<!--Third column-->
					<div class="col-lg-2 col-xl-2 mx-auto mb-2 mb-md-4">
						<?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => 'list-unstyled footer-menu' )); ?>
					</div>
					<!--/.Third column-->
					<!--Fourth column-->
					<div class="col-lg-3 col-xl-3 mb-2 mb-md-4">
						<h6 class="text-uppercase font-weight-bold">İletişim</h6>
						<hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
						<div>Pirireis Mahallesi, Cengiz Topel Cd., 31200 İskenderun/Hatay</div>
						<a href="yelken@iskenderunyelken.org">yelken@iskenderunyelken.org</a>
						<a href="iskyelken@iskenderunyelken.org">iskyelken@iskenderunyelken.org</a>
						<div>(0326) 614 06 06</div>
						<div>(0326) 613 19 19</div>
					</div>
					<!--/.Fourth column-->
				</div>
			</div>
			<!--/.Footer Links-->
			<!-- Copyright-->
			<div class="footer-copyright py-3 text-center">
				<div class="container-fluid">
					&#169; 2018 Telif: <a href="#"><strong> Lena Severhina</strong></a>
				</div>
			</div>
			<!--/.Copyright -->
		</footer>
		<!--/.Footer-->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>