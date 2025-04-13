<?php
$mysqli = new mysqli("localhost", "root", "your_password", "lab9");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$firstname = $_GET['firstname'] ?? '';

// Prepared statement to prevent SQL injection
$stmt = $mysqli->prepare("SELECT * FROM users WHERE firstname = ? AND active = 1");
$stmt->bind_param("s", $firstname);
$stmt->execute();
$result = $stmt->get_result();
?>

<form method="get">
    <input type="text" name="firstname" placeholder="Enter First Name">
    <input type="submit" value="Search">
</form>

<table border="1">
    <tr>
        <th>ID</th><th>Username</th><th>Email</th><th>Firstname</th><th>Lastname</th><th>Active</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['firstname'] ?></td>
        <td><?= $row['lastname'] ?></td>
        <td><?= $row['active'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
