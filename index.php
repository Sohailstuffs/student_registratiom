<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h2 class="bg-secondary text-white p-2 rounded">Register Student</h2>

    <form action="" method="post" class="mt-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Class:</label>
            <input type="text" id="class" name="class" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="rollno" class="form-label">Roll No:</label>
            <input type="text" id="rollno" name="rollno" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" id="phone" name="phone" class="form-control" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="">Cancel</a>
        <a class="btn btn-secondary" href="view.php">View</a>
        
    </form>
</div>

<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, class, rollno, email, phone) VALUES ('$name', '$class', '$rollno', '$email', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success mt-4 text-center'>New student registered successfully!</div>";
    } else {
        echo "<div class='alert alert-danger mt-4 text-center'>Error: " . mysqli_error($conn) . "</div>";
    }
}


?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
