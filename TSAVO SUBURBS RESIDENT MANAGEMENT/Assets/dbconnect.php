<?php
    $conn = new mysqli("localhost:3306", "", "", "tsavo");
    if($conn->connect_errno > 0)    {
        ?>
        <script>alert("Database connection could not be made :(");</script>
        <?php
    }