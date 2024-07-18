<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Delete from Students</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <table>
            <thead>
                <tr>
                    <th><?php echo $dbID; ?></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>classID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `$dbtable`;";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row) {
                        echo("<tr>");
                        echo("  <td>" . $row[$dbID] . "</td>");
                        echo("  <td>" . $row["FirstName"] . "</td>");
                        echo("  <td>" . $row["LastName"] . "</td>");
                        echo("  <td>" . $row["classID"] . "</td>");
                        echo("  <td>");
                        echo("      <form action='delete2.php' method='GET'>");
                        echo("          <input type='hidden' name='delete_id' value='" . $row[$dbID] . "'>");
                        echo("          <button type='submit'>Delete</button>");
                        echo("      </form>");
                        echo("  </td>");
                        echo("</tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>