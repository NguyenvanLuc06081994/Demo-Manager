<?php

include_once("MyCircle.php");

class MyCylinder extends MyCircle
{
    protected $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculatePerimeter() * $this->height + parent::calculateArea() * $this->height;
    }
}