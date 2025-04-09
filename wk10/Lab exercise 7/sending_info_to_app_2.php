<!DOCTYPE html>
<html>
<head>
    <title>Secure Input Handling</title>
</head>
<body>
    <form method="get">
        <input name="q" placeholder="Enter Text" />
        <br />
        <input type="submit" value="Go" />
    </form>

    <?php
        if (isset($_GET['q'])) {
            // Uncomment one of the following lines depending on which method you want to test

            // Method 1: strip_tags
            // $clean_input = strip_tags($_GET['q']);

            // Method 2: htmlentities
            $clean_input = htmlentities($_GET['q']);

            echo "<p>You entered: " . $clean_input . "</p>";
        }
    ?>
</body>
</html>
