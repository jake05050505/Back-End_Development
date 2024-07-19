<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $staffID = $_GET["staffID"];
    $subject = $_GET["Subject"];
    $room = $_GET["Room"];

    if ($staffID == "" OR $subject == "" OR $room == "") {
        header("Location: create.php?result=invalid");
        die();
    }

    $query = "INSERT INTO `$dbtable` (`staffID`, `Subject`, `Room`) VALUES ('" . $staffID . "', '" . $subject ."', '". $room ."');";

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