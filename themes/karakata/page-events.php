<?php
/**
 * The about part of the AVR page.
 *
 * @package RED_Starter_Theme
 */
?>
<?php $featuredimg = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full' )?>
<?php get_header(); ?>



<div id="primary" class="content-area event-content">
	<main id="main" class="site-main events-main" role="main" >
		
		
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class='events-heading'><?php the_content(); ?></h1>
    <?php get_template_part( 'template-parts/content', 'events' ); ?>

    <?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->



<?php get_footer() ?>