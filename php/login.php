<?php
    include "database.php";
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: index.php");
    }

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM customeraccount WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user){
            if (password_verify($password, $user["password"])){
                $_SESSION["user"] = "yes"; 
                $_SESSION["email"] = $email;
                header("Location: index.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ANIBAN, MATTHEW EMMANUEL DJ." />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <title>Shukran Rentals - Login</title>
  </head>

  <body>
    <?php include 'header.php'; ?>  

    <main>
      <div class="content bg-body-secondary">
          <div class="login-container rounded-3 bg-white" align="center">
              <form action="login.php" method="post">
                <p class="fs-5">LOGIN</p>

                <div class="form-group">
                    <input type="email" placeholder="Enter Email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control">
                </div>
                <div class="form-btn mb-3">
                    <input type="submit" value="Login" name="login" class="btn btn-danger col-6">
                </div>
                <div class="md-3">
                    <p>Not Registered yet? <a href="register.php">Register Here</a></p>
                </div>
                
                  <p>Employee? <a href="employee-login.php">Login Here</a></p>
              </form>
              
          </div>
      </div>
    </main>
  
    <?php include 'footer.php'; ?>  
  </body>
</html>
