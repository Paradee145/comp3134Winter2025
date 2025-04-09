<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body>
    <h1>Secure Login</h1>

    <?php
    $weak_passwords = ["123456", "password", "qwerty", "abc123", "letmein"];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'];
        $username = $_POST['username'];

        if (in_array($password, $weak_passwords)) {
            echo "<h2>Welcome $username to Your Portal</h2>";
        } else {
            echo "<h2>Invalid password</h2>";
        }
    } else {
    ?>

    <form method="post">
        <!-- Hidden field for username -->
        <input type="hidden" name="username" value="paradee145">
        
        <label>Password:</label>
        <input type="password" name="password" required>
        <br/>
        <input type="submit" value="Login">
    </form>

    <?php } ?>
</body>
</html>

