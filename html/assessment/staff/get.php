<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>read</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include('nav.php');
            if (!isset($_GET["FirstName"])) {
                $_GET["FirstName"] = "";
            }
            if (!isset($_GET["LastName"])) {
                $_GET["LastName"] = "";
            }
            if (!isset($_GET["Role"])) {
                $_GET["Role"] = "";
            }
        ?>
        <form action="" method="GET">
            <input type="text" name="FirstName" value="<?php echo($_GET['FirstName']); ?>" placeholder="FirstName:">
            <input type="text" name="LastName" value="<?php echo($_GET['LastName']); ?>" placeholder="LastName:">
            <input type="text" name="Role" value="<?php echo($_GET['Role']); ?>" placeholder="Role:">
            <input type="submit" value="Search">
        </form>
        <table>
            <thead>
                <tr>
                    <th>staffID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Salary</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `$dbtable` WHERE (`FirstName` LIKE '%" . $_GET["FirstName"] . "%') AND (`LastName` LIKE '%" . $_GET["LastName"] . "%') AND (`Role` LIKE '%" . $_GET["Role"] . "%')";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo('<tr>');
                        echo('  <td>' . $row[$dbID] . '</td>');
                        echo('  <td>' . $row['FirstName'] . '</td>');
                        echo('  <td>' . $row['LastName'] . '</td>');
                        echo('  <td>' . $row['Email'] . '</td>');
                        echo('  <td>' . $row['PhoneNumber'] . '</td>');
                        echo('  <td>' . $row['Salary'] . '</td>');
                        echo('  <td>' . $row['Role'] . '</td>');
                        echo('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>