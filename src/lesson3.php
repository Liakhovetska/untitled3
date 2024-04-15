<?php

$number1 = 1;
$number2 = 1;

$result = $number1 == $number2;

var_dump($result);


$number1 = 1;
$number2 = 1;

$result = $number1 === $number2;

var_dump($result);


$number1 = '';
$number2 = false;

$result = $number1 == $number2;

var_dump($result);


$number1 = '';
$number2 = false;

$result = $number1 !== $number2;

var_dump($result);


$number1 = 1;
$number2 = '1';

$result = $number1 == $number2;

var_dump($result);


$number1 = 1;
$number2 = '1';

$result = $number1 === $number2;

var_dump($result);


$number1 = 5;
$number2 = false;

$result = $number1 == $number2;

var_dump($result);


$number1 = 5;
$number2 = false;

$result = $number1 === $number2;

var_dump($result);


$number1 = 1;
$number2 = null;

$result = $number1 != $number2;

var_dump($result);


$number1 = 1;
$number2 = null;

$result = $number1 === $number2;

var_dump($result);




$code = true;
switch ($code) {
    case 1:
        echo 'green' . PHP_EOL;
        break;
    case 2:
        echo 'red' . PHP_EOL;
        break;
    case 3:
        echo 'blue' . PHP_EOL;
        break;
    case 4:
        echo 'brown' . PHP_EOL;
        break;
    case 5:
        echo 'violet' . PHP_EOL;
        break;
    case 6:
        echo 'black' . PHP_EOL;
        break;
    default:
        echo 'white' . PHP_EOL;
}

$result = match($code) {
    1 => 'green',
    2 => 'red',
    3 => 'blue',
    4 => 'brown',
    5 => 'violet',
    6 => 'black',
    default => 'white',

};

echo $result . PHP_EOL;


