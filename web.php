<?php

$path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if($path !== '/' && file_exists(__DIR__ . '/cgi' . $path)) return false;

require_once __DIR__ . '/cgi/index.php';
