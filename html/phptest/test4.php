<html>
    <head>
        <title>PHP Test 4</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <h1>PHP Test 4</h1>
        <?php
            $month = date_format(date_create(),"m");

            if ($month == "06"){
                echo("It's June!");
                echo("<br />");
            }
            if ($month == "07"){
                echo("It's July!");
                echo("<br />");
            }
            else{
                echo("It is not July.");
            }
        ?>
    </body>
</html>