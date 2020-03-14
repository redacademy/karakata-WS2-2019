<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->
			
			<?php if (is_page( 'contact' )) {
				echo '<footer id="colophon" class="site-footer" role="contentinfo">';
					echo '<div class="site-info">';
						echo '<nav id="footer-navigation" class="footer-navigation" role="navigation">';
								wp_nav_menu( array( 'menu' => 'footer-menu' ) );
						echo '</nav>';				
					echo '</div>';
					echo '<h1>stay in touch with us!</h1>';
					echo '<a href="#contact-page"><div class="footer-email"> <p>Email</p><i class="fa fa-paper-plane" aria-hidden="true"></i> </div></a>';
					echo '<div class="footer-socials">';
						echo '<i class="fab fa-instagram"></i>';
						echo '<i class="fab fa-twitter"></i>';
						echo '<i class="fab fa-facebook-f"></i>';
						echo '<i class="fas fa-globe-americas"></i>';
					echo '</div>';
			}
			else {
				echo '<footer id="colophon" class="hidden" role="contentinfo">';
			}?>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		</body>
</html>
