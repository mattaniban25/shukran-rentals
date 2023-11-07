<?php
session_start();
include "database.php";

$roomNumberSql = "DELETE FROM rooms WHERE id = $_GET[id]";

if($conn->query($roomNumberSql) === TRUE){
    header("Location: room-list-adm.php");
}else{
    echo "Error deleting a room: ". $conn->error;
}

?>