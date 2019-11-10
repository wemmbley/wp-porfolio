<?php

try {
    require_once 'vendor/autoload.php';

    $app_config = [
        \Portfolio\App\Assets\Assets::class,
    ];

    $boot = \Portfolio\App\Bootstrap::load( $app_config );

    ?>
    <!DOCTYPE html>
        <html lang="en" class="no-js">
            <body>
    <?php
    get_header();

    require_once 'blocks/header-block.php';
    require_once 'blocks/banner-block.php';
    require_once 'blocks/about-block.php';
    require_once 'blocks/services-block.php';
    require_once 'blocks/fact-block.php';
    require_once 'blocks/porfolio-block.php';
    require_once 'blocks/testimonial-block.php';
    require_once 'blocks/price-block.php';
    require_once 'blocks/blog-block.php';
    require_once 'blocks/brands-block.php';

    get_footer();
    ?>
            </body>
    </html>
    <?

} catch ( Exception $exception ) {
    if( WP_DISPLAY_ERRORS ) {
        echo $exception->getMessage();
        exit;
    }

    error_log( $exception->getMessage() );
}