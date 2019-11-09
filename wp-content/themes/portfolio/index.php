<?php

try {
    require_once 'vendor/autoload.php';

    $app_config = [
        \Portfolio\App\Assets\Assets::class,
    ];

    $boot = \Portfolio\App\Bootstrap::load( $app_config );

    wp_head();

    wp_footer();
} catch ( Exception $exception ) {
    if( WP_DISPLAY_ERRORS ) {
        echo $exception->getMessage();
        exit;
    }

    error_log( $exception->getMessage() );
}