?php

class Rectangle extends Figure
{
private int $length;
private int $width;

public function __construct(int $length, int $width)
{
if ($length <= 0 || $width <= 0) {
throw new InvalidArgumentException("Length and width must be positive numbers.");
}
$this->length = $length;
$this->width = $width;
}

public function area()
{
return $this->length * $this->width;
}

public function perimeter()
{
return 2 * ($this->length + $this->width);
}

public function getArea()
{
return $this->area();
}

public function getPerimeter()
{
return $this->perimeter();
}

public function getLength()
{
return $this->length;
}

public function getWidth()
{
return $this->width;
}
}