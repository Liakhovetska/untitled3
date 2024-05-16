<?php

trait Logging
{
    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] $message\n";
    }
}