<?php //This code is repurposed from Sam Hirst's code provided in class
    include("db.php");

    $id = $_GET['staffID'];
    $first_name = $_GET['FirstName'];
    $last_name = $_GET['LastName'];
    $email = $_GET['Email'];
    $phone_number = $_GET['PhoneNumber'];
    $salary = $_GET['Salary'];
    $role = $_GET['Role'];

    if ($first_name == '' OR $last_name == '' OR $email == '' OR $phone_number == '' OR $salary == '' OR $role == '') {
        header('Location: edit.php?result=invalid');
        die();
    }

    $query = "UPDATE `staff` SET `FirstName` = '" . $first_name . "', `LastName` = '" . $last_name ."', `Email` = '" . $email . "', `PhoneNumber` = '" . $phone_number . "', `Salary` = '" . $salary . "', `Role` = '" . $role . "' WHERE `staffID` = '" . $id . "' ;";
    $result = mysqli_query($conn, $query);

    if(!$result){
        echo("Failed to execute query: ". mysqli_error($conn));
        die();
    }

    header("Location: edit.php?result=success");
    die();