<html><!--All of the code in this file was written by me-->
<head>
    <link rel="stylesheet" href="style.css">
    <?php include("db.php") ?>
</head>
<body>
    <h1>The link between guardianID=<?php echo($_GET["guardian_id"] . " and studentID=". $_GET["student_id"]); ?> will be deleted.</h1>
    <form action="delete3.php" method="GET">
        <input type="hidden" name="guardian_id" value="<?php echo($_GET["guardian_id"]); ?>">
        <input type="hidden" name="student_id" value="<?php echo($_GET["student_id"]); ?>">
        <input type="submit" value="DELETE"><!--value is used to change the text of the button-->
    </form>
    <form action="delete.php">
        <button type="submit">Go back</button>
    </form>
</body>
</html>