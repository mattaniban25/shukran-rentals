<?php
session_start();
include "database.php";

$promoSql = "DELETE FROM employeeaccount WHERE id = $_GET[id]";

if($conn->query($promoSql) === TRUE){
    header("Location: employee-list.php");
}else{
    echo "Error deleting an account: ". $conn->error;
}

?>