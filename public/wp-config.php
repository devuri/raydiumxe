<?php

use WPframework\Component\App;

// This is the bootstrap file for the web application.
if ( file_exists( \dirname( __FILE__ ) . '/../vendor/autoload.php' ) ) {
    require_once \dirname( __FILE__ ) . '/../vendor/autoload.php';
} else {
    exit( 'Cant find the vendor autoload file.' );
}


if ( ! defined( 'RAYDIUM_ENVIRONMENT_TYPE' ) ) {
	define( 'RAYDIUM_ENVIRONMENT_TYPE', null );
}

/* That's all, stop editing! Happy publishing. */

App::init( dirname( __DIR__ ) )->overrides()->init( RAYDIUM_ENVIRONMENT_TYPE );

$table_prefix = env( 'DB_PREFIX' );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once ABSPATH . 'wp-settings.php';
