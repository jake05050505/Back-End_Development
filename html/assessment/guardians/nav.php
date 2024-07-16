<nav><!--All of the code in this file was written by me-->
    <!--Guardians-->
    <div>
        <a href="/assessment/guardians/get.php" aria-disabled="True">Parents & Guardians</a>
        <span>|</span>
        <a href="/assessment/library/get.php">Library data</a>
        <span>|</span>
        <a href="/assessment/staff/get.php">Staff</a>
        <span>|</span>
        <a href="/assessment/students/get.php">Students</a>
    </div>
    <div>
        <a href="/assessment/<?php echo($dbtable) ?>/create.php">create</a>
        <span>|</span>
        <a href="/assessment/<?php echo($dbtable) ?>/get.php">read</a>
        <span>|</span>
        <a href="/assessment/<?php echo($dbtable) ?>/edit.php">update</a>
        <span>|</span>
        <a href="/assessment/<?php echo($dbtable) ?>/delete.php">delete</a>
        <span>|</span>
        <a href="/assessment">index</a>
    </div>
    <br>
</nav>