<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $id = $_GET[$dbID];
    $name = $_GET['Name'];
    $returndate = $_GET['ReturnDate'];
    $studentID = $_GET['studentID'];

    if ($name == '' OR $returndate == '' OR $studentID == '') {
        header('Location: edit.php?result=invalid');
        die();
    }

    $query = "UPDATE `$dbtable` SET `Name` = '" . $name . "', `ReturnDate` = '" . $returndate ."', `studentID` = '" . $studentID . "' WHERE `$dbID` = '" . $id . "' ;";
    $result = mysqli_query($conn, $query);

    if(!$result){
        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    header("Location: edit.php?result=success");
    die();