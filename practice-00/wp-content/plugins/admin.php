<?php

/*
Plugin Name: Headless Admin
Description: Headless Wordpress Admin - Using Gutenberg Blocks as a Page Builder
Author: gregross.dev
Version: 0.0.1
Author URI: http://gregross.dev
*/

add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

function my_admin_theme_style()
{
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}

//// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // //
//add_action( 'admin_menu', 'my_admin_menu' );
//
//function my_admin_menu() {
//    add_menu_page( 'My Top Level Menu Example', 'Top Level Menu', 'manage_options', 'myplugin/myplugin-admin-page.php', 'myplugin_admin_page', 'dashicons-tickets', 6  );
////    add_submenu_page( 'myplugin/myplugin-admin-page.php', 'My Sub Level Menu Example', 'Sub Level Menu', 'manage_options', 'myplugin/myplugin-admin-sub-page.php', 'myplugin_admin_page' );
//}
//

