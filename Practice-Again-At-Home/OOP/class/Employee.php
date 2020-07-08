<?php


class Employee
{
    protected $index;
    protected $name;
    protected $age;
    protected $position;
    protected $address;

    public function __construct($index,$name,$age,$position,$address)
    {
        $this->name = $name;
        $this->index = $index;
        $this->age = $age;
        $this->position = $position;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex($index): void
    {
        $this->index = $index;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }
}