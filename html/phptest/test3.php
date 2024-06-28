<html>
    <head>
        <title>PHP Test 3</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>PHP Test 3</h1>
        <?php
            include("navbar.php");
            
            echo("1 == 1 -> ");
            var_dump(1==1);
            echo("<br />");
            echo("1 != 1 -> ");
            var_dump(1!=1);
            echo("<br />");
            echo("1 <= 2 -> ");
            var_dump(1<=2);
            echo("<br />");
            echo("1 <= 0 -> ");
            var_dump(1<=0);
        ?>
    </body>
</html>