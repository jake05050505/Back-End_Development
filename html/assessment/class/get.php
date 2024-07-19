<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>View Guardian table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include('nav.php');
            if (!isset($_GET["staffID"])) {
                $_GET["staffID"] = "";
            }
            if (!isset($_GET["Subject"])) {
                $_GET["Subject"] = "";
            }
            if (!isset($_GET["Room"])) {
                $_GET["Room"] = "";
            }
        ?>
        <form action="" method="GET">
            <input type="number" name="staffID" value="<?php echo($_GET['staffID']); ?>" placeholder="staffID:" step="1">
            <input type="text" name="Subject" value="<?php echo($_GET['Subject']); ?>" placeholder="Subject:" maxlength="32">
            <input type="text" name="Room" value="<?php echo($_GET['Room']); ?>" placeholder="Room:" maxlength="8">
            <input type="submit" value="Search">
        </form>
        <table>
            <thead>
                <tr>
                    <th><?php echo $dbID; ?></th>
                    <th>staffID</th>
                    <th>Subject</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `$dbtable` WHERE (`staffID` LIKE '%" . $_GET["staffID"] . "%') AND (`Subject` LIKE '%" . $_GET["Subject"] . "%') AND (`Room` LIKE '%" . $_GET["Room"] . "%')";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo('<tr>');
                        echo('  <td>' . $row[$dbID] . '</td>');
                        echo('  <td>' . $row['staffID'] . '</td>');
                        echo('  <td>' . $row['Subject'] . '</td>');
                        echo('  <td>' . $row['Room'] . '</td>');
                        echo('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>