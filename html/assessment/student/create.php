<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Add Student Entry</title>
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
                    echo("<p>You must complete all input fields.<br>More Info: The referenced classID may not exist, please check your entry.</p>");
                } elseif($_GET["result"] == "duplicate") {
                    echo("<p>You've tried to input a duplicate entry.</p>");
                } else{
                    die();
                }
            }
        ?>
        <form action="create2.php" method="GET">
            <input type="text" name="FirstName" maxlength="32" placeholder="First Name:">
            <br>
            <input type="text" name="LastName" maxlength="32" placeholder="Last Name:">
            <br>
            <input type="number" name="classID" step="1" placeholder="classID:">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>