<?php

/**
 * Autoloader file. in this file all classes will be stored.
 */

function autoloader( $className ) {
    // Base Directory Path
    $baseDir = __DIR__ . '/../classes/';

    // Convert directory path to file path
    $filePath = $baseDir . str_replace( '\\', '/', $className ) . '.php';

    // check if file exists then require the file
    if ( file_exists( $filePath ) ) {
        require_once $filePath;
    }
}

// Register this autoload function
spl_autoload_register( 'autoloader' );

// Instantiate the classes
$enqueueAssets = new Enqueue_Assets();

?>