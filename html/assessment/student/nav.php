<?php include("db.php") ?>
<nav><!--All of the code in this file was written by me-->
    <!--Guardians-->
    <div>
        <a href="/assessment/guardian/get.php" aria-disabled="true">Parents & Guardians</a>
        <span>|</span>
        <a href="/assessment/library/get.php">Library data</a>
        <span>|</span>
        <a href="/assessment/staff/get.php">Staff</a>
        <span>|</span>
        <a href="/assessment/student/get.php">Students</a>
        <span>|</span>
        <a href="/assessment">index</a>
    </div>
    <div>
        <a href="/assessment/<?php echo($dbtable) ?>/create.php">create</a>
        <span>|</span>
        <a href="/assessment/<?php echo($dbtable) ?>/get.php">read</a>
        <span>|</span>
        <a href="/assessment/<?php echo($dbtable) ?>/edit.php">update</a>
        <span>|</span>
        <a href="/assessment/<?php echo($dbtable) ?>/delete.php">delete</a>
    </div>
    <br>
</nav>