<?php


class EmployeeManager
{
    protected $pathFile;

    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function getDataToFile()
    {
        //doc file json
        $dataJson = file_get_contents($this->pathFile);
        // chuyen file json sang mang
        return json_decode($dataJson, true);
    }

    public function saveDataToFile($array)
    {
        // chuyen mang sang string roi day vao pathFile
        $dataJson = json_encode($array);
        file_put_contents($this->pathFile, $dataJson);
    }

    public function addEmployee($employee)
    {
        $data = $this->getDataToFile();
        $arr = [
            "index" => $employee->getIndex(),
            "name" => $employee->getName(),
            "age" => $employee->getAge(),
            "position" => $employee->getPosition(),
            "address" => $employee->getAddress()
        ];
        array_push($data, $arr);
        // vi data la mang 2 chieu nen khi chuyen sang string no van tra ve 1 mang
        $this->saveDataToFile($data);
    }

    public function getAllEmployee()
    {
        $data = $this->getDataToFile();
        $arr = [];
        foreach ($data as $item) {
            $employee = new Employee($item['index'], $item['name'], $item['age'], $item['position'], $item['address']);
            array_push($arr, $employee);
        }
        return $arr;
    }

    public function deleteEmployee($index)
    {
        $data = $this->getDataToFile();
        unset($data[$index]);
        $this->saveDataToFile($data);
    }
//    public function __construct($pathFile)
//    {
//        $this->pathFile = $pathFile;
//    }
//
//    public function readFileData()
//    {
//        // doc file json
//        $dataJson = file_get_contents($this->pathFile);
//        // dua file json ve mang
//        return json_decode($dataJson, true);
//    }
//
//    public function saveFileData($array)
//    {
//        $dataJson = json_encode($array);
//        file_put_contents($this->pathFile,$dataJson);
//    }
//
//    public function addEmployee($employee)
//    {
//        $data = $this->readFileData();
//        $arr = [
//            "index" => $employee->getIndex(),
//            "name" => $employee->getName(),
//            "age" => $employee->getAge(),
//            "position" => $employee->getPosition(),
//            "address" => $employee->getAddress()
//        ];
//        array_push($data,$arr);
//        $this->saveFileData($data);
//    }
//
//    public function getAllEmployee()
//    {
//        $data = $this->readFileData();
//        $arr = [];
//        foreach ($data as $item){
//            $employee = new Employee($item['index'],$item['name'],$item['age'],$item['position'],$item['address']);
//            array_push($arr,$employee);
//        }
//        return $arr;
//    }
//
//    public function deleteEmployee($index)
//    {
//        $data = $this->readFileData();
//        unset($data[$index]);
//        $this->saveFileData($data);
//    }
}