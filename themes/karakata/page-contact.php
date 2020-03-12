<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main contact-main" role="main">
            <div class="contact-logo">
            <?php echo '<img src='.  get_stylesheet_directory_uri() ."/icons/logo-white.png".' alt="logo white">';
            ?></div>
			<?php while ( have_posts() ) : the_post(); ?>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                    'after'  => '</div>',
                ) );
                ?>
	        </div><!-- .entry-content -->

			<?php endwhile; // End of the loop. ?>
            <div class="contact-form">
            <form action="mailto:someone@example.com" method="post" enctype="text/plain">
                First Name:<br> 
                <input type="text" name="first_name"><br>
                Last Name:<br>
                 <input type="text" name="last_name"><br>
                E-mail:<br>
                <input type="text" name="mail"><br>
                message:<br>
                <input class="message" type="text" name="comment" size="50"><br><br>
                <input class='send-email' type="submit" value="Submit">
                </form>
            </div>
            <h1>come with us.</h1>
            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2610.3065162993516!2d-122.31389488431577!3d49.13780447931589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548433f95a74b659%3A0x10f4057ff8cf5483!2s7487%20Birch%20St%2C%20Mission%2C%20BC%20V2V%203P9!5e0!3m2!1sen!2sca!4v1583891038771!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <p class="contact-address"><i class="fas fa-map-marker-alt"></i>7487 brich st mission , british columbia</p>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
