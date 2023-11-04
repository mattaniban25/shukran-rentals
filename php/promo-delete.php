<?php
    if(isset($_GET["id"])){
        require_once "database.php";
        $id = $_GET["id"];
        $promoSql = "DELETE FROM promo WHERE id = $id";
        mysqli_query($conn, $promoSql);
        header("Location: promo.php");
    }
    else{
        header("Location: promo.php");
    }

?>