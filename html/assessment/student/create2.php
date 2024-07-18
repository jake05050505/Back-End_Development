<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $first_name = $_GET["FirstName"];
    $last_name = $_GET["LastName"];
    $classID = $_GET["classID"];

    if ($first_name == "" OR $last_name == "" OR $classID == "") {
        header("Location: create.php?result=invalid");
        die();
    }

    $query = "INSERT INTO `$dbtable` (`FirstName`, `LastName`, `classID`) VALUES ('" . $first_name . "', '" . $last_name ."', '". $classID ."');";

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