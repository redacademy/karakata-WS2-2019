<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="front-page-main" role="main">

		<?php
		global $post;
		
		$sections = get_field('home_sections');

		echo '<div class="front-scroll welcome">';
		foreach( $sections[0] as $label => $value ){
			
			if($value){
			
			if ($label==="home_section_image" && sizeof($value)>1) {
				echo '<div>';

				foreach($value as $image){
					echo '<img src="'.$image['society_purposes']['url'].'">';
					
				}
				echo '</div>';

			}
				elseif($label==="home_section_image" && sizeof($value)<2) {
					echo '<img class="header-image" src="'.$value[0]['society_purposes']['url'].'">';
					
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
		//------------------------------------------		
		echo '<div class="front-scroll">';
		foreach( $sections[1] as $label => $value ){
			if($value){
				
				if ($label==="home_section_image" ) {
					
					foreach($value as $image){
						echo '<div >';
						echo '<img src="'.$image['society_purposes']['url'].'">';
						echo '</div>';
						
					}
				
					
				}
				elseif($label==="home_section_title" ){
					echo '<h1 class="home-headings">'.$value.'</h1>';
				}
				elseif($label==="home_section_content" ){
					echo '<p>'.$value.'</p>';
				}
			
			
			}
		}
		//------------------------------------------		
		echo '<div class="front-scroll">';
		foreach( $sections[2] as $label => $value ){
			
			if($value){
			
			if ($label==="home_section_image" && sizeof($value)>1) {
				
				echo '<div class="main-carousel" data-flickity=\'{ "cellAlign": "left", "contain": true }\'>';
				foreach($value as $image){
					echo '<div class="carousel-cell">';
					echo '<img src="'.$image['society_purposes']['url'].'">';
					
					echo '</div>';
				}
				echo "</div>";
			}
				elseif($label==="home_section_image" && sizeof($value)<2) {
					echo '<img class="header-image" src="'.$value[0]['society_purposes']['url'].'">';
					
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
		//------------------------------------------	
		for ($i=3; $i <6 ; $i++) { 
			$section=$sections[$i];
			echo '<div class="front-scroll">';
			foreach( $section as $label => $value ){
				
				if($value){
				
				if($label==="home_section_image" && sizeof($value)<2) {
						echo '<img class="header-image" src="'.$value[0]['society_purposes']['url'].'">';
						
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
			//------------------------------------------
		}
		

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>