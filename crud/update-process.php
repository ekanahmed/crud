<?php
require_once "connection/connection.php";


// Creating Variables
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];
$city=$_POST["city"];
//echo "ID => $id <br>";
//echo "Name => $name <br>";
//echo "Email => $email <br>";
//echo "Age => $age <br>";
//echo "City => $city <br>";

$sql="UPDATE students SET name='$name',email='$email',age=$age,city='$city' WHERE id = $id ;";

$res=mysqli_query($connection,$sql);

if ($res){
    header("Location: index.php");
}else{
    echo "Error To Update Data";
    echo mysqli_error($connection);
}