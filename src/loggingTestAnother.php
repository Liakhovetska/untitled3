<?php

class LoggingTestAnother
{
    use Logging;

    public function echoLog()
    {
        $this->log("Logging test another.");
    }
}