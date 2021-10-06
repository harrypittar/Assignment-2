<?php

$xValue = $_POST['xValue'];
$yValue = $_POST['yValue'];

//Database connection code

$conn = new mysqli('localhost', 'root', 'password');
if($conn-connect_error){
    die('Connection Failed  : '.$conn->connect_error);

}else {
    $stmt = $conn->prepare("insert into graphvalues(xValue, yValue) values(?,?)");
    $stmt->bind_param("ii",$xValue,$yValue);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}