<?php
require_once "connection/connection.php";
$id= $_GET["id"];
$query="DELETE FROM `students` WHERE id=$id";

if (mysqli_query($connection,$query)){
    header("Location: index.php");
}else{
    echo "Error To Delete Data";
    echo mysqli_error($connection);
}