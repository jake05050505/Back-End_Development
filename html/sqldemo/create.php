<html>
    <head>
        <title>Add Data to Database</title>
        <?php
            include("db.php");
        ?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include("nav.php"); ?>
        <h1>Add Data to Database</h1>
        <?php
            if (isset($_GET["result"])){
                if ($_GET["result"] == "success"){
                    echo("<p>Your record was added successfully.</p>");
                } elseif ($_GET["result"] == "duplicate"){
                    echo("<p>The country code you entered is already in use.</p>");
                } elseif ($_GET["result"] == "invalid"){
                    echo("<p>You must complete all input fields.</p>");
                }
            }
        ?>
        <form action="create2.php" method="GET">
            <label for="code-input">Country Code:</label>
            <input type="text" name="country_code" id="code-input" minlength="2" maxlength="2">
            <br>
            <label for="name-input">Country Name:</label>
            <input type="text" name="country_name" id="name-input">
            <br>
            <label for="region-input">Region ID:</label>
            <select name="country_region" id="region-input">
                <option></option>
                <?php
                    $query = "SELECT * FROM `regions`";
                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($rows as $row){
                        echo("<option value='" . $row['region_id'] . "'>");
                        echo($row['region_name']);
                        echo("</option>");
                    }
                ?>
            </select>
            <br>
            <input type="submit">
        </form>
    </body>
</html>