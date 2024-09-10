<?php

use WPframework\Component\App;

if ( file_exists( dirname( __DIR__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __DIR__ ) . '/vendor/autoload.php';
} else {
    exit( 'Cannot find the vendor autoload file.' );
}

if ( ! defined( 'RAYDIUM_ENVIRONMENT_TYPE' ) ) {
    define( 'RAYDIUM_ENVIRONMENT_TYPE', null );
}


// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', true);


/* That's all, stop editing! Happy publishing. */

App::init( dirname( __DIR__ ) )
    ->overrides()
    ->init( RAYDIUM_ENVIRONMENT_TYPE );

$table_prefix = env( 'DB_PREFIX' );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}


require_once ABSPATH . 'wp-settings.php';
