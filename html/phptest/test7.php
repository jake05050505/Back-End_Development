<html>
    <head>
        <title>PHP Test 7</title>
        <style>
            body{
                font-family: "segoe ui", 'inconsolata', consolas, monospace;
            }
        </style>
    </head>
    <body>
        <h1>PHP Test 7</h1>
        <?php
            include("navbar.php");

            echo("You are in ". $_GET["city"]. ", ". $_GET["country"]);
        ?>
    </body>
</html>