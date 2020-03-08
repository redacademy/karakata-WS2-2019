<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	<?php $lastposts = get_posts(
            array(
                'posts_per_page' => -1,
                'post_type' => 'events_post_type',
                 'category_name' => 'event'
	)); 
	if ( $lastposts ) {
		echo '<div class="events-container">';
		foreach ( $lastposts as $post ) :
			setup_postdata( $post ); ?>
			<div class="event">
			<div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
			<div class="event-info">
			<div class="date"><?php echo get_field('event_date');?></div>
			<div class="price"><?php echo get_field('price');?></div>
			<h2 class='event-title'><?php the_title();?></h2>
			<p class='event-address'><i class="fas fa-map-marker-alt"></i><?php echo get_field('event_address');?></p>
			<a href="../contact/" class='find-out'>Find out</a>
			</div></div>
		</div>
		<?php
		endforeach; 
		echo '</div>';
		wp_reset_postdata();
	}
	?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
