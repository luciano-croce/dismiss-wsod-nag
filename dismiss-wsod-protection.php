<?php
/*
 Plugin Name:       Dismiss WSoD Protection
 Plugin URI:        https://github.com/luciano-croce/dismiss-wsod-protection/
 Description:       Dismiss <em>coming soon</em> "<strong>WSoD</strong>" Protection (White Screen of Death) when it is activated, or if it is in mu-plugins directory.
 Version:           0.0.1
 Requires at least: 5.1-beta1
 Tested up to:      5.2
 Requires PHP:      5.2.4
 Author:            Luciano Croce
 Author URI:        https://github.com/luciano-croce/
 License:           GPLv2 or later
 License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 Text Domain:       dismiss-wsod-protection
 Domain Path:       /languages
 GitHub Plugin URI: https://github.com/luciano-croce/dismiss-server-nag/
 GitHub Branch:     master
 Requires WP:       5.1-beta1
 */

define ( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

add_filter( 'wp_fatal_error_handler',         '__return_false' ); # unofficial
add_filter( 'wp_fatal_error_handler_enabled', '__return_false' );

remove_filter( 'fatal_error_handler', 'wp_fatal_error_handler' ); # unofficial
