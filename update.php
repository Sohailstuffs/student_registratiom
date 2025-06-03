<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-5">
    <form action="update.php" method="post" class="mt-4">
        <!-- Hidden ID -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required value="<?php echo $row['name']; ?>">
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Class:</label>
            <input type="text" id="class" name="class" class="form-control" required value="<?php echo $row['class']; ?>">
        </div>

        <div class="mb-3">
            <label for="rollno" class="form-label">Roll No:</label>
            <input type="text" id="rollno" name="rollno" class="form-control" required value="<?php echo $row['rollno']; ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required value="<?php echo $row['email']; ?>">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" id="phone" name="phone" class="form-control" required value="<?php echo $row['phone']; ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-danger" href="display.php">Back</a>
    </form>
</div>


<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Correct SQL syntax
    $sql = "UPDATE students 
            SET name='$name', class='$class', rollno='$rollno', email='$email', phone='$phone' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully. <a href='display.php'>Back to List</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
