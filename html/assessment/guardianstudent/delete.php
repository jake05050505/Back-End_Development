<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Delete Student-Guardian Link</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <table>
            <thead>
                <tr>
                    <th>guardianID</th>
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
                        echo("  <td>" . $row["guardianID"] . "</td>");
                        echo("  <td>" . $row["studentID"] . "</td>");
                        echo("  <td>");
                        echo("      <form action='delete2.php' method='GET'>");
                        echo("          <input type='hidden' name='guardian_id' value='" . $row["guardianID"] . "'>");
                        echo("          <input type='hidden' name='student_id' value='" . $row["studentID"] . "'>");
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