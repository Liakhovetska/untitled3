<?php

echo "from 1 to 10:\n";
$num = 1;
while ($num <= 10) {
    echo $num . " ";
    $num++;
}
echo "\n\n";


echo "5!:\n";
$number = 5;
$factorial = 1;
while ($number > 1) {
    $factorial *= $number;
    $number--;
}
echo "5!: " . $factorial . "\n\n";


echo "Even numbers from 1 to 20:\n";
$num = 1;
while ($num <= 20) {
    if ($num % 2 === 0) {
        echo $num . " ";
    }
    $num++;
};
echo PHP_EOL;
echo "End of numbers from 1 to 20." . PHP_EOL;


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