<?php

require_once __DIR__ . '/pkg/autoload.php';

return function () {
  echo 'Welcome to Omninf ' . (PHP_SAPI === 'cli' ? 'CLI' : 'CGI') . '!' . PHP_EOL;
};