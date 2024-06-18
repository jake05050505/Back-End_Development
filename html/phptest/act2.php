<html>
    <head>
        <title>PHP Activity 2</title>
        <style>
            body{
                font-family: "segoe ui", 'inconsolata', consolas, monospace;
            }
        </style>
    </head>
    <body>
        <h1>PHP Activity 2</h1>
        <?php
            include("navbar.php");
        ?>
        <form name="form" action="" method="get">
            <input type="number" name="num1" id="num1" placeholder="num1:">
            <input type="number" name="num2" id="num2" placeholder="num2:">
            <input type="submit">
        </form>
        <?php
            $same=$_GET['num1']==$_GET['num2'];
            if($same==1){
                echo("It's the same");
            } else{
                echo("It's not the same");
            }
        ?>
    </body>
</html>