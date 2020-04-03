<?php
/*
 * Plugin Name: Disable Comments on Media Attachments
 * Plugin URI: https://asif.im/
 * Description: Disable Comments on Media Attachments Pages
 * Version: 0.2.0
 * Author: M Asif Rahman
 * Author URI: https://asif.im/
 * License: GPLv3
 * Text Domain: disable-comments-on-attachments
 * Min WP Version: 2.5.0
 * Max WP Version: 5.4
 */

define("WPDEV_PLUGIN_PATH",plugin_dir_path(__FILE__)); #with trailing slash (/)

include_once(WPDEV_PLUGIN_PATH.'wpdev-dashboard-widget.php');

function disable_comments_on_attachments( $open, $post_id = null) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'disable_comments_on_attachments', 10 , 2 );

?>