<?php
/* Admin CSS styles */
function style_admin() {
    wp_enqueue_style( 'style-admin', get_stylesheet_directory_uri() . '/style-admin.css' );
}

add_action( 'admin_enqueue_scripts', 'style_admin');