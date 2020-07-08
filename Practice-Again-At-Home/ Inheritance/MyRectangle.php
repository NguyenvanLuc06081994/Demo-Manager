<?php

include_once("MyShape.php");

class MyRectangle extends MyShape
{
    protected $width;
    protected $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}