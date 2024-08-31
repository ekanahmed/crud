<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">

<!-- Form Container -->
<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Edit Student</h2>
    <?php
    require_once "connection/connection.php";
    $id = $_GET["id"];
    $sql="SELECT * FROM students WHERE id=$id";
    $result=mysqli_query($connection,$sql);
    if (mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_assoc($result);
    ?>
    <!-- Form -->
    <form action="update-process.php" method="post">
        <!-- ID Input -->
        <input type="hidden" name="id" value="<?php echo $id?>">
        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" id="name" name="name" required value="<?= $row['name'] ?>"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email" required value="<?= $row['email'] ?>"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Age Input -->
        <div class="mb-4">
            <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Age</label>
            <input type="number" id="age" name="age" required value="<?= $row['age'] ?>"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- City Input -->
        <div class="mb-4">
            <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
            <input type="text" id="city" name="city" required value="<?= $row['city'] ?>"
                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>
        <!-- Submit Button -->
        <button type="submit"
                class="w-full py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Update Student
        </button>
    </form>
    <?php
    }else{
        echo "<h1>No Students Found</h1>";
        echo "<a href='index.php' class=\"block my-10 w-full text-center py-2 bg-gray-600 text-white text-sm font-medium rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500\">Back</a>";
    }
    ?>
</div>
</body>
</html>