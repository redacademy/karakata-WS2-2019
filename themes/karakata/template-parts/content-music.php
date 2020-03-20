<div class='main-content-container'>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>
    <?php if(is_page('videos')) {?>
    <div class='inner-nav'> 
        <div class = 'inner-nav-container videos-nav'>
            <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
        </div>
    </div>

    <div class='music-content-container'>
        <?php the_content() ?>
    </div>
    <?php }else {?>
        <div class='inner-nav'> 
        <div class = 'inner-nav-container about-nav'>
            <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
        </div>
    </div>

    <div class='music-content-container about-us-container'>
        <?php the_content() ?>
    </div>
    <?php } ?>
</div>
