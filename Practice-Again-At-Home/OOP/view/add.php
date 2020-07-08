<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "../class/Employee.php";
    include_once "../class/EmployeeManager.php";
    $index = $_POST['index'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $position = $_POST['position'];
    $address = $_POST['address'];
    $employee = new Employee($index, $name, $age, $position, $address);
    $manager = new EmployeeManager("../data.json");
    $manager->addEmployee($employee);
    header("location: ../index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Index :<input type="text" name="index" placeholder="index">
    Name:<input type="text" name="name" placeholder="name">
    Age:<input type="text" name="age" placeholder="age">
    Position:<input type="text" name="position" placeholder="position">
    Address:<input type="text" name="address" placeholder="address">
    <input type="submit" value="ADD">
</form>

</body>
</html>
