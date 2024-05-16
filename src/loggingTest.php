<?php

class LoggingTest
{
    use Logging;

    public function logMessage()
    {
        $this->log("Logging message test");
    }
}