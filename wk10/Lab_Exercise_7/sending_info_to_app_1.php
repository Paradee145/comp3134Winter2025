<!DOCTYPE html>
<html>
<head>
    <title>Insecure Input Handling</title>
</head>
<body>
    <form method="get">
        <input name="q" placeholder="Enter Text" />
        <br />
        <input type="submit" value="Go" />
    </form>

    <?php
        if (isset($_GET['q'])) {
            // 
            echo "<p>You entered: " . $_GET['q'] . "</p>";
        }
    ?>
</body>
</html>
