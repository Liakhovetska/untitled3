<?php
require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Circle.php';
require_once __DIR__ . '/Rectangle.php';

try {
    $rectangle = new Rectangle(5, 10);
    echo "Rectangle:\n";
    echo "Length: " . $rectangle->getLength() . "\n";
    echo "Width: " . $rectangle->getWidth() . "\n";
    echo "Area: " . $rectangle->getArea() . "\n";
    echo "Perimeter: " . $rectangle->getPerimeter() . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error creating Rectangle: " . $e->getMessage() . "\n";
}

try {
    $circle = new Circle(7);
    echo "\nCircle:\n";
    echo "Radius: " . $circle->getRadius() . "\n";
    echo "Area: " . $circle->getArea() . "\n";
    echo "Circumference: " . $circle->getPerimeter() . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error creating Circle: " . $e->getMessage() . "\n";
}