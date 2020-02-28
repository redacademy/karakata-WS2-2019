<?php
/**
 * The about Kitchen of the AVR page.
 *
 * @package RED_Starter_Theme
 */
?>
 

<?php get_header(); ?>




<div id="primary" class="content-area">
    <main id="main" class="site-main avr-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'african-village-retreat' ); ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer() ?>