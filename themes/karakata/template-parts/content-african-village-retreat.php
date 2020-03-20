
<div class='farming-container'>


    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>

<!-- <?php echo wp_title(); ?> -->
    <div class = "inner-nav">
    <div class = 'inner-nav-container about_nav--option'>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>
</div>

        <div class="about-content">
            <div class = "about_content--wrap">
            <?php the_content(); ?>
            </div>
	    </div><!-- .entry-content -->


</div> <!-- about-content-container -->