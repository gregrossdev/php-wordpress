<?php
//
///*
//Plugin Name: Tutorial HEll
//*/
//
////_________________________________________________________________________________________
//// https://tommcfarlin.com/customizing-the-wordpress-administration-menu/
//
//add_filter('custom_menu_order', 'acme_reorder_admin_menu', 10, 1);
//add_filter('menu_order', 'acme_reorder_admin_menu', 10, 1);
///**
// * Reorders and cleans up the administration menu to make it more user-friendly.
// *
// * @param array $menuOrder The current array of menu items.
// * @return array            An updated order of the items that correspond to the menu.
// *
// * @link   https://codex.wordpress.org/Plugin_API/Filter_Reference/custom_menu_order
// */
//function acme_reorder_admin_menu($menuOrder)
//{
//    if (!$menuOrder) {
//        return true;
//    }
//
//    return array(
//        'index.php',
//        'separator1',
//        'edit.php?post_type=page',
//        'edit.php?post_type=acme_homepage',
//        'edit.php?post_type=acme_about',
//        'edit.php?post_type=acme_profile',
//        'separator2',
//        'upload.php',
//        'separator3',
//        'themes.php',
//        'plugins.php',
//        'users.php',
//        'tools.php',
//        'options-general.php',
//        'separator-last',
//    );
//
////    return array(
////        'index.php',
////        'separator1',
////        'edit.php?post_type=page',
////        'edit.php?post_type=acme_homepage',
////        'edit.php?post_type=acme_about',
////        'edit.php?post_type=acme_profile',
////        'separator2',
////        'upload.php',
////        'separator3',
////        'themes.php',
////        'plugins.php',
////        'users.php',
////        'tools.php',
////        'options-general.php',
////        'separator-last',
////    );
//}
//
//
////_________________________________________________________________________________________________________________
//// https://code.tutsplus.com/articles/customizing-the-wordpress-admin-custom-admin-menus--wp-33200
//
//// Rename Posts to News in Menu
//function wptutsplus_change_post_menu_label() {
//    global $menu;
//    global $submenu;
//    $menu[5][0] = 'News';
//    $submenu['edit.php'][5][0] = 'News Items';
//    $submenu['edit.php'][10][0] = 'Add News Item';
//}
//add_action( 'admin_menu', 'wptutsplus_change_post_menu_label' );
//
//
//// Edit submenus
//function wptutsplus_change_post_object_label() {
//    global $wp_post_types;
//    $labels = &$wp_post_types['post']->labels;
//    $labels->name = 'News';
//    $labels->singular_name = 'News Item';
//    $labels->add_new = 'Add News Item';
//    $labels->add_new_item = 'Add News Item';
//    $labels->edit_item = 'Edit News Item';
//    $labels->new_item = 'News Item';
//    $labels->view_item = 'View News Item';
//    $labels->search_items = 'Search News Items';
//    $labels->not_found = 'No News Items found';
//    $labels->not_found_in_trash = 'No News Items found in Trash';
//}
//add_action( 'admin_menu', 'wptutsplus_change_post_object_label' );
//
//// Remove Comments menu item for all but Administrators
//function wptutsplus_remove_comments_menu_item() {
//    $user = wp_get_current_user();
//    if ( ! $user->has_cap( 'manage_options' ) ) {
//        remove_menu_page( 'edit-comments.php' );
//    }
//}
//add_action( 'admin_menu', 'wptutsplus_remove_comments_menu_item' );
//
//
//// Move Pages above Media
//function wptutsplus_change_menu_order( $menu_order ) {
//    return array(
//        'index.php',
//        'edit.php',
//        'edit.php?post_type=page',
//        'upload.php',
//    );
//}
//add_filter( 'custom_menu_order', '__return_true' );
//add_filter( 'menu_order', 'wptutsplus_change_menu_order' );
//
////_________________________________________________________________________________________________________________
//// https://code.tutsplus.com/articles/customizing-the-wordpress-admin-the-dashboard--wp-33110
//
//// remove unwanted dashboard widgets for relevant users
//function wptutsplus_remove_dashboard_widgets() {
////    $user = wp_get_current_user();
////    if ( ! $user->has_cap( 'manage_options' ) ) {
////        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
////        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
////        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
////        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
////        remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
////    }
//
//    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
//    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
//    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
//
//
//}
//add_action( 'wp_dashboard_setup', 'wptutsplus_remove_dashboard_widgets' );
//
//// Move the 'Right Now' dashboard widget to the right hand side
//function wptutsplus_move_dashboard_widget() {
//    $user = wp_get_current_user();
//    if ( ! $user->has_cap( 'manage_options' ) ) {
//        global $wp_meta_boxes;
//        $widget = $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'];
//        unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
//        $wp_meta_boxes['dashboard']['side']['core']['dashboard_right_now'] = $widget;
//    }
//}
//add_action( 'wp_dashboard_setup', 'wptutsplus_move_dashboard_widget' );
//
//
//// add new dashboard widgets
//function wptutsplus_add_dashboard_widgets() {
//    wp_add_dashboard_widget( 'wptutsplus_dashboard_welcome', 'Welcome', 'wptutsplus_add_welcome_widget' );
//    wp_add_dashboard_widget( 'wptutsplus_dashboard_links', 'Useful Links', 'wptutsplus_add_links_widget' );
//}
//function wptutsplus_add_welcome_widget(){ ?>
<!---->
<!--    This content management system lets you edit the pages and posts on your website.-->
<!---->
<!--    Your site consists of the following content, which you can access via the menu on the left:-->
<!---->
<!--    <ul>-->
<!--        <li><strong>Pages</strong> - static pages which you can edit.</li>-->
<!--        <li><strong>Posts</strong> - news or blog articles - you can edit these and add more.</li>-->
<!--        <li><strong>Media</strong> - images and documents which you can upload via the Media menu on the left or within each post or page.</li>-->
<!--    </ul>-->
<!---->
<!--    On each editing screen there are instructions to help you add and edit content.-->
<!---->
<?php //}
//
//function wptutsplus_add_links_widget() { ?>
<!---->
<!--    Some links to resources which will help you manage your site:-->
<!---->
<!--    <ul>-->
<!--        <li><a href="http://wordpress.org">The WordPress Codex</a></li>-->
<!--        <li><a href="http://easywpguide.com">Easy WP Guide</a></li>-->
<!--        <li><a href="http://www.wpbeginner.com">WP Beginner</a></li>-->
<!--    </ul>-->
<?php //}
//add_action( 'wp_dashboard_setup', 'wptutsplus_add_dashboard_widgets' );
//
//

//_________________________________________________________________________________________________________________
// https://developer.wordpress.org/apis/handbook/dashboard-widgets/#removing-default-dashboard-widgets
// # REMOVE WIDGETS from dashboard

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

//_________________________________________________________________________________________________________________
// https://developer.wordpress.org/apis/handbook/dashboard-widgets/#removing-default-dashboard-widgets
// # REMOVE MENUS from admin side panel

add_action( 'admin_menu', 'remove_menus' );

function remove_menus() {
    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'jetpack' );                    //Jetpack*
//    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
//    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
//    remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
}