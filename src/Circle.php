<?php

class Circle extends Figure
{
    private $radius;

    public function __construct(int $radius)
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be a positive number.");
        }
        $this->radius = $radius;
    }

    public function area()
    {
        return M_PI * pow($this->radius, 2);
    }

    public function perimeter()
    {
        return 2 * M_PI * $this->radius;
    }

    public function getArea()
    {
        return $this->area();
    }

    public function getPerimeter()
    {
        return $this->perimeter();
    }

    public function getRadius()
    {
        return $this->radius;
    }
}