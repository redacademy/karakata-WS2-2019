<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer <?php if (!is_page( 'contact' )) {
			echo "footer";} ?>" role="contentinfo">
				<div class="site-info">
				<nav id="footer-navigation" class="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu_id' => 'footer-menu' ) ); ?>
				</nav>				</div><!-- .site-info -->
			<h1>stay in touch with us!</h1>
			<div class='footer-email'><p>Email</p><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
			<div class="footer-socials">
						<i class="fab fa-instagram"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-facebook-f"></i>
						<i class="fas fa-globe-americas"></i>
					</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		</body>
</html>
