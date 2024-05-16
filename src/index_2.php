<?php

require_once __DIR__ . '/Logging.php';
require_once __DIR__ . '/LoggingTest.php';
require_once __DIR__ . '/LoggingTestAnother.php';

$classA = new LoggingTest();
$classA->logMessage();

$classB = new LoggingTestAnother();
$classB->echoLog();