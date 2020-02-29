<?php $args = array('') ?>

<div class='main-content-container'>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>
    <div class='inner-nav'> 
        <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
    </div>

    <div class='music-content-container'>
        <?php the_content() ?>
    </div>
</div>

<!-- <?php echo CFS()->get( 'price' ); ?> -->

