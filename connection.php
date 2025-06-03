<?php
$username = 'root';
$pass = '';
$db = 'crud_operation';
$host = 'localhost';

$conn = mysqli_connect($host, $username, $pass, $db);

if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
