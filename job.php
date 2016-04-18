<?php
class Ping_Job
{
    public function perform()
    {
        $host_pinged = $this->args['host'];
        echo "\n ==== \n pinging $host_pinged \n";
 }

    public function tearDown()
    {
        Resque_Event::clearListeners();
    }
}
