<div class='main-content-container songs-main-container'>
<audio id="audioPlayer" src=""></audio>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>

    <div class='inner-nav'> 
        <div class = 'inner-nav-container song-nav'>
            <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
        </div>
    </div>

    <div class='music-content-container'>

        <div>
            <?php the_content(); ?>
        </div>
        
        <?php
    
        $args = array('post_type' => 'beats');
        
        $the_query = new WP_Query( $args );
        
        if ( $the_query->have_posts() ) {
            echo '<ul class="songsList">';
            while ( $the_query->have_posts() ) {
        
                $the_query->the_post();
                
                echo '<li class= "song-list playicon"><span><img src="' . get_template_directory_uri() . '/Icons/Play.svg' . '"></span>' . get_field('song')['title'] . '</li>';
            }
            echo '</ul>';
        } else {
            // no posts found
        }
        
        wp_reset_postdata(); 
        
        ?>

    </div>
</div>

<div class = "media-player">
    <h3 class = "player-title">Karakata Media Player<?php ?></h3>
    <div class = "download-song"><a>test</a></div>
    <div class = "player-controls">
        <div class = "prev-container controls">
            <a class = "prev">
                <img src = "<?php echo get_template_directory_uri() . '/Icons/Reverse.svg' ?>">
            </a>
        </div>
        <div class = "play-container controls">
            <a class = "play">
            </a>
        </div>
        <div class = "next-container controls">
            <a class = "next">
                <img src = "<?php echo get_template_directory_uri() . '/Icons/Fast_Forward.svg' ?>">
            </a>
        </div>
    </div>
    <div class = "progress-bar"><div class = "progress"></div></div>
    <div class = "playtime"><span class = "">00</span>:<span class = "">00</span>/<span class = "minutes">00</span>:<span class = "seconds">00</span></div>
    <div class = "volume-control"><a>test</a></div>
</div>
