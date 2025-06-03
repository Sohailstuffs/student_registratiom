<?php
include 'connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "User deleted successfully. <a href='display.php'>Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
