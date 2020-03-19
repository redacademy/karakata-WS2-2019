<div class='farming-container'>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>
    <div class = "inner-nav farming_nav--option">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>

    <div class='farming-content-container'>
        <?php echo the_content(); ?>

    </div>
</div>
