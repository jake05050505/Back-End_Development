<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Edit Data in Database</title>
        <?php
            include("db.php");
            $id = $_POST['edit_id'];

            $query = "SELECT `Name`, `ReturnDate`, `studentID` FROM `$dbtable` WHERE `$dbID` = '" . $id . "';";
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
            <input type="hidden" name="<?php echo($dbID) ?>" value="<?php echo($id); ?>">
            <input type="text" name="Name" value="<?php echo($record['Name']);?>" placeholder="Book Name:" maxlength="64">
            <br>
            <input type="date" name="ReturnDate" value="<?php echo($record['ReturnDate']);?>" placeholder="Return Date:">
            <br>
            <input type="number" name="studentID" value="<?php echo($record['studentID']);?>" placeholder="studentID:" step="1">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>