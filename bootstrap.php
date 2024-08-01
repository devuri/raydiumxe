<?php

use WPframework\Component\Kernel;

if ( file_exists( \dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once \dirname( __FILE__ ) . '/vendor/autoload.php';
} else {
    exit( 'Cant find the vendor autoload file.' );
}

define( 'RAYDIUM_ENVIRONMENT_TYPE', null );

$raydium_http_app = http_component_kernel( __DIR__ );

$raydium_http_app->overrides();

$raydium_http_app->init( RAYDIUM_ENVIRONMENT_TYPE );

$table_prefix = env( 'DB_PREFIX' );
