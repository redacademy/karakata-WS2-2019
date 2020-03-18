
<div class='farming-container'>
    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>


    <div class = "inner-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>

        <div class="about-content kitchen">
	        <?php the_content(); ?>
	    </div><!-- .entry-content -->

        <div class = " inqurie-wrap">
            <p class = "inqurie-text"> Inqurie Here </p>
        </div>


</div> <!-- farming-container -->