<?php

   /*
   Plugin Name: login-customizer-css
   Plugin URI:
   description: provides customizable sass files that have already
   been enqued, that allow you to customize the login page
   Version: 1.0
   Author: Phillip Chadwick
   Author URI: 
   License: GPL2
   */

function inhhabitent_login_scripts() {
    wp_enqueue_style( 'custom-login', plugin_dir_url (__FILE__) . 'css/login.css' );
}
add_action( 'login_enqueue_scripts', 'inhhabitent_login_scripts' );

?>