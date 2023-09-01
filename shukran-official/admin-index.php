<?php
    session_start();
    if(!isset($_SESSION["adminuser"])){
        header("Location: admin-login.php");
    }

    require "database.php";
    $sql = "SELECT * FROM adminaccount WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);
    $adminuser = mysqli_fetch_array($result, MYSQLI_ASSOC);
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

    <link rel="stylesheet" href="style.css">
    <title>Shukran Rentals - Index</title>

  </head>

  <body>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-2 border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container-fluid justify-content-center">
          <a href="#" class="navbar-brand">
            <img src="../IMAGES/Logo.png" height="75" alt="" class="">
          </a>
          <div class="navbar-nav ms-auto px-4">
            <div class="navbar-nav">
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="content">
        <div class="container">
          <p>Welcome to Shukran Rentals, admin <?php echo $adminuser['id']?></p>
        </div>
    </div>

    <div class="footer">
    </div>
  </body>
</html>
