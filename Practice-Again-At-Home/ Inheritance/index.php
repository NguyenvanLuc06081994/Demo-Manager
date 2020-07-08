<?php
include_once("MyShape.php");
include_once("MyCircle.php");
include_once("MyRectangle.php");
include_once("MySquare.php");
include_once("MyCylinder.php");

$circle = new MyCircle("hinh tron", 10);
echo $circle->calculateArea();
echo "<br>";
echo $circle->calculatePerimeter();
echo "<br>";
$rectangle = new MyRectangle("hinh chu nhat", 10, 20);
echo $rectangle->calculateArea();
echo "<br>";
echo  $rectangle->calculatePerimeter();
echo "<br>";
$square = new MySquare("hinh vuong",30);
echo $square->calculatePerimeter();
echo "<br>";
echo $square->calculateArea();
$cylinder = new MyCylinder("hinh tru",10,20);
echo $cylinder->calculateArea();
echo "<br>";
echo $cylinder->calculateVolume();
