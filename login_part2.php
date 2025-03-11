<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weak Login</title>
</head>
<body>
    <h1>Weak Password Login</h1>
    <form method="post">
        <label>Password:</label>
        <input type="password" name="password" required>
        <br/>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $weak_passwords = ["123456", "password", "qwerty", "abc123", "letmein"];

        if (in_array($_POST['password'], $weak_passwords)) {
            echo "<h2>Successfully authenticated</h2>";
        }
    }
    ?>
</body>
</html>
