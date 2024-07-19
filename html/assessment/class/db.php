<?php //This code is repurposed from Sam Hirst's code provided in class with an exception stated below
    $host = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "assessment";

    $dbtable = "guardian"; //This line and the one below it were added by me to make it easier to reuse the code in the other tables in the database.
    $dbID = $dbtable."ID";

    $conn = mysqli_connect($host, $username, $password, $dbname);