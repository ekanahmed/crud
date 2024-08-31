<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Page</title>
</head>
<body>
<?php
require_once "connection/connection.php";
$id = $_GET["id"];
$sql="SELECT * FROM students WHERE id=$id";
$result=mysqli_query($connection,$sql);
if (mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
?>
<h1>User Details</h1>
<details>
    <summary>Basic Information</summary>
    <summary>Name : <?php echo $row["name"] ?></summary>
    <summary>Email : <?php echo $row["email"] ?></summary>
    <summary>Age : <?php echo $row["age"] ?></summary>
    <summary>City : <?php echo $row["city"] ?></summary>
</details>
<?php
}else{
    echo "<h1>No Students Found</h1>";
}
?>
</body>
</html>