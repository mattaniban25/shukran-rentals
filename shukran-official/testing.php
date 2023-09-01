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

    <link rel="stylesheet" href="testing.css">
    <title>Testing </title>
  </head>

  <body>
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
              <span>Payments hee hee michael jackson aye</span>
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
          <div class="border-start border-4 border-primary shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'London')">
            <b class="text-primary">PENDING<br></b>
            <b class="fs-2">15</b>
          </div>
        </div>

        <div class=" col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-warning shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'Paris')">
            <b class="text-warning ">CONFIRMED<br></b>
            <b class="fs-2">10</b>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-success shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'Tokyo')">
            <b class="text-success">CHECKED-IN<br></b>
            <b class="fs-2">25</b>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-3" style="">
          <div class="border-start border-4 border-danger shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'London')">
            <b class="text-danger">ALL<br></b>
            <b class="fs-2">50</b>
          </div>
        </div>
      </div>
      

      <!-- Tab content -->
      <div id="London" class="tabcontent bg-primary">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
      </div>

      <div id="Paris" class="tabcontent bg-warning">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
      </div>

      <div id="Tokyo" class="tabcontent bg-success">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>

      <script>
        function openCity(evt, cityName) {
          // Declare all variables
          var i, tabcontent, tablinks;

          // Get all elements with class="tabcontent" and hide them
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }

          // Get all elements with class="tablinks" and remove the class "active"
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }

          // Show the current tab, and add an "active" class to the button that opened the tab
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
      </script>
     
    </div>
  </body>
</html>
