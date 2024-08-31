<?php
require_once "connection/connection.php";

// echo "<pre>";
// print_r($_POST);

// Creating Variables
$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];
$city=$_POST["city"];


$sql="INSERT INTO students (name,email,age,city) VALUES ('$name','$email',$age,'$city');";

$result=mysqli_query($connection,$sql);

if($result){
    // echo "Data Inserted";
    header("Location: index.php");
}else{
    echo "Error To Insert Data";
}