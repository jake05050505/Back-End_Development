<html><!--This code is repurposed from Sam Hirst's code provided in class-->
    <head>
        <title>Edit Data in Database</title>
        <?php
            include("db.php");
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <h1>Edit Data in Database</h1>
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
                    $query = "SELECT * FROM `$dbtable`;";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row) {
                        echo("<tr>");
                        echo("  <td>" . $row[$dbID] . "</td>");
                        echo("  <td>" . $row["FirstName"] . "</td>");
                        echo("  <td>" . $row["LastName"] . "</td>");
                        echo("  <td>" . $row["Email"] . "</td>");
                        echo("  <td>" . $row["PhoneNumber"] . "</td>");
                        echo("  <td>" . $row["Salary"] . "</td>");
                        echo("  <td>" . $row["Role"] . "</td>");
                        echo("  <td>");
                        echo("      <form action='edit2.php' method='POST'>");
                        echo("          <input type='hidden' name='edit_id' value='" . $row["$dbID"] . "'>");
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