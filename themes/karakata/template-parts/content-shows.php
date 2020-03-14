
<div class='main-content-container'>

    <h1 class='intro-title'>
        <?php the_title() ?>
    </h1>
    <div class='inner-nav'> 
        <div class = 'inner-nav-container shows-nav'>
            <?php wp_nav_menu( array( 'menu' => 'music' ) ); ?>
        </div>
    </div>

    <div class='music-event-content-container'>
        
        <?php $args =  array(
            'post_type' => 'event_post_type',
            'tax_query' => array(
                array(
                    'taxonomy' => 'show',
                    'field'    => 'slug',
                    'terms'    => 'event',
                    'operator' => 'NOT EXISTS'
                ),
            ),
        ); 
        ?>
            <?php

            $the_query = new WP_Query( $args );
            
            if ( $the_query->have_posts() ) {
            
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

                    echo '<div class = "event-container">';

                        echo '<div class="event-img-container" style="background-image: url(' . $featured[0] . ')">';
                            echo '<div class="event-price-container">';
                                echo get_field('price');
                            echo '</div>';
                        echo '</div>';
                        
                        echo '<div class="event-content-container">';
                                
                            echo '<div class="event-content-info">';
                                echo '<div class="event-date-container">';
                                    echo '<div class="event-date">' . get_field('event_date') . '</div>';
                                echo '</div>';
                                echo '<div class="event-content-info-container">';
                                    echo '<div class="event-title info">' . get_the_title() . '</div>';
                                    echo '<div class="event-address info"><span><img src="' . get_template_directory_uri() . '/Icons/Location.png'  . '"></span>' . get_field('event_address') . '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<a class="event-button" href="' . get_home_url() . '/contact">Find Out</a>';

                        echo '</div>';
                    echo '</div>';
                }
            } 
            else {
                // no posts found
            }
            wp_reset_postdata();
            
            ?>
    </div>
</div>

