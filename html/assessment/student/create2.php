<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $first_name = $_GET["FirstName"];
    $last_name = $_GET["LastName"];
    $classID = $_GET["classID"];


    if ($first_name == "" OR $last_name == "" OR $email == "" OR $phone_number == "" OR $salary == "" OR $role == "") {
        header("Location: create.php?result=invalid");
        die();
    }

    $query = "INSERT INTO `$dbtable` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `Salary`, `Role`) VALUES ('" . $first_name . "', '" . $last_name ."', '". $email ."', '". $phone_number ."', '". $salary ."', '". $role ."');";

    try{
        $result = mysqli_query($conn, $query);
    } catch(Exception $e) {
        if (mysqli_errno($conn)){
            header("Location: create.php?result=duplicate");
            die();
        }

        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    header("Location: create.php?result=success");
    die();