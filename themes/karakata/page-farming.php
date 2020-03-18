<?php $featuredimg = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full' )?>


<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main avr-main" role="main" style="background-image: url('<?php echo $featuredimg[0] ?>')">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'african-vilage-farming' ); ?>

			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
