<html>
    <head>
        <title>PHP Test 3</title>
        <style>
            body{
                font-family: "segoe ui", 'inconsolata', consolas, monospace;
            }
        </style>
    </head>
    <body>
        <h1>PHP Test 3</h1>
        <?php
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