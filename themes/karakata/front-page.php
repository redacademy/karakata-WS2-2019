<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		global $post;
		
		$sections = get_field('home_sections');

			
			foreach($sections as $section) {

			echo '<div class="front-scroll">';
				foreach( $section as $label => $value ){
					
					if($value){
					
					if ($label==="home_section_image" && sizeof($value)>1) {
						echo '<div>';

						foreach($value as $image){
							echo '<img src="'.$image['society_purposes']['url'].'">';
							
						}
						echo '</div>';

					}
						elseif($label==="home_section_image" && sizeof($value)<2) {
							echo '<img src="'.$value[0]['society_purposes']['url'].'">';
							
						}
						elseif($label==="home_section_title" ){
							echo '<h1 class="home-headings">'.$value.'</h1>';
						}
						elseif($label==="home_section_content" ){
							echo '<p>'.$value.'</p>';
						}
					
					
					}
				}
				echo '</div>';
				echo '<hr>';
		
		}
		

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
