<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Create Student-Guardian Link</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <h1>Add Data to Database</h1>
        <?php
            if (isset($_GET["result"])){
                if ($_GET["result"] == "success"){
                    echo("<p>Your record was added successfully.</p>");
                } elseif ($_GET["result"] == "invalid"){
                    echo("<p>Ensure all inputs are correct.</p>");
                } elseif($_GET["result"] == "duplicate") {
                    echo("<p>You've tried to input a duplicate entry.</p>");
                } else{
                    die();
                }
            }
        ?>
        <form action="create2.php" method="GET">
            <input type="number" name="guardianID" step="1" placeholder="guardianID:">
            <br>
            <input type="number" name="studentID" step="1" placeholder="studentID:">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>