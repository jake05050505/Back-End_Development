<html>
    <head>
        <title>PHP Test 8</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <h1>PHP Test 8</h1>

        <form action="test7.php" method="GET">
            <label for="city">City</label>
            <input type="text" id="city" name="city" required>
            <br>
            <label for="country">Country</label>
            <input type="text" id="country" name="country" required>
            <br>
            <input type="submit">
        </form>
    </body>
</html>