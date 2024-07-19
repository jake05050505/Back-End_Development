<?php //This code is repurposed from Sam Hirst's code provided in class with an exception stated below
    $host = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "assessment";

    $dbtable = "guardianstudent"; //This line and the one below it were added by me to make it easier to reuse the code in the other tables in the database.
    //This line would usually hold the name of the primary key, however this table only uses two foreign keys.

    $conn = mysqli_connect($host, $username, $password, $dbname);