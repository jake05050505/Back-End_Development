<html>
    <head>
        <title>PHP Test 9</title>
        <style>
            body{
                font-family: "segoe ui", 'inconsolata', consolas, monospace;
            }
        </style>
    </head>
    <body>
        <?php
            include("navbar.php")
        ?>
        <h1>PHP Test 9</h1>
        <?php
            $colours = array("Red","Green","Blue","Yellow");
            foreach($colours as $col) {
                echo $col;
                echo("<br>");
            }
        ?>
    </body>
</html>