<?php
/**
 * Plugin Name: Hide blog
 * Plugin URI: https://github.com/fiveeightsix/fes-hide-blog
 * Description: Hides blog post functionality from the administration interface. Does not remove post data.
 * Author: Karl Inglis
 * Author URI: http://web.karlinglis.net
 * Version: 1.1.0
 */


/**
 * Hide wordpress blog post functionality.
 */

// From the admin menu
function fes_remove_posts_admin_menus() {
  remove_menu_page( 'edit.php' );
}

add_action( 'admin_menu', 'fes_remove_posts_admin_menus' );

// From the admin bar
function fes_remove_posts_admin_bar() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('new-post');
}

add_action( 'wp_before_admin_bar_render', 'fes_remove_posts_admin_bar' );
?>
