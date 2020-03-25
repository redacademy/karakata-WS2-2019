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

                    $file = get_field('song')['id'];
                    
                    echo '<li class= "song-list playicon"><span class = "song-icon"><img src="' . get_template_directory_uri() . '/Icons/Play.svg' . '"></span><span class = "song-title">' . get_field('song')['title'] . '</span><span class = "song-length">' . wp_get_attachment_metadata($file)['length_formatted'] . '</span></li>';
                }
                echo '</ul>';
            }
            
            wp_reset_postdata(); 
        
        ?>

    </div>
</div>

<div class = "media-player">
    <h3 class = "player-title mp">Karakata Media Player<?php ?></h3>
    <div class = "player-controls mp">
        <div class = "prev-container controls">
            <a class = "prev">
                <img src = "<?php echo get_template_directory_uri() . '/Icons/Reverse.svg' ?>">
            </a>
        </div>
        <div class = "play-container controls">
            <a class = "play"></a>
        </div>
        <div class = "next-container controls">
            <a class = "next">
                <img src = "<?php echo get_template_directory_uri() . '/Icons/Fast_Forward.svg' ?>">
            </a>
        </div>
    </div>
    <div class = "progress-bar mp">
        <input type="range" min="1" max="0" value="0" class="progress">
        <div class = "progress-overlay"></div>
    </div>
    <div class = "playtime mp"><span class = "formatted-minutes">00</span>:<span class = "formatted-seconds">00</span>/<span class = "minutes">00</span>:<span class = "seconds">00</span></div>
    <div class = "volume-container mp">
        <div class = "volume-icon-container">
            <img class="volume-icon" src = "<?php echo get_template_directory_uri() . '/Icons/Volume.svg' ?>">
        </div>
        <div class = "volume-control progress-bar">
            <input type="range" min="0" max="100" value="100" class="volume">
            <div class = "volume-overlay"></div>
        </div>
    </div>
</div>
