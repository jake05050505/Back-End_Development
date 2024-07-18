<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Edit Student Entry</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <table>
            <thead>
                <tr>
                    <th><?php echo $dbID; ?></th>
                    <th>Name</th>
                    <th>Return Date</th>
                    <th>studentID</th>
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
                        echo("  <td>" . $row["Name"] . "</td>");
                        echo("  <td>" . $row["ReturnDate"] . "</td>");
                        echo("  <td>" . $row["studentID"] . "</td>");
                        echo("  <td>");
                        echo("      <form action='edit2.php' method='POST'>");
                        echo("          <input type='hidden' name='edit_id' value='" . $row[$dbID] . "'>");
                        echo("          <button type='submit'>Edit</button>");
                        echo("      </form>");
                        echo("  </td>");
                        echo("</tr>");
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>