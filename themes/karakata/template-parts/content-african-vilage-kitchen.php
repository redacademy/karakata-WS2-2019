
<div class='farming-container container_spacing '>
    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>


    <div class = "inner-nav">
    <div class = 'inner-nav-container kitchen_nav--option'>

        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>
</div>

    <!-- <div class='farming-content-container'> -->

    <div class = "text-kitchen">
	        <?php the_content(); ?>
            </div>
        <a class = " inqurie-wrap" href="https://karakata.van.cp.academy.red/contact">
            <p class = "inqurie-text"> Inqurie Here </p>
        </a>
	    </div><!-- .entry-content -->



</div> <!-- farming-container -->