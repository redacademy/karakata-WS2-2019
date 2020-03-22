<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>
			 <header id="masthead" class="site-header" role="banner">
				<div class="desktop-nav-container">
					<div class="desktop-nav-logo-container">
						<img id="karakata-logo" class="<?php if (is_front_page()) {
							echo "karakata-logo";
						}?>" src="<?php echo get_stylesheet_directory_uri() . '/Icons/logo-white.png'?>" >
					</div>
					
					<nav id="site-navigation" class="nav-container" role="navigation">
						<?php wp_nav_menu( array( 'menu' => 'desktop-menu' ) ); ?>
					</nav>

					<div class="contact-link-container <?php if(is_page("contact")){echo 'desktop-contact';}?>">
						<a href="<?php echo get_permalink( get_page_by_path( 'contact' ) );?>">Contact</a>
					</div>
				</div>
				
				
				
				<div class='mobile-nav'>
					<div href=''class="hamburger"><i class="fas fa-bars"></i></div>
					<div class="slide-menu">
					<div class="close-menu"><a href="#" id='close-menu'><i class="fas fa-caret-left"></i></a></div>
					<?php
						echo ' <div class="slide-logo">
						<img class=" front-logo white-logo" src='.  get_stylesheet_directory_uri() ."/Icons/logo-white.png".' alt="logo white"></div> ';
					?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="social-media">
						<i class="fab fa-instagram"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-facebook-f"></i>
						<i class="fas fa-globe-americas"></i>
					</div>
					</div>
				</div>
			</header>

			<div id="content" class="site-content">
