<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $query = "DELETE FROM `$dbtable` WHERE (`guardianID` = " . $_GET['guardian_id'] . ") AND (`studentID` = " . $_GET['student_id'] .");";
    $result = mysqli_query($conn, $query);

    if (!$result){
        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    $number_of_rows_deleted = mysqli_affected_rows($conn);
    if ($number_of_rows_deleted == 0){
        echo("No records deleted.");
        die();
    }

    header("Location: delete.php");
    die();