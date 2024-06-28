<html>
    <head>
        <title>PHP Activity 5</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <h1>PHP Activity 5</h1>
        <?php
            function number_machine($start_number){
                $end_number = (3/2)*(3*($start_number+4)-1);
                return $end_number;
            }
            echo number_machine(11);
        ?>
    </body>
</html>