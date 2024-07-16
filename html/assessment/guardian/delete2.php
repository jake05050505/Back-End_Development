<html><!--All of the code in this file was written by me-->
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>The entry with guardianID=<?php echo($_GET["delete_id"]) ?> will be deleted.</h1>
    <form action="delete3.php" method="GET">
        <input type="hidden" name="delete_id" value="<?php echo($_GET["delete_id"]); ?>">
        <input type="submit" value="DELETE">
    </form>
    <form action="delete.php">
        <button type="submit">Go back</button>
    </form>
</body>
</html>