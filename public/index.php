<?php

/**
 * Define whether to use WordPress themes.
 */
define( 'WP_USE_THEMES', true );

/**
 * Define lightweight framework mode.
 */
define( 'HYBRIDX', false );

/**
 * Bootstrap the application.
 */
if ( defined( 'HYBRIDX' ) && true === constant( 'HYBRIDX' ) ) {
    require __DIR__ . '/wp-config.php';
} elseif ( file_exists( __DIR__ . '/wp/wp-blog-header.php' ) ) {
    require __DIR__ . '/wp/wp-blog-header.php';
} else {
    exit( "Looks like the framework is not set up. Run setup or composer install." );
}
