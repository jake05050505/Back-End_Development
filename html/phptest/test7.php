<html>
    <head>
        <title>PHP Test 7</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>PHP Test 7</h1>
        <?php
            include("navbar.php");

            echo("You are in ". $_GET["city"]. ", ". $_GET["country"]);
        ?>
    </body>
</html>