			</div><!-- #content -->
			
			<?php if (is_page( 'contact' )) {
				echo '<footer id="colophon" class="site-footer" role="contentinfo">';
					echo '<div class="site-info">';
						echo '<nav id="footer-navigation" class="footer-navigation" role="navigation">';
						wp_nav_menu( array( 'menu' => 'footer_menu' ) );
						echo '</nav>';				
					echo '</div>';
					echo '<h1>stay in touch with us!</h1>';
					//echo '<div class="footer-email"><form><input  type="text" placeholder="email" name="email"> <button><i class="fa fa-paper-plane" aria-hidden="true"></i><button></form></div>';
					echo '<div class="footer-socials">';?>

					
 <!-- you can change you social media links here!-------------------------------------------------------------------------------------------------- -->




<!-- instagram --><a href="">    																	<i class="fab fa-instagram"></i></a>
<!-- twitter --><a href="http://www.twitter.com/Toyinirawo">									<i class="fab fa-twitter"></i></a>
<!-- facebook --><a href="https://www.facebook.com/KaraKataAfrobeatGroupCanada">					<i class="fab fa-facebook-f"></i></a>
<!-- youtube --><a href="https://www.youtube.com/channel/UCdIJwVgGy3N1yrbYCXgEfpw">				<i class="fas fa-globe-americas"></i></a>';



<!-- ---------------------------------------------------------------------------------------------------------------- -->
						<?php
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
