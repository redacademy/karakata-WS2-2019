<div class='main-content-container'>
<audio id="audioPlayer" src=""></audio>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>
    <div class='inner-nav'> 
        <div class = 'inner-nav-container'>
            <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
        </div>
    </div>

    <div class='music-content-container'>
    <?php
 
 // The Query
 $args = array('post_type' => 'beats');
 
 $the_query = new WP_Query( $args );
  
 // The Loop
 if ( $the_query->have_posts() ) {
     echo '<ul>';
     while ( $the_query->have_posts() ) {
         // $audioObject = get_field('audio_testing');
 
 
         $the_query->the_post();
         echo '<li class= "song-list">' . get_field('song')['title'] . '</li>';
     }
     echo '</ul>';
 } else {
     // no posts found
 }
 
 /* Restore original Post Data */
 wp_reset_postdata(); ?>
    </div>
</div>

<div class = "media-player">
    <h3 class = "player-title">Karakata Media Player<?php ?></h3>
    <div class = "player-controls">
        <div class = "prev-container controls">
            <a class = "prev">
                <img src = "<?php echo get_template_directory_uri() . '/Icons/Reverse.svg' ?>">
            </a>
        </div>
        <div class = "play-container controls">
            <a class = "play">
                <!-- <img src = "<?php echo get_template_directory_uri() . '/Icons/Play.svg' ?>"> -->
            </a>
        </div>
        <div class = "next-container controls">
            <a class = "next">
                <img src = "<?php echo get_template_directory_uri() . '/Icons/Fast_Forward.svg' ?>">
            </a>
        </div>
    </div>
</div>
