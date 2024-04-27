<?php

$myArray = [];
$size = 10;

for ($i = 0; $i < $size; $i++) {
    $myArray[$i] = rand(1, 10);
}


$sum = 0;
foreach ($myArray as $num) {
    $sum += $num;
}
echo "$sum\n" . PHP_EOL;


$product = 1;
foreach ($myArray as $num) {
    $product *= $num;
}
echo "$product\n" . PHP_EOL;


$countFive = 0;
foreach ($myArray as $num) {
    if ($num === 5) {
        $countFive++;
    }
}
echo "$countFive\n" . PHP_EOL;


echo "Numbers that are divisible by 3:\n";
foreach ($myArray as $num) {
    if ($num % 3 === 0) {
        echo $num . "\n";
    }
};