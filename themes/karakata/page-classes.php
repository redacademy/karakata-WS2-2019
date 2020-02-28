<?php
/**
 * The classes branch page of about.
 *
 * @package RED_Starter_Theme
 */
?>
<?php
/**
 * The about farming of the AVR page.
 *
 * @package RED_Starter_Theme
 */
?>
 

<?php get_header(); ?>


<h1> FARMING PAGE </h1>



<div id="primary" class="content-area">
    <main id="main" class="site-main avr-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'african-village-retreat' ); ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer() ?>