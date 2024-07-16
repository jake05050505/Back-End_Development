<html>
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
                } elseif ($_GET["result"] == "duplicate"){
                    echo("<p>The country code you entered is already in use.</p>");
                } elseif ($_GET["result"] == "invalid"){
                    echo("<p>You must complete all input fields.</p>");
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
            <br>
            <label for="Salary">Salary:</label>
            <input type="number" name="Salary" step="1">
            <br>
            <label for="Role">Role:</label>
            <input type="text" name="Role">
            <input type="submit">
        </form>
    </body>
</html>