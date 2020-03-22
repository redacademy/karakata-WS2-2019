<div class='farming-container'>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>


    <div class='inner-nav'> 
    <div class = "inner-nav-container farming_nav--option">
        
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>
</div>

    <div class='farming-content-container'>
        <div class = "farming__content"><?php echo the_content(); ?></div>

    </div>
</div>
