<?php

/* Function to enqueue stylesheet from parent theme */

function child_enqueue__parent_scripts() {

wp_enqueue_style( ‘parent’, get_template_directory_uri().’/style.css’ );

}

add_action( ‘wp_enqueue_scripts’, ‘child_enqueue__parent_scripts’);


// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');