
   <div class='farming-container'>

   <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>

    <div class = "inner-nav">
    <div class = 'inner-nav-container classes_nav--option'>
            
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'African Retreat' ) ); ?>
        </div>
</div>

            <div class="about-content">
                <div class = "services-provided">

        
                <a class = "music-service service-icon" data-section="music">   
                    <div class ="class_icon_container">
                        <img class = "class_icon"src="<?php echo get_template_directory_uri(); ?>/Icons/Music_White.svg" scale="0">
                            <p class = "section-tag">Music</p>   
                    </div> 
                </a>
                    

                <a class = "drums-service service-icon" data-section="drums">
                    <div class ="class_icon_container">
                        <img class = "class_icon"src="<?php echo get_template_directory_uri(); ?>/Icons/Drums_White.svg" scale="0">
                            <p class = "section-tag">Drums</p>
                    </div>
                </a>

                <a class = "yoga-service service-icon" data-section="yoga">
                    <div class ="class_icon_container">
                        <img class = "class_icon"src="<?php echo get_template_directory_uri(); ?>/Icons/Yoga_White.svg" scale="0">
                            <p class = "section-tag">Yoga</p>
                    </div>
                </a>

                <a class = "meditation-service service-icon" data-section="meditation"> 
                     <div class ="class_icon_container">
                          <img class = "class_icon"src="<?php echo get_template_directory_uri(); ?>/Icons/Meditation_White.svg" scale="0">
                            <p class = "section-tag">Meditation</p>
                    </div>
                </a>
                <a class = "cook-service service-icon" data-section="cook">
                  <div class ="class_icon_container">
                    <img class = "class_icon"src="<?php echo get_template_directory_uri(); ?>/Icons/Cook_White.svg" scale="0">
                        <p class = "section-tag">Cook</p>
                </div>
                </a>
                <a class = "contact-service service-icon" data-section="contact">
                     <div class ="class_icon_container">
                        <img class = "class_icon"src="<?php echo get_template_directory_uri(); ?>/Icons/Contact_White.svg" scale="0">
                            <p class = "section-tag">Contact</p>
                    </div>
                </a>

            <a class = "back-button">
                <p class = "view-all">View all</p>
            </a>

            </div>




            <div class="service-info-box hidden music-test" data-section="music">
                <div class = "event-information-wrap">
                    <p class = "event-title-tab"></p>
                    <p class = "event-address-tab"></p>
                    <p class = "event-ticket-tab"></p>
                    <p class = "event-text-tab"></p>

                    <div class = "event-information-btn">
                        <a class = "link-more-information" href = "<?php echo get_home_url() ?>" blank = "">Find out</a>
                            <i class="fas fa-angle-double-right"></i>
                    </div>
                </div>
                

            </div>


            <div class="service-info-box hidden drums-test" data-section="drums">
                <div class = "event-information-wrap">
                <p class = "event-title-tab"></p>
                    <p class = "event-address-tab"></p>
                    <p class = "event-ticket-tab"></p>
                    <p class = "event-text-tab"></p>
                    <div class = "event-information-btn">
                        <a class = "link-more-information" href = "<?php echo get_home_url() ?>" blank = "">Find out</a>
                            <i class="fas fa-angle-double-right"></i>
                    </div>
                </div>

            </div>

            <div class="service-info-box hidden yoga-test" data-section="yoga">
                <div class = "event-information-wrap">
                <p class = "event-title-tab"></p>
                    <p class = "event-address-tab"></p>
                    <p class = "event-ticket-tab"></p>
                    <p class = "event-text-tab"></p>
                    <div class = "event-information-btn">
                        <a class = "link-more-information" href = "<?php echo get_home_url() ?>" blank = "">Find out</a>
                            <i class="fas fa-angle-double-right"></i>
                    </div>
                </div>
                    

            </div>

            <div class="service-info-box hidden meditation-test" data-section="meditation">
                <div class = "event-information-wrap">
                    <p class = "event-title-tab"></p>
                    <p class = "event-address-tab"></p>
                    <p class = "event-ticket-tab"></p>
                    <p class = "event-text-tab"></p>
                    <div class = "event-information-btn">
                        <a class = "link-more-information" href = "<?php echo get_home_url() ?>" blank = "">Find out</a>
                            <i class="fas fa-angle-double-right"></i>
                    </div>
                </div>
            </div>

            <div class="service-info-box hidden cook-test" data-section="cook">
                <div class = "event-information-wrap">
                    <p class = "event-title-tab"></p>
                    <p class = "event-address-tab"></p>
                    <p class = "event-ticket-tab"></p>
                    <p class = "event-text-tab"></p>
                    <div class = "event-information-btn">
                        <a class = "link-more-information" href = "<?php echo get_home_url() ?>" blank = "">Find out</a>
                            <i class="fas fa-angle-double-right"></i>
                    </div>
                </div>

            </div>

            <div class="service-info-box hidden contact-test" data-section="contact">
                <div class = "event-information-wrap">
                    <p class = "event-title-tab"></p>
                    <p class = "event-address-tab"></p>
                    <p class = "event-ticket-tab"></p>
                    <p class = "event-text-tab"></p>
                    <div class = "event-information-btn">
                        <a class = "link-more-information" href = "<?php echo get_home_url() ?>" blank = "">Find out</a>
                            <i class="fas fa-angle-double-right"></i>
                    </div>
                    
                </div>
            </div>




        


                <?php the_content(); ?>
            </div>
                
            </div><!-- .entry-content -->

</div>
