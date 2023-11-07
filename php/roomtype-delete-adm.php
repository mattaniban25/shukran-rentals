<?php
session_start();
include "database.php";

$promoSql = "DELETE FROM roomtype WHERE id = $_GET[id]";

if($conn->query($promoSql) === TRUE){
    header("Location: room-list-adm.php");
}else{
    echo "Error deleting a room type: ". $conn->error;
}

?>