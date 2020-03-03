
<div class = "about-content-container">


<!-- <?php echo wp_title(); ?> -->

    <div class = "inner-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
    </div>

        <div class="about-content">
            <div class = "services-provided">
    
            <a class = "music-service service-icon" data-section="music">      
             <img src="<?php echo get_template_directory_uri(); ?>/Icons/Music_White.svg" scale="0">
                <p class = "section-tag">Music</p>    
            </a>

            <a class = "drums-service service-icon" data-section="drums">
                 <img src="<?php echo get_template_directory_uri(); ?>/Icons/Drums_White.svg" scale="0">
                    <p class = "section-tag">Drums</p>
            </a>

            <a class = "yoga-service service-icon" data-section="yoga">
                <img src="<?php echo get_template_directory_uri(); ?>/Icons/Yoga_White.svg" scale="0">
                    <p class = "section-tag">Yoga</p>
            </a>

            <a class = "medidation-service service-icon" data-section="medidation"> 
                <img src="<?php echo get_template_directory_uri(); ?>/Icons/Meditation_White.svg" scale="0">
                     <p class = "section-tag">Meditation</p>
            </a>
            <a class = "cook-service service-icon" data-section="cook">
                <img src="<?php echo get_template_directory_uri(); ?>/Icons/Cook_White.svg" scale="0">
                    <p class = "section-tag">Cook</p>
            </a>
            <a class = "contact-service service-icon" data-section="contact">
                <img src="<?php echo get_template_directory_uri(); ?>/Icons/Contact_White.svg" scale="0">
                     <p class = "section-tag">Contact</p>

            </a>

        </div>







        <div class="service-info-box" data-section="music" style="display:none;">
        <h1>Music Class</h1>
        
        
        
        </div>
    
            <?php the_content(); ?>
            
	    </div><!-- .entry-content -->


</div> <!-- about-content-container -->