<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Edit Data in Database</title>
        <?php
            include("db.php");
            $id = $_POST['edit_id'];

            $query = "SELECT `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Salary`, `Role` FROM `$dbtable` WHERE `$dbID` = '" . $id . "';";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo("Failed to execute query: ". mysqli_error($conn));
                die();
            }

            $number_of_rows_found = mysqli_affected_rows($conn);
            if ($number_of_rows_found == 0) {
                echo("No records modified.");
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
            <input type="hidden" name="<?php echo($dbID); ?>" value="<?php echo($id); ?>">
            <input type="text" name="FirstName" value="<?php echo($record['FirstName']);?>" placeholder="First Name:">
            <br>
            <input type="text" name="LastName" value="<?php echo($record['LastName']);?>" placeholder="Last Name:">
            <br>
            <input type="text" name="Email" value="<?php echo($record['Email']);?>" placeholder="E-Mail Address:">
            <br>
            <input type="text" name="PhoneNumber" value="<?php echo($record['PhoneNumber']);?>" placeholder="Phone Number:">
            <br>
            <input type="text" name="Salary" value="<?php echo($record['Salary']);?>" placeholder="Salary:">
            <br>
            <input type="text" name="Role" value="<?php echo($record['Role']);?>" placeholder="Role:">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>