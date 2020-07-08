<?php
$index = $_REQUEST['index'];
include_once "../class/EmployeeManager.php";
$manager = new EmployeeManager("../data.json");
$manager->deleteEmployee($index);
header("location: ../index.php");
