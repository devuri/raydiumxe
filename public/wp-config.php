<?php

use WPframework\App;

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
} else {
    exit('Cannot find the vendor autoload file.');
}


if (! defined('RAYDIUM_ENVIRONMENT_TYPE')) {
    define('RAYDIUM_ENVIRONMENT_TYPE', null);
}


/* That's all, stop editing! Happy publishing. */

App::init(dirname(__DIR__))->app(RAYDIUM_ENVIRONMENT_TYPE);

$table_prefix = env('DB_PREFIX');

if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
