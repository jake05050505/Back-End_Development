<?php
    include("db.php");

    $first_name = $_GET["FirstName"];
    $last_name = $_GET["LastName"];
    $email = $_GET["Email"];
    $phone_number = $_GET["PhoneNumber"];
    $salary = $_GET["Salary"];
    $role = $_GET["Role"];

    if ($first_name == "" OR $last_name == "" OR $email == "" OR $phone_number == "" OR $salary == "" OR $role == "") {
        header("Location: create.php?result=invalid");
        die();
    }

    $query = "INSERT INTO `staff` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `Salary`, `Role`) VALUES ('" . $first_name . "', '" . $last_name ."', '". $email ."', '". $phone_number ."', '". $salary ."', '". $role ."');";

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