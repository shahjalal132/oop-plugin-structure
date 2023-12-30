<?php

/**
 * Enqueue Assets
 */

class Enqueue_Assets {
    public function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_css'] );
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_js'] );
    }

    public function enqueue_css() {
        // Register Styles
        wp_register_style( 'jalal-style', OOP_PLUGIN_URI . '/assets/css/jalal-style.css', [], filemtime( OOP_PLUGIN_PATH . '/assets/css/jalal-style.css' ), 'all' );

        // Enqueue Styles
        wp_enqueue_style( 'jalal-style' );
    }

    public function enqueue_js() {
        // Register Scripts
        wp_register_script( 'jalal-script', OOP_PLUGIN_URI . '/assets/js/jalal-main.js', ['jquery'], filemtime( OOP_PLUGIN_PATH . '/assets/js/jalal-main.js' ), true );

        // Enqueue Scripts
        wp_enqueue_script( 'jalal-script' );
    }

}