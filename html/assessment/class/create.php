<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Add Class Entry</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <h1>Add Data to Database</h1>
        <?php
            if (isset($_GET["result"])){
                if ($_GET["result"] == "success"){
                    echo("<p>Your record was added successfully.</p>");
                } elseif($_GET["result"] == "invalid"){
                    echo("<p>You must complete all input fields.</p>");
                } elseif($_GET["result"] == "duplicate") {
                    echo("<p>You've tried to input a duplicate entry.</p>");
                } else{
                    die();
                }
            }
        ?>
        <form action="create2.php" method="GET">
            <input type="number" name="staffID" step="1" placeholder="TeacherID:">
            <br>
            <input type="text" name="Subject" maxlength="32" placeholder="Subject:">
            <br>
            <input type="text" name="Room" maxlength="8" placeholder="Room:">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
