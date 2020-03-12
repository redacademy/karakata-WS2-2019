


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

            <a class = "meditation-service service-icon" data-section="meditation"> 
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

        <a class = "back-button">
            <p class = "view-all">View all</p>
        </a>

        </div>




        <div class="service-info-box hidden music-test" data-section="music">
            <div class = "event-information-wrap">
                <p class = "event-title-tab"><?php the_field( 'title_upper', 189 ); ?></p>
                <p class = "event-address-tab"><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 189 ); ?></p>
                <p class = "event-ticket-tab"><i class="fas fa-ticket-alt ticket-rotate"></i> <?php the_field( 'ticket_price', 189  ); ?> </p>
                <p class = "event-text-tab"><?php the_field( 'text', 189 ); ?></p>

                <div class = "event-information-btn">
                    <a class = "link-more-information" href = "<?php the_field( 'button_link', 189 ); ?>" blank = "">Find out</a>
                        <i class="fas fa-angle-double-right"></i>
                </div>
            </div>
            

        </div>


        <div class="service-info-box hidden drums-test" data-section="drums">
            <div class = "event-information-wrap">
             <p class = "event-title-tab"><?php the_field( 'title_upper', 192 ); ?></p>
                <p class = "event-address-tab"><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 192 ); ?></p>
                <p class = "event-ticket-tab"><i class="fas fa-ticket-alt ticket-rotate"></i> <?php the_field( 'ticket_price', 192 ); ?> </p>
                <p class = "event-text-tab"><?php the_field( 'text', 192 ); ?></p>
                <div class = "event-information-btn">
                    <a class = "link-more-information" href = "<?php the_field( 'button_link', 192 ); ?>" blank = "">Find out</a>
                        <i class="fas fa-angle-double-right"></i>
                </div>
            </div>

        </div>

        <div class="service-info-box hidden yoga-test" data-section="yoga">
             <div class = "event-information-wrap">
             <p class = "event-title-tab"><?php the_field( 'title_upper', 188 ); ?></p>
                 <p class = "event-address-tab"><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 188 ); ?></p>
                <p class = "event-ticket-tab"><i class="fas fa-ticket-alt ticket-rotate"></i> <?php the_field( 'ticket_price', 188 ); ?> </p>
                <p class = "event-text-tab"><?php the_field( 'text', 188 ); ?></p>
                <div class = "event-information-btn">
                    <a class = "link-more-information" href = "<?php the_field( 'button_link', 188 ); ?>" blank = "">Find out</a>
                        <i class="fas fa-angle-double-right"></i>
                </div>
            </div>
                

        </div>

        <div class="service-info-box hidden meditation-test" data-section="meditation">
             <div class = "event-information-wrap">
                <p class = "event-title-tab"><?php the_field( 'title_upper', 187 ); ?></p>
                <p class = "event-address-tab"><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 187 ); ?></p>
                <p class = "event-ticket-tab"><i class="fas fa-ticket-alt ticket-rotate"></i> <?php the_field( 'ticket_price', 187 ); ?> </p>
                <p class = "event-text-tab"><?php the_field( 'text', 187 ); ?></p>
                <div class = "event-information-btn">
                    <a class = "link-more-information" href = "<?php the_field( 'button_link', 187 ); ?>" blank = "">Find out</a>
                        <i class="fas fa-angle-double-right"></i>
                </div>
            </div>
        </div>

        <div class="service-info-box hidden cook-test" data-section="cook">
            <div class = "event-information-wrap">
                <p class = "event-title-tab"><?php the_field( 'title_upper', 186 ); ?></p>
                <p class = "event-address-tab"><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 186 ); ?></p>
                <p class = "event-ticket-tab"><i class="fas fa-ticket-alt ticket-rotate"></i> <?php the_field( 'ticket_price', 186 ); ?> </p>
                <p class = "event-text-tab"><?php the_field( 'text', 186 ); ?></p>
                <div class = "event-information-btn">
                    <a class = "link-more-information" href = "<?php the_field( 'button_link', 186 ); ?>" blank = "">Find out</a>
                        <i class="fas fa-angle-double-right"></i>
                </div>
            </div>

        </div>

        <div class="service-info-box hidden contact-test" data-section="contact">
            <div class = "event-information-wrap">
                <p class = "event-title-tab"><?php the_field( 'title_upper', 185 ); ?></p>
                <p class = "event-address-tab"><i class="fas fa-map-marker-alt"></i> <?php the_field( 'address', 185 ); ?></p>
                <p class = "event-ticket-tab"><i class="fas fa-ticket-alt ticket-rotate"></i> <?php the_field( 'ticket_price', 185 ); ?> </p>
                <p class = "event-text-tab"><?php the_field( 'text', 185 ); ?></p>
                <div class = "event-information-btn">
                    <a class = "link-more-information" href = "<?php the_field( 'button_link', 185 ); ?>" blank = "">Find out</a>
                        <i class="fas fa-angle-double-right"></i>
                </div>
                
            </div>
        </div>




    

    
            <?php the_content(); ?>
            
	    </div><!-- .entry-content -->


</div> <!-- about-content-container -->