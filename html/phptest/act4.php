<html>
    <head>
        <title>PHP Activity 4</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <h1>PHP Activity 4</h1>
        <?php
            echo "<span>";
            for ($i = 92; $i <= 100; $i++) {
                echo $i;
                echo "<br>";
            }
            echo "</span>";
            echo "<span>";
            foreach (range(92,100) as $i) {
                echo $i;
                echo "<br>";
            }
            echo "</span>";
            echo "<span>";
            $i=0;
            while ($i <= 100){
                if ($i<92) {
                    $i++;
                    continue;
                }
                echo $i;
                echo "<br>";
                $i++;
            }
            echo "</span>";
        ?>
    </body>
</html>