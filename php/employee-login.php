<?php
    session_start();
    if(isset($_SESSION["employeeuser"])){
        header("Location: employee-index.php");
    }

    if(isset($_SESSION["adminuser"])){
      header("Location: admin-index.php");
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
    <title>Shukran Rentals - Login</title>

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
        <div class="login-container rounded-3" align="center">
            <?php
                if(isset($_POST["employee-login"])){
                    require_once "database.php";
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $sql = "SELECT * FROM employeeaccount WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql);
                    $employeeuser = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($employeeuser){
                        if (password_verify($password, $employeeuser["password"])){
                            session_start();
                            $_SESSION["employeeuser"] = "yes"; 
                            $_SESSION["username"] = $username;
                            header("Location: employee-index.php");
                            die();
                        }else{
                            echo "<div class='alert alert-danger'>Password does not match</div>";
                        }
                    }else{
                        echo "<div class='alert alert-danger'>Username does not match</div>";
                    }
                }
            ?>

            <?php
                if(isset($_POST["admin-login"])){
                    require_once "database.php";
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $sql = "SELECT * FROM adminaccount WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql);
                    $adminuser = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($adminuser){
                        if (password_verify($password, $adminuser["password"])){
                            session_start();
                            $_SESSION["adminuser"] = "yes"; 
                            $_SESSION["username"] = $username;
                            header("Location: admin-index.php");
                            die();
                        }else{
                            echo "<div class='alert alert-danger'>Password does not match</div>";
                        }
                    }else{
                        echo "<div class='alert alert-danger'>Username does not match</div>";
                    }
                }
            ?>
            <form action="employee-login.php" method="post">
              <p class="fs-5">EMPLOYEE LOGIN</p>

              <div class="form-group">
                  <input type="text" placeholder="Enter Username:" name="username" class="form-control">
              </div>
              <div class="form-group">
                  <input type="password" placeholder="Password:" name="password" class="form-control">
              </div>
              <div class="form-btn mb-3">
                  <input type="submit" value="Employee" name="employee-login" class="btn btn-danger col-md-5 col-lg-5 col-xl-5" style="">
                  <input type="submit" value="Admin" name="admin-login" class="btn btn-danger col-md-5 col-lg-5 col-xl-5" style="">
              </div>
            </form>
            
        </div>
    </div>

    <div class="footer">
      <div class="bg-dark border-top border-2 text-light border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container p-4 pb-0">
          <section class="">
            <div class="row">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-center justify-content-center">
                <img src="../IMAGES/logo.png" alt="" height="125">
              </div>

              <hr class="w-100 clearfix d-md-none" />

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
                <p><a class="text-white" href="#">Home</a></p>
                <p><a class="text-white" href="#">About Us</a></p>
                <p><a class="text-white" href="#">Facilities & Amenities</a></p>
              </div>

              <hr class="w-100 clearfix d-md-none" />

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"><p>&nbsp;</p></h6>
                <p><a class="text-white" href="#">Photo Gallery</a></p>
                <p><a class="text-white" href="#">Contact Us</a></p>
                <p><a class="text-white" href="#">Terms & Conditions</a></p>
              </div>

              <hr class="w-100 clearfix d-md-none" />

              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="fas fa-home mr-3"></i> 3384 Arias Compound, Parañaque, 1701 Metro Manila</p>
                <p><i class="fas fa-phone mr-3"></i> +63 998 991 7073</p>
                <p><i class="fas fa-envelope mr-3"></i> shukranrentalsopc@gmail.com	</p>
              </div>
            </div>
          </section>

          <hr class="my-3">

          <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
              <div class="col-md-7 col-lg-8 text-center text-md-start">
                <div class="p-3">
                  <p>© 2023 | Shukran Rentals OPC</p>
                </div>
              </div>
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
