<?php
    session_start();
    
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "apartments";

    include("../Assets/dbconnect.php");

    date_default_timezone_set('UTC +3');
    $t = time();
    $email = $_SESSION['email'];

    $conn->query($sql);

    session_unset();
    session_destroy();

    $conn->close();

    header("Location: ../index.php");
?>