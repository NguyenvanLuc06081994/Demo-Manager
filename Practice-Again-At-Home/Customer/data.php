<?php
$fileName ="data.json";
$users = "user.json";

function readFileDataJson($fileName){
    $data = file_get_contents($fileName);
    return json_decode($data,true);
}
function saveFileDataJson($fileName,$arr){
    $data = json_encode($arr);
    file_put_contents($fileName,$data);
}