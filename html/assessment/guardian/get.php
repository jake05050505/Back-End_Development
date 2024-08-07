<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>View Guardian table</title>
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
        ?>
        <form action="" method="GET">
            <input type="text" name="FirstName" value="<?php echo($_GET['FirstName']); ?>" placeholder="FirstName:">
            <input type="text" name="LastName" value="<?php echo($_GET['LastName']); ?>" placeholder="LastName:">
            <input type="submit" value="Search">
        </form>
        <table>
            <thead>
                <tr>
                    <th><?php echo $dbID; ?></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `$dbtable` WHERE (`FirstName` LIKE '%" . $_GET["FirstName"] . "%') AND (`LastName` LIKE '%" . $_GET["LastName"] . "%')";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo('<tr>');
                        echo('  <td>' . $row[$dbID] . '</td>');
                        echo('  <td>' . $row['FirstName'] . '</td>');
                        echo('  <td>' . $row['LastName'] . '</td>');
                        echo('  <td>' . $row['Email'] . '</td>');
                        echo('  <td>' . $row['PhoneNumber'] . '</td>');
                        echo('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>