<?php

class PrintText
{
    protected string $text = "some text";

    public function print() :bool
    {
        echo ucfirst($this->text) . PHP_EOL;
        return true;
    }
}

class PrintUpperText extends PrintText
{
    public function print() :bool
    {
        echo strtoupper($this->text);
        return true;
    }
}

$textPrinter = new PrintText();
$textPrinter->print() . PHP_EOL;

$capitalTextPrinter = new PrintUpperText();
$capitalTextPrinter->print() . PHP_EOL;