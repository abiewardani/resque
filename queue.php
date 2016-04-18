

<?php
if(empty($argv[1])) {
    die('Specify the name of a job to add. e.g, php queue.php Ping_Job google.com');
}

require 'vendor/autoload.php';

date_default_timezone_set('GMT');
Resque::setBackend('127.0.0.1:6379');

$args = array(
    'host' => $argv[2],
);

$jobId = Resque::enqueue('default', $argv[1], $args, true);
echo "Queued job ".$jobId."\n\n";