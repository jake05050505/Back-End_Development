<html>
    <head>
        <title>Edit Data in Database</title>
        <?php
            include("db.php");
            $id = $_POST['edit_id'];

            $query = "SELECT `first_name`, `last_name`, `email` FROM `staff` WHERE `staffID` = '" . $id . "';";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo("Failed to execute query: ". mysqli_error($conn));
                die();
            }

            $number_of_rows_found = mysqli_affected_rows($conn);
            if ($number_of_rows_found == 0) {
                echo("No records deleted.");
                die();
            }

            $record = mysqli_fetch_assoc($result);
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <h1>Edit Data in Database</h1>
        <form action="edit3.php" method="GET">
            <input type="hidden" name="staffID" value="<?php echo($id); ?>">
            <label for="first-name-input">Employee First Name:</label>
            <input type="text" name="FirstName" id="first-name-input" value="<?php echo($record['FirstName']);?>">
            <br>
            <label for="last-name-input">Employee Last Name:</label>
            <input type="text" name="employee_last_name" id="last-name-input" value="<?php echo($record['LastName']);?>">
            <br>
            <label for="email-input">Email:</label>
            <input type="text" name="employee_email" id="email-input" value="<?php echo($record['Email']);?>">
            <br>
            <input type="submit">
        </form>
    </body>
</html>