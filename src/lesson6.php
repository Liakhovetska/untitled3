<?php

$length = 10;
$min = 1;
$max = 10;
function randomArray($length, $min, $max) {
    $randomArray = [];
    for ($i = 0; $i < $length; $i++) {
        $randomArray[] = rand($min, $max);
    }
    return $randomArray;
}

function findMax($array) {
    $max = 1;
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

function findMin($array) {
    $min = 1;
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

function sortArray($array) {
    sort($array);
    return $array;
}

$randomArray = randomArray($length, $min, $max);

$maxValue = findMax($randomArray);
$minValue = findMin($randomArray);


echo "Array: " . print_r($randomArray,true) . PHP_EOL;
echo "Max element: " . $maxValue . PHP_EOL;
echo "Min element: " . $minValue . PHP_EOL;

$sortedArray = sortArray($randomArray);

echo "Sorted array: " . implode(", ", $sortedArray) . PHP_EOL;



function fibonacciGenerator($max_value) {
    $a = 0;
    $b = 1;

    while ($a < $max_value) {
        yield $a;
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
}

$max_value = 100;

foreach (fibonacciGenerator($max_value) as $fibonacci_number) {
    echo $fibonacci_number . " ";
}