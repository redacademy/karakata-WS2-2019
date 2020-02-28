<div class='main-content-container'>

    <div class='intro-title'>
        <?php the_title() ?>
    </div>
    <div class='inner-nav'> 
        <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
    </div>

    <div class='music-content-container'>
        <?php the_content() ?>
    </div>
</div>
