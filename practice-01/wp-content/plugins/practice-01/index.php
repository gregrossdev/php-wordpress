<?php

/*
Plugin Name: practice-01
*/

add_action( 'wp_dashboard_setup', 'wporg_remove_all_dashboard_metaboxes' );

function wporg_remove_all_dashboard_metaboxes()
{
    // Remove Welcome panel
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // Remove the rest of the dashboard widgets
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
}

/*
 * Admin Main & Sub-Menus (Sidebar)
 -----------------------------------------
 -----------------------------------------*/

add_action( 'admin_menu', 'remove_menus' );
add_action( 'admin_init', 'remove_sub_menus' );

function remove_menus() {
    remove_menu_page( 'index.php' );
    remove_menu_page( 'jetpack' );
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'upload.php' );
//    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit-comments.php' );
//    remove_menu_page( 'themes.php' );
//    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'users.php' );
    remove_menu_page( 'tools.php' );
//    remove_menu_page( 'options-general.php' );
}

function remove_sub_menus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
}

/*
 * Gutenberg Editor Blocks
 ------------------------------
 ------------------------------*/

/* enable/disable blocks */

//add_filter('allowed_block_types', 'gutenberg_allowed_blocks');
//
//function gutenberg_allowed_blocks()
//{
//    return array(
//        'core/paragraph', // Paragraph Block
//        'core/freeform',
//    );
//}

///* enable/disable blocks by type */
//add_filter('allowed_block_types', 'gutenberg_allowed_block_types', 10, 2);
//
//function gutenberg_allowed_block_types($allowed_block_types, $post)
//{
//    if ($post->post_type === 'post') {
//        $allowed_block_types = array(
//            'core/freeform', // Classic Editor Block
//        );
//    }
//    return $allowed_block_types;
//}



