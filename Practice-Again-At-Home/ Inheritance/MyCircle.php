<?php

include_once("MyShape.php");

class MyCircle extends MyShape
{
    protected $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius ** 2 * pi();
    }

    public function calculatePerimeter()
    {
        return 2*pi()*$this->radius;
    }
}