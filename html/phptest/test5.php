<html>
    <head>
        <title>PHP Test 5</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>PHP Test 5</h1>
        <?php
            include("navbar.php");

            $month = date_format(date_create(),"m");
            switch($month){
                case "05":
                    echo("It's May!");
                    break;
                case "06":
                    echo("It's June!");
                    break;
                default:
                    echo("It is neither May nor June.");
            }
        ?>
    </body>
</html>