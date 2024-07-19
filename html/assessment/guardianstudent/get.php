<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>View Student-Guardian link-table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include('nav.php');
            if (!isset($_GET["guardianID"])) {
                $_GET["guardianID"] = "";
            }
            if (!isset($_GET["studentID"])) {
                $_GET["studentID"] = "";
            }
        ?>
        <form action="" method="GET">
            <input type="number" name="guardianID" value="<?php echo($_GET['guardianID']); ?>" placeholder="guardianID:" step="1">
            <input type="number" name="studentID" value="<?php echo($_GET['studentID']); ?>" placeholder="studentID:" step="1">
            <input type="submit" value="Search">
        </form>
        <table>
            <thead>
                <tr>
                    <th>guardianID</th>
                    <th>studentID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `$dbtable` WHERE (`guardianID` LIKE '%" . $_GET["guardianID"] . "%') AND (`studentID` LIKE '%" . $_GET["studentID"] . "%')";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo('<tr>');
                        echo('  <td>' . $row['guardianID'] . '</td>');
                        echo('  <td>' . $row['studentID'] . '</td>');
                        echo('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>