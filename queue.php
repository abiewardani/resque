<?php
require 'vendor/autoload.php';

date_default_timezone_set('GMT');
Resque::setBackend('127.0.0.1:6379');


$args = array(
    'host' => $argv[2],
);


$jobId = Resque::enqueue('default', $argv[1], $args, true);
echo "Queued job ".$jobId."\n\n";