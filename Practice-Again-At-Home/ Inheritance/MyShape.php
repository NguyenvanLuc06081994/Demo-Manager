<?php


class MyShape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I am a shpae. My name is $this->name";
    }
}