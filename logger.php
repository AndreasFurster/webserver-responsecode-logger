<?php


require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;

// create a log channel
$log = new Logger('webserver-responsecodes');

// Load user config
require __DIR__ . '/config.php';


// Load apache logging
require __DIR__ . '/core/webservers/apache.php';

