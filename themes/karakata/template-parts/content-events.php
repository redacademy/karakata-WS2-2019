<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>


	<div class="entry-event">
	<?php $args =  array(
            'post_type' => 'event_post_type',
            'tax_query' => array(
                array(
                    'taxonomy' => 'show',
                    'field'    => 'slug',
                    'terms'    => 'event',
                    
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
					?>
					<div class="event">
						<div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
						<div class="event-info">
							<div class="date"><?php echo get_field('event_date');?></div>
							<div class="price"><?php echo get_field('price');?></div>
							<h2 class='event-title'><?php the_title();?></h2>
							<p class='event-address'><i class="fas fa-map-marker-alt"></i><?php echo get_field('event_address');?></p>
							<a href="../contact/" class='find-out'>Find out</a>
						</div></div>
					<?php
                } while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					?>
					<div class="event">
						<div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
						<div class="event-info">
							<div class="date"><?php echo get_field('event_date');?></div>
							<div class="price"><?php echo get_field('price');?></div>
							<h2 class='event-title'><?php the_title();?></h2>
							<p class='event-address'><i class="fas fa-map-marker-alt"></i><?php echo get_field('event_address');?></p>
							<a href="../contact/" class='find-out'>Find out</a>
						</div></div>
					<?php
                } while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					?>
					<div class="event">
						<div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
						<div class="event-info">
							<div class="date"><?php echo get_field('event_date');?></div>
							<div class="price"><?php echo get_field('price');?></div>
							<h2 class='event-title'><?php the_title();?></h2>
							<p class='event-address'><i class="fas fa-map-marker-alt"></i><?php echo get_field('event_address');?></p>
							<a href="../contact/" class='find-out'>Find out</a>
						</div></div>
					<?php
                } while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					?>
					<div class="event">
						<div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
						<div class="event-info">
							<div class="date"><?php echo get_field('event_date');?></div>
							<div class="price"><?php echo get_field('price');?></div>
							<h2 class='event-title'><?php the_title();?></h2>
							<p class='event-address'><i class="fas fa-map-marker-alt"></i><?php echo get_field('event_address');?></p>
							<a href="../contact/" class='find-out'>Find out</a>
						</div></div>
					<?php
                }
            } 
            else {
                // no posts found
            }
            wp_reset_postdata();
            
            ?>
	</div><!-- .entry-content -->
