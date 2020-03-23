<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary " class="content-area">
		<main id="main" class="site-main contact-main" role="main">
            <div id="contact-page" class="contact-logo">
            <?php echo '<img src='.  get_stylesheet_directory_uri() ."/Icons/logo-white.png".' alt="logo white">';
            ?></div>
            <div class="contact-content">
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
            </div>
    <div class="contact-form">
            <form name="contactform" method="post" action="">
                <label for="first_name">First Name </label>
                
                <input  type="text" name="first_name" maxlength="50" size="30">
  <label for="last_name">Last Name </label>
  
  <input  type="text" name="last_name" maxlength="50" size="30">
  <label for="email">Email Address </label>
  
  <input  type="text" name="email" maxlength="80" size="30">

  <label for="comments">Message </label>
  
  <textarea class="message" name="comments" maxlength="1000" cols="25" rows="6"></textarea> <td colspan="2" style="text-align:center">
  <input class="send-email" type="submit" value="Submit">  
</form>
<div  class="mail-result">
<?php
if(isset($_POST['email'])) {
    
    $email_to = "armiaafsharian@gmail.com";
    $email_subject = "katakara messages";
    
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    
    
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
    
    
    
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  
    $string_exp = "/^[A-Za-z .'-]+$/";
    
    if(!preg_match($string_exp,$first_name)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }
    
    if(!preg_match($string_exp,$last_name)) {
        $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }
    
    if(strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }
    
    if(strlen($error_message) > 0) {
        died($error_message);
    }
    
    $email_message = "Form details below.\n\n";
    
    
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
    
    
    
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);  
    ?>
 
 <!-- include your own success html here -->
 
 < class="submited">Thank you for contacting us. We will be in touch with you very soon.</>
 
 <?php
 
}
?>
 </div>
  </div>
            <div class="contact-ad">
            <h1>come visit us.</h1>
            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2610.3065162993516!2d-122.31389488431577!3d49.13780447931589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548433f95a74b659%3A0x10f4057ff8cf5483!2s7487%20Birch%20St%2C%20Mission%2C%20BC%20V2V%203P9!5e0!3m2!1sen!2sca!4v1583891038771!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <p class="contact-address"><i class="fas fa-map-marker-alt"></i>7487 brich st mission , british columbia</p>
            </div>
        </main><!-- #main -->
	</div><!-- #primary -->
    
    <?php get_footer(); ?>
    