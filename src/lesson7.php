<?php

//1
if ($argv < 2) {
    echo "Arguments is empty.\n";
    return;
}

$fileName = "lesson7_arguments.txt";
$file = fopen($fileName, "a");

fwrite($file, implode(" ", array_slice($argv, 1)) . "\n");

fclose($file);

echo "These arguments written to file: $fileName.\n";

//2
echo "Read arguments from file: $fileName.\n";
$arguments = array_slice(file($fileName), -1);

foreach ($arguments as $argument) {
    echo trim($argument) . PHP_EOL;
}