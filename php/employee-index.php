<?php
    session_start();
    if(!isset($_SESSION["employeeuser"])){
        header("Location: employee-login.php");
    }

    require "database.php";
    $sql = "SELECT * FROM employeeaccount WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);
    $employeeuser = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $pendingsql = "SELECT * FROM pendingreservations";
    $pendingresult = mysqli_query($conn, $pendingsql);
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
    <title>Shukran Rentals - Index</title>

  </head>

  <body>
    <div class="staff-header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-2 border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img class="logo-icon" src="../IMAGES/smallLogo.png" alt="">
          </a>

          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">Home</a>
                <a href="#" class="nav-item nav-link">Calendar</a>
                <a href="#" class="nav-item nav-link">Active Rooms</a>
                <a href="#" class="nav-item nav-link">Payments</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <div class="navbar-nav">
                  <div class="navbar-nav">
                    <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i></a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="sidebar bg-white">
      <aside>
        <header class="sidebar-header">
          <img class="logo-img" src="../IMAGES/employeeLogo.png" alt="">
          <img class="logo-icon" src="../IMAGES/smallLogo.png" alt="">
        </header>
        <nav>
          <button>
            <span>
              <i class="fa-solid fa-house"></i>
              <span>Home</span>
            </span>
          </button>

          <button>
            <span>
              <i class="fa-regular fa-calendar"></i>
              <span>Calendar</span>
            </span>
          </button>

          <button>
            <span>
              <i class="fa-solid fa-door-open"></i>
              <span>Active Rooms</span>
            </span>
          </button>

          <button>
            <span>
              <i class="fa-solid fa-peso-sign"></i>
              <span>Payments</span>
            </span>
          </button>

          <button>
            <span>
              <img src="../Images/Employee.jfif" alt="">
              <div class="navbar-nav ms-auto">
                <div class="navbar-nav">
                  <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span>Account</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </span>
          </button>
        </nav>
      </aside>
    </div>

    <div class="staff-content bg-light">
      <div class="mt-4">
        <p class="fs-3">Dashboard</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-primary shadow-sm rounded p-4  bg-white">
            <b class="text-primary">PENDING<br></b>
            <b class="fs-2">15</b>
          </div>
        </div>

        <div class=" col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-warning shadow-sm rounded p-4  bg-white">
            <b class="text-warning ">CONFIRMED<br></b>
            <b class="fs-2">10</b>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-success shadow-sm rounded p-4  bg-white">
            <b class="text-success">CHECKED-IN<br></b>
            <b class="fs-2">25</b>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-danger shadow-sm rounded p-4  bg-white">
            <b class="text-danger">ALL<br></b>
            <b class="fs-2">50</b>
          </div>
        </div>
      </div>
      
      <div class="mt-4">
        <b class="fs-5">Pending Reservations</b>
      </div>

     
    </div>
    
    <div class="footer">
    </div>
  </body>
</html>
