<html>
    <head>
        <title>PHP Test 1</title>
        <style>
            body{
                font-family: "segoe ui", 'inconsolata', consolas, monospace;
            }
        </style>
    </head>
    <body>
        <h1>PHP Test 1</h1>
        <?php
            include("navbar.php");
            
            $name = "Joe";
            $text="Hello, world!";
            $len=strlen($text);
            $greet=str_replace("world",$name,$text);
            echo strtoupper($text);
            echo nl2br("\n");
            echo strtolower($text);
            echo nl2br("\n");
            echo($greet);
            echo nl2br("\n");
            echo strrev($name." ".$greet);
            echo nl2br("\n");
            echo($greet);
            echo nl2br("\n");
            echo($len);
        ?>
    </body>
</html>