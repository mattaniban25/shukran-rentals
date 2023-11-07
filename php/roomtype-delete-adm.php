<?php
session_start();
include "database.php";

$roomTypeSql = "DELETE FROM roomtype WHERE id = $_GET[id]";

if($conn->query($roomTypeSql) === TRUE){
    header("Location: room-list-adm.php");
}else{
    echo "Error deleting a room type: ". $conn->error;
}

?>