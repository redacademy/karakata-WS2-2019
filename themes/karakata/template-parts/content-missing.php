<div class='main-content-container missing-main-content-container'>

    <div class='missing-content-container'>  
    <div class = "missing-image-container">
        <?php echo wp_get_attachment_image(135, array(500, 500) ) ?>
    </div>  
        <div class = "missing-title-container">
            <div class = "title-bar"></div>
            <h1> 404 </h1>
            <div class = "title-bar"></div>
        </div>
        <div class = "missing-p-container">
            <p>oh no, you seem to have wandered off the trail. 
                To return to the main site go the the menu 
                at the top of the page and select a link.
            </p>
            <p>Or click <a class = "homepage-link" href = "<?php echo get_home_url() ?>">here</a> to take you back to the homepage</p>
        </div>
    </div>
</div>
