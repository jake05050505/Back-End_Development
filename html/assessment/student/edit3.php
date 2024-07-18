<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $id = $_GET[$dbID];
    $first_name = $_GET['FirstName'];
    $last_name = $_GET['LastName'];
    $classID = $_GET['classID'];

    if ($first_name == '' OR $last_name == '' OR $classID == '') {
        header('Location: edit.php?result=invalid');
        die();
    }

    $query = "UPDATE `$dbtable` SET `FirstName` = '" . $first_name . "', `LastName` = '" . $last_name ."', `classID` = '" . $classID . "' WHERE `$dbID` = '" . $id . "' ;";
    $result = mysqli_query($conn, $query);

    if(!$result){
        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    header("Location: edit.php?result=success");
    die();