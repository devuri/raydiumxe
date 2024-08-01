<?php

use WPframework\Component\Kernel;

if (file_exists(\dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once \dirname(__FILE__) . "/vendor/autoload.php";
} else {
    exit("Can't find the vendor autoload file.");
}

$raydium_http = http_component_kernel(__DIR__);

$raydium_http->overrides();

$raydium_http->init();

$table_prefix = env("DB_PREFIX");
