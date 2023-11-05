<?php
session_start();
include "database.php";

$promoSql = "DELETE FROM promo WHERE id = $_GET[id]";

if($conn->query($promoSql) === TRUE){
    header("Location: promo.php");
}else{
    echo "Error deleting a reservation: ". $conn->error;
}

?>