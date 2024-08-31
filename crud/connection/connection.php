<?php
$host = "localhost";
$user="root";
$pass="";
$db_name="ekaanahmed";

$connection=mysqli_connect($host,$user,$pass,$db_name) or die("Error To Connect Database");

// if($connection){
//     echo "Database Connected Successfully ";
// }else{
//     echo mysqli_connect_error();
// }