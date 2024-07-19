<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>View Library table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include('nav.php');
            if (!isset($_GET["Name"])) {
                $_GET["Name"] = "";
            }
            if (!isset($_GET["ReturnDate"])) {
                $_GET["ReturnDate"] = "";
            }
            if (!isset($_GET["studentID"])) {
                $_GET["studentID"] = "";
            }
        ?>
        <form action="" method="GET">
            <input type="text" name="Name" value="<?php echo($_GET['Name']); ?>" placeholder="Book Name:">
            <input type="date" name="ReturnDate" value="<?php echo($_GET['ReturnDate']); ?>" placeholder="Return Date:">
            <input type="text" name="studentID" value="<?php echo($_GET['studentID']); ?>" placeholder="studentID:">
            <input type="submit" value="Search">
        </form>
        <table>
            <thead>
                <tr>
                    <th><?php echo $dbID; ?></th>
                    <th>Book Name</th>
                    <th>Return Date</th>
                    <th>studentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `$dbtable` WHERE (`Name` LIKE '%" . $_GET["Name"] . "%') AND (`ReturnDate` LIKE '%" . $_GET["ReturnDate"] . "%') AND (`studentID` LIKE '%" . $_GET["studentID"] . "%')";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo('<tr>');
                        echo('  <td>' . $row[$dbID] . '</td>');
                        echo('  <td>' . $row['Name'] . '</td>');
                        echo('  <td>' . $row['ReturnDate'] . '</td>');
                        echo('  <td>' . $row['studentID'] . '</td>');
                        echo('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>