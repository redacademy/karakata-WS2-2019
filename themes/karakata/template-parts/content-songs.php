<div class='main-content-container'>
<audio id="audioPlayer" src="http://localhost/karakata/wp-content/uploads/2020/02/The_DeLong_Incident.mp3"></audio>
    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>
    <div class='inner-nav'> 
        <div class = 'inner-nav-container'>
            <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
        </div>
    </div>

    <h1> THIS IS A BUTTON <a class = 'testplay'>PLAY</a></h1>
    <h1> THIS IS A BUTTON <a class = 'teststop'>STOP</a></h1>


    <div class='music-content-container'>
        <?php the_content() ?>
    </div>
</div>

<div class = "media-player">
    <h3 class = "player-title">Song Title<?php ?></h3>
    <div class = "player-controls">
        <div class = "prev-container controls">
            <a class = "prev">
                <!-- <img src = "../../icons/Reverse.svg"> -->
                <?php echo get_home_path() ?>
            </a>
        </div>
        <div class = "play-contianer controls">
            <a class = "play">play</a>
        </div>
        <div class = "next-container controls">
            <a class = "next">next</a>
        </div>
    </div>
</div>