<html><!--All of the code in this file was written by me-->
<head>
    <link rel="stylesheet" href="style.css">
    <?php include("db.php") ?>
</head>
<body>
    <h1>The entry with <?php echo $dbID; ?>=<?php echo($_GET["delete_id"]) ?> will be deleted.</h1><br>
    <form action="delete3.php" method="GET">
        <input type="hidden" name="delete_id" value="<?php echo($_GET["delete_id"]); ?>">
        <input type="submit" value="DELETE"><!--value is used to change the text of the button-->
    </form>
    <form action="remove.php">
        <input type="hidden" name="delete_id" value="<?php echo($_GET["delete_id"]); ?>">
        <label>Or remove the studentID from the book:</label>
        <input type="submit" value="REMOVE">
    </form>
    <form action="delete.php">
        <input type="submit" value="Go back"></input>
    </form>
</body>
</html>