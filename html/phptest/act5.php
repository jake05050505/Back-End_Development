<html>
    <head>
        <title>PHP Activity 5</title>
        <style>
            body{
                font-family: "segoe ui", 'inconsolata', consolas, monospace;
            }
        </style>
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
            echo number_machine(12);
        ?>
    </body>
</html>