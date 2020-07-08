<?php

include_once("MyRectangle.php");

class MySquare extends MyRectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);

    }
}