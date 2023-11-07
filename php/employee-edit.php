<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
    exit();
}

include "database.php";
$id = "";
$username = "";
$firstName = "";
$lastName = "";
$email = "";
$contact = "";
$password = "";
$confirmPassword = "";

$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET["id"])){
        header("Location: employee-list.php");
        exit;
    }

    $id = $_GET["id"];
    $employeeSql = "SELECT * FROM employeeaccount WHERE id = $id";
    $employeeResult = $conn->query($employeeSql);
    $row = $employeeResult->fetch_assoc();

    if(!$row){
        header("Location: employee-list.php");
        exit;
    }

    $username = $row["username"];
    $firstName = $row["firstName"];
    $lastName = $row["lastName"];
    $email = $row["email"];
    $contact = $row["contact"];
}
else{
    $id = $_GET["id"];
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $emailConfirm = $_POST["email"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
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
    
        $emailSql = "SELECT * FROM employeeaccount WHERE email = '$email'";
        $emailResult = mysqli_query($conn, $emailSql);
        $rowCount = mysqli_num_rows($emailResult);
        
        if ($rowCount>0) {

            $emailCheckSql = "SELECT * FROM employeeaccount WHERE id = $id";
            $emailCheckResult = mysqli_query($conn, $emailCheckSql);
            $row = $emailCheckResult->fetch_assoc();
            $emailCheck = $row["email"];

            if($email == $emailCheck){
                $employeeSql = "UPDATE employeeaccount SET username = '$username', firstName = '$firstName', lastName = '$lastName', email = '$email', contact = '$contact', password = '$passwordHash' WHERE id = $id";
                mysqli_query($conn, $employeeSql);
                header("Location: employee-list.php");
            }
            else{
                $errorMessage = "Email already exists!";
                break;
            }
        }
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
    <title>Shukran Rentals - Admin Index</title>

  </head>

  <body class="bg-light">
  
    <?php include 'admin-header.php'; ?>

    <main class="staff-content">
      <div class="border border-4 border-primary-subtle register-container rounded-3 p-4  bg-white">
        <br>
          <p class="fs-5" align="center"><b class="text-primary">EDIT EMPLOYEE ACCOUNT</b></p>
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

          <form method="post">
            <input type="hidden" value="<?php echo $id; ?>">
            <div class="row">
              <div class="form-group">
                <input type="text" class="form-control bg-light text-primary border border-primary rounded-3" name="username" placeholder="Username" value="<?php echo $username?>" readonly>
              </div>  
            </div>
            
            <div class="row">
              <div class="form-group form-group col-lg-6 col-md-6 col-sm-12">
                <input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php echo $firstName?>">
              </div>

              <div class="form-group form-group col-lg-6 col-md-6 col-sm-12">
                <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php echo $lastName?>">
              </div>
            </div>

            <div class="row">
              <div class="form-group ">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email?>">
              </div>

              <div class="form-group ">
                <input type="text" class="form-control" name="contact" placeholder="Contact Number" value="<?php echo $contact?>">
              </div>
            </div>
            

            <div class="row">
              <div class="form-group form-group col-lg-6 col-md-6 col-sm-12">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>

              <div class="form-group form-group col-lg-6 col-md-6 col-sm-12">
                <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
              </div>
            </div>
            
            <?php
              if(!empty($successMessage)){
                  echo 
                  "
                  <div class='row'>
                      <div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <h4 class='text-center'>$successMessage</h4>
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                  </div>
                  ";
              }
              ?>

              <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <button type="submit" class="btn btn-success btn-sm" name="submit">Create Account</button>
                      <a class="btn btn-danger btn-sm" href="employee-list.php">Cancel</a>
                  </div>
              </div>           
          </form>
      </div>
    </main>

    <footer>
    </footer>
  </body>
</html>