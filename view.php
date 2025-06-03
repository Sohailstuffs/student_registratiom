
<?php
include 'connection.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<h2 class="text-center bg-secondary">All Users</h2>
<a href="index.php">Add New User</a><br><br>
<table border="1" cellpadding="10">
<tr><th>Name</th><th>Class</th><th>RollNo</th><th>Email</th><th>Phone</th><th>Actions</th></tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['class']}</td>
        <td>{$row['rollno']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>
            <a href='update.php?id={$row['id']}'>Edit</a> | 
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>
