<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

include "database.php";

$errorMessage = "";
$successMessage = "";

$username = "";
$firstName = "";
$lastName = "";
$email = "";
$contact = "";

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
              
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    do{
      if(empty($username) OR empty($firstName) OR empty($lastName) OR empty($email) OR empty($contact) OR empty($password) OR empty($confirmPassword)){
        $errorMessage = "All fields are required";
        break;
      }if(!preg_match("/^[a-zA-Z0-9\s]+$/", $username)){
        $errorMessage = "Username should only contain letters and numbers";
        break;
      }if(!preg_match("/^[a-zA-Z\s]+$/", $firstName)){
        $errorMessage = "First Name should only contain letters";
        break;
      }if(!preg_match("/^[a-zA-Z\s]+$/", $lastName)){
        $errorMessage = "Last Name should only contain letters";
        break;
      }if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessage = "Email is not valid.";
        break;
      }if(!preg_match("/^[0-9\s]+$/", $contact)){
        $errorMessage = "Contact should only contain numbers";
        break;
      }if(strlen($contact)<11 OR strlen($contact)>11){
        $errorMessage = "Contact should be 11 digits long";
        break;
      }if (strlen($password)<8){
        $errorMessage = "Password must be at least 8 characters long.";
        break;
      }if($password!==$confirmPassword){
        $errorMessage = "Password does not match";
        break;
      }
      $usernameSql = "SELECT * FROM employeeaccount WHERE username = '$username'";
      $usernameResult = mysqli_query($conn, $usernameSql);
      $rowCount = mysqli_num_rows($usernameResult);
      if ($rowCount>0) {
        $errorMessage = "Username already exists!";
        break;
      }

      $emailSql = "SELECT * FROM employeeaccount WHERE username = '$email'";
      $emailResult = mysqli_query($conn, $emailSql);
      $rowCount = mysqli_num_rows($emailResult);
      if ($rowCount>0) {
      array_push($errors,"Email already exists!");
      }

      $accountSql = "INSERT INTO employeeaccount (username,firstname, lastname, email, contact, password) VALUES ('$username', '$firstName', '$lastName', '$email', '$contact', '$passwordHash')";
      mysqli_query($conn, $accountSql);
      header("Location: employee-register.php");
    }while(false);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ANIBAN, MATTHEW EMMANUEL DJ." />

    <!-- social links logo -->
    <script src="https://kit.fontawesome.com/29a620f807.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <title>Shukran Rentals - Employee Accounts</title>

  </head>

  <body>
    <?php include 'admin-header.php'; ?>

    <main class="staff-content">
      <div class="register-container rounded-3" align="center">
          <p class="fs-5">EMPLOYEE SIGN UP</p>
          <?php
              if(!empty($errorMessage))
              echo 
              "
              <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                  <h4 class='text-center'>$errorMessage</h4>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
              ";
          ?>

          <form action="employee-register.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username?>">
                            
            </div>  

            <div class="form-group">
              <input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php echo $firstName?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php echo $lastName?>">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="contact" placeholder="Contact Number" value="<?php echo $contact?>">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            </div>

            <div class="form-btn mb-3">
              <input type="submit" class="btn btn-danger col-6" value="Create Account" name="submit">
            </div>
          </form>
      </div>
    </main>

    <footer>
    </footer>

  </body>
</html>