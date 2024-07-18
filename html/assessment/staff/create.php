<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Add Staff Entry</title>
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
            <input type="text" name="FirstName" maxlength="32" placeholder="First Name:">
            <br>
            <input type="text" name="LastName" maxlength="32" placeholder="Last Name:">
            <br>
            <input type="email" name="Email" maxlength="64" placeholder="E-Mail address:">
            <br>
            <input type="text" name="PhoneNumber" maxlength="16" placeholder="Phone Number:">
            <br>
            <input type="number" name="Salary" step="1" placeholder="Salary:">
            <br>
            <input type="text" name="Role" placeholder="Role:">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>