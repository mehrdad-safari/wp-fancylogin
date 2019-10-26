<?php
/*
Plugin Name: MS Fancy Login
Plugin URI: https://wp-premium.com/fancy-login/
Description: This plugin changes the theme on your wp-login.php page and make it look interesting.
Author: Mehrdad Safari
Version: 1
Author URI: https://wp-premium.com/
*/



function wpremium_fancy_login_stylesheet() {
    
    wp_enqueue_style( 'fancy-login', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );
    wp_enqueue_script( 'fancy-login-script-tweenamx', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', array(), null, true );
    wp_enqueue_script( 'fancy-login-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array(), '1.0.0', true );

}

add_action( 'login_enqueue_scripts', 'wpremium_fancy_login_stylesheet' );