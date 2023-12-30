<?php

/*
 * Plugin Name:       oop-plugin-structure
 * Plugin URI:        #
 * Description:       A brief description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shah jalal
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       oop-plugin-structure
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define plugin path
if ( !defined( 'OOP_PLUGIN_PATH' ) ) {
    define( 'OOP_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

// Define plugin uri
if ( !defined( 'OOP_PLUGIN_URI' ) ) {
    define( 'OOP_PLUGIN_URI', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
}



// Include important files file
require OOP_PLUGIN_PATH . '/inc/helpers/Autoloader.php';
require OOP_PLUGIN_PATH . '/inc/helpers/Template-Tags.php';

?>