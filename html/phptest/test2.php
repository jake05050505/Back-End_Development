<html>
    <head>
        <title>PHP Test 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>PHP Test 2</h1>
        <?php
            include("navbar.php");
            
            echo("10 + 1 = ". 10+1);
            echo("<br />");
            echo("10 - 3 = ". 10-3);
            echo("<br />");
            echo("10 * 2 = ". 10*2);
            echo("<br />");
            echo("10 / 5 = ". 10/5);
            echo("<br />");
            echo("10 % 3 = ". 10%3);
            echo("<br />");
            echo("10 * 2 + 1 = ". 10*2+1);
            echo("<br />");
            echo("10 * (2+1) = ". 10*(2+1));
        ?>
    </body>
</html>