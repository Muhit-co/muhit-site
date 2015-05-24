<?php

define('DS', DIRECTORY_SEPARATOR);
if (!defined('ROOT')) {
	define('ROOT', __DIR__);
}

// load kirby
require __DIR__ . DS . 'kirby' . DS . 'bootstrap.php';

// check for a custom site.php
if (file_exists(__DIR__ . DS . 'site.php')) {
	require __DIR__ . DS . 'site.php';
} else {
	$kirby = kirby();
}

// render
echo $kirby->launch();