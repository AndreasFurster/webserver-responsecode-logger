<?php

////
// Add your own handlers
// See: https://github.com/Seldaek/monolog/blob/master/doc/01-usage.md 
// And: https://github.com/Seldaek/monolog/blob/master/doc/02-handlers-formatters-processors.md
////

use Monolog\Handler\StreamHandler;

$log->pushHandler(new StreamHandler('webserver-responsecodes.log', Logger::WARNING));
