<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to MySQL (use TCP instead of socket)
$conn = new mysqli('127.0.0.1', 'root', '', 'mylabdb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input from URL
$query = $_GET['name'] ?? '';

// Unsafe SQL query (vulnerable to SQL injection)
$sql = "SELECT * FROM users WHERE firstname = '$query' AND active = 1";
$result = $conn->query($sql);
?>

<!-- HTML Form and Table -->
<h2>Search Users by First Name</h2>
<form method="GET">
  <input type="text" name="name" placeholder="Enter first name" />
  <button type="submit">Search</button>
</form>

<?php if ($result && $result->num_rows > 0): ?>
  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th><th>Username</th><th>Email</th>
      <th>First Name</th><th>Last Name</th><th>Active</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
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
<?php else: ?>
  <p>No results found.</p>
<?php endif; ?>

