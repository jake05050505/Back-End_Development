<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Add Data to Database</title>
        <?php
            include("db.php");
        ?>
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
                    echo("<p>You must complete all input fields.</p>");
                } else{
                    die();
                }
            }
        ?>
        <form action="create2.php" method="GET">
            <label for="FirstName">First Name:</label>
            <input type="text" name="FirstName" maxlength="32">
            <br>
            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" maxlength="32">
            <br>
            <label for="Email">Email:</label>
            <input type="email" name="Email" maxlength="64">
            <br>
            <label for="PhoneNumber">Phone Number:</label>
            <input type="text" name="PhoneNumber" maxlength="16">
            <input type="submit">
        </form>
    </body>
</html>