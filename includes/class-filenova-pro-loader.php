<?php

/**
 * Plugin Name: FileNova PRO Loader
 * Description: Initializes the FileNova PRO plugin and manages hooks.
 */

// Ensure a safe execution.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class FileNova_PRO_Loader {
    public function __construct() {
        // Hook into WordPress
        add_action( 'plugins_loaded', array( $this, 'init' ) );
    }

    public function init() {
        // Initialization code here
    }
}

// Initialize the loader
new FileNova_PRO_Loader();
