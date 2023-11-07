<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: ../index.php");
    }

    include "database.php";
    $sql = "SELECT * FROM customeraccount WHERE email = '$_SESSION[email]'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>