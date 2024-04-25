<?php

$radius=5;
function calculateCircleArea($radius) {
    $area = pi() * pow($radius, 2);
    return $area;
}
echo calculateCircleArea($radius) . PHP_EOL;



function power($number, $exponent) {
    return pow($number, $exponent);
}

$number = 5;
$exponent = 2;
$result = power($number, $exponent);

echo pow($number, exponent:2) . PHP_EOL;



function returnsNewNumber($num1, $num2 = 2) {
    return $num1 * $num2;
}

$newNumber = 5;
$newNumber = returnsNewNumber($newNumber);

echo $newNumber . PHP_EOL;


function  doubleNumberByReference(&$num1, $num2 = 2) {
    $num1 = $num1 * $num2;
}

$myNumber = 5;
doubleNumberByReference($myNumber);

echo $myNumber . PHP_EOL;



$a = 2;
$b = 5;
function multiply($a, $b, $callback = null) {
    $result = $a * $b;
    if ($callback instanceof Closure) {
        $callback($result);
    }
    return $result;
};
echo multiply($a, $b, $callback = null) . PHP_EOL;



$printArgument = function($arg) {
    echo $arg;};

multiply($a, $b, $printArgument) . PHP_EOL;