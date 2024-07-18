<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $name = $_GET["Name"];
    $returndate = $_GET["ReturnDate"];
    $studentID = $_GET["studentID"];

    if ($name == "" OR $returndate == "" OR $studentID == "") {
        header("Location: create.php?result=invalid");
        die();
    }

    $query = "INSERT INTO `$dbtable` (`Name`, `ReturnDate`, `studentID`) VALUES ('" . $name . "', '" . $returndate ."', '". $studentID ."');";

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