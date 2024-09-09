<?php

use WPframework\Component\Kernel;

if ( file_exists( \dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once \dirname( __FILE__ ) . '/vendor/autoload.php';
} else {
    exit( 'Cant find the vendor autoload file.' );
}

/**
 * Override for .env setup of `WP_ENVIRONMENT_TYPE`.
 *
 * This is optional; if you prefer to use the .env file, set this to null or remove it.
 *
 * @var string|null RAYDIUM_ENVIRONMENT_TYPE The environment type, can be null to use the .env file setup.
 */
if ( ! defined( 'RAYDIUM_ENVIRONMENT_TYPE' ) ) {
	define( 'RAYDIUM_ENVIRONMENT_TYPE', null );
}

$raydium_http_app = http_component_kernel( __DIR__ );

$raydium_http_app->overrides();

$raydium_http_app->init( RAYDIUM_ENVIRONMENT_TYPE );

$table_prefix = env( 'DB_PREFIX' );
