<?php
/**
 * The about part of the AVR page.
 *
 * @package RED_Starter_Theme
 */
?>

<?php $featuredimgRetreat = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full' )?>

 

<?php get_header(); ?>




<div id="primary" class="content-area">
	<main id="main" class="site-main avr-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'african-village-retreat' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

	<div class="entry-content">
	<?php the_content(); ?>
	</div><!-- .entry-content -->


<?php get_footer() ?>