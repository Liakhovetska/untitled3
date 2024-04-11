<?php

echo "Hello! What is your name? \n";
$name = trim(fgets(STDIN));
echo "$name what city are you from ? \n";
$city = trim(fgets(STDIN));
echo "name=$name . city=$city \n";

echo "Enter the first number \n";
$number1 = trim(fgets(STDIN));
echo "Enter a square number \n";
$number2 = trim(fgets(STDIN));
$result1 = ($number1 * $number2);
echo "sum  $result1 \n";
$result2 = ($number1 * $number2)/2;
echo "arithmetic mean  $result2\n";