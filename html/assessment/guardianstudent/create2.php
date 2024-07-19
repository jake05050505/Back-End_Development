<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $guardianID = $_GET["guardianID"];
    $studentID = $_GET["studentID"];

    if ($guardianID == "" OR $studentID == "") {
        header("Location: create.php?result=invalid");
        die();
    }

    $query = "INSERT INTO `$dbtable` (`guardianID`, `studentID`) VALUES ('" . $guardianID . "', '" . $studentID ."');";

    try{
        $result = mysqli_query($conn, $query);
    } catch(Exception $e) {
        if (mysqli_errno($conn)){
            header("Location: create.php?result=invalid");
            die();
        }

        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    header("Location: create.php?result=success");
    die();