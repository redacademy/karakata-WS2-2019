
<div class = "about-content-container">


<!-- <?php echo wp_title(); ?> -->

    <div class = "inner-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>

        <div class="about-content kitchen">
	        <?php the_content(); ?>
	    </div><!-- .entry-content -->


</div> <!-- about-content-container -->