<html>
    <head>
        <title>PHP Activity 3</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include("navbar.php");
        ?>
        <h1>PHP Activity 3</h1>
        <form name="form" action="" method="get">
            <input type="number" step="0.01" name="gbp" id="gbp" placeholder="Enter amount in GBP:">
            <input type="submit">
        </form>
        <form name="form" action="" method="get">
            <input type="number" step="0.01" name="eur" id="eur" placeholder="Enter amount in EURO:">
            <input type="submit">
        </form>
        <?php
            $gbp=$_GET["gbp"];
            echo("£". $gbp. " is equal to €". 1.18*$gbp);
            echo("<br>");
            $eur=$_GET["eur"];
            echo("€". $eur. " is equal to £". (1/1.18)*$eur);
        ?>
    </body>
</html>