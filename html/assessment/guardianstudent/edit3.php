<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $id = $_GET[$dbID];
    $staffID = $_GET['staffID'];
    $subject = $_GET['Subject'];
    $room = $_GET['Room'];

    if ($staffID == '' OR $subject == '' OR $room == '') {
        header('Location: edit.php?result=invalid');
        die();
    }

    $query = "UPDATE `$dbtable` SET `staffID` = '" . $staffID . "', `Subject` = '" . $subject ."', `Room` = '" . $room . "' WHERE `$dbID` = '" . $id . "' ;";
    $result = mysqli_query($conn, $query);

    if(!$result){
        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    header("Location: edit.php?result=success");
    die();