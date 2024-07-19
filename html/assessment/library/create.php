<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Add Book Entry</title>
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
            <input type="text" name="Name" maxlength="64" placeholder="Book Name:">
            <br>
            <input type="date" name="ReturnDate" placeholder="Return Date:">
            <br>
            <input type="number" name="studentID" placeholder="studentID:" step="1">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>