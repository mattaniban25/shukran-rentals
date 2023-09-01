<?php
    session_start();
    if(isset($_SESSION["employeeuser"])){
        header("Location: employee-index.php");
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
    
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/style.css">
    <title>Shukran Rentals - Employee Register</title>

  </head>
  <body>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-2 border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container-fluid justify-content-center">
            <a href="#" class="navbar-brand">
                <img src="../IMAGES/Logo.png" height="75" alt="" class="">
            </a>
        </div>
      </nav>
    </div>

    <div class="content">
      <div class="register-container rounded-3" align="center">
      <?php
        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if(empty($username) OR empty($firstName) OR empty($lastName) OR empty($email) OR empty($contact) OR empty($password) OR empty($confirmPassword)){
                array_push($errors, "All fields are required");
            }if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid.");
            }if (strlen($password)<8){
                array_push($errors, "Password must be at least 8 characters long.");
            }if($password!==$confirmPassword){
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM employeeaccount WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
            array_push($errors,"Email already exists!");
            }
            
            if(count($errors)>0){
                foreach($errors as $error){
                echo"<div class='alert alert-danger'>$error</div>";
                }
            }else{
                $sql = "INSERT INTO employeeaccount (username,firstname, lastname, email, contact, password) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"ssssss",$username, $firstName, $lastName,$email, $contact, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                }else{
                    die("Something went wrong");
                }
            }
        }
      ?>
        <form action="employee-register.php" method="post">
          <p class="fs-5">EMPLOYEE SIGN UP</p>

          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>  

          <div class="form-group">
            <input type="text" class="form-control" name="firstName" placeholder="First Name">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="Contact Number">
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
    </div>

    <div class="footer">
      <div class="bg-dark border-top border-2 text-light border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="py-5">
          
        </div>
      </div>
    </div>
  </body>
</html>
