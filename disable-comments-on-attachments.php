<?php
/*
 * Plugin Name: Disable Comments on Attachments
 * Plugin URI: https://asif.im/
 * Description: Disable Comments on Attachments Pages
 * Version: 0.1.1
 * Author: M Asif Rahman
 * Author URI: https://asif.im/
 * License: GPLv2+
 * Text Domain: disable-comments-on-attachments
 * Min WP Version: 2.5.0
 * Max WP Version: 4.8
 */

function disable_comments_on_attachments( $open, $post_id = null) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'disable_comments_on_attachments', 10 , 2 );

?>