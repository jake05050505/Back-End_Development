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
            $month = date_format(date_create(),"m");

            if ($month == "06"){
                echo("It's June!");
            }
            if ($month == "07"){
                echo("It's July");
            }
        ?>
    </body>
</html>