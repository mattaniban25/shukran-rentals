<?php
include "database.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    $sql = "INSERT INTO employeeaccount (username, firstName, lastName, email, contact, password) VALUES ('$username', '$firstName', '$lastName', '$email', '$contact', '$password')";

}
$conn->close();
?>