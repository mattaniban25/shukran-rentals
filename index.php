<?php
    require "php/database.php";
    $promoSql = "SELECT * FROM promo";
    $promoResult = mysqli_query($conn, $promoSql);
    $promos = mysqli_fetch_all($promoResult, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ANIBAN, MATTHEW EMMANUEL DJ." />

    <!-- social links logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    <!-- bootleg -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- CSS FILE -->
    <link rel="stylesheet" href="css/style.css">
    <script defer src="javascript/app.js"></script>


    <!-- Animate On Scroll links -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>


    <title>Shukran Rentals - Login</title>

  </head>

  <body>
    <script>
      AOS.init();
    </script>
    <!-- NAVBAR -->

    <header>
      <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img src="IMAGES/Logo.png"  width="160" height="80" alt="" class=" border-end border-2 border-danger">
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
              <a href="index.php" class="nav-item page-header nav-link">Home</a>
              <a href="php/accommodations.php" class="nav-item page-header nav-link">Accommodations</a>
              <a href="php/events.php" class="nav-item page-header nav-link">Events</a>
              <a href="php/leisure.php" class="nav-item page-header nav-link">Leisure</a>
              <a href="php/about-us.php" class="nav-item page-header nav-link">About Us</a>
              <a href="php/terms.php" class="nav-item page-header nav-link">Terms & Conditions</a>     
            </div>
            <div class="navbar-nav ms-auto">
              <a href="php/register.php" class="nav-item page-header nav-link"><strong>Register</strong></a>
              <a href="php/login.php" class="nav-item page-header nav-link"><strong>Login</strong></a>
            </div>
          </div>
        </div>
      </nav>
      
      
    <!-- BOTTOM NAVBAR -->
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">SHUKRAN RENTALS OPC</a>
            <div class="d-flex">
              <a href="#location" class="nav-link me-4"><i class="fa-solid fa-location-dot fa-xl me-2 ms-2" style="color: #aa2400;"></i>Locate Us</a>
              <a href="" class="nav-link me-4" style="cursor:alias">
              <i class="fa-solid fa-phone fa-xl me-2 ms-2" style="color: #aa2400;"></i>099191919191</a>
            </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- CAROUSEL -->
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="IMAGES/carousel-shukneneng.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
                  <!--
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                  -->
            </div>
          </div>
              
          <div class="carousel-item" data-bs-interval="5000">
          <img src="IMAGES/carousel-pool.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                  <!--
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                  -->
          </div>
          </div>

          <div class="carousel-item" data-bs-interval="5000">
          <img src="IMAGES/carousel-side.JPG" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                  <!--
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                  -->
            </div>
          </div>
        </div>
      <!-- WELCOME CONTENT -->
                  
      <div class="container" align="center" style="width:90%;">
        <p class="welcome-message h4 fs-4 mt-3 mb-3" >WELCOME TO SHUKRAN RENTALS OPC</p>
        <div class="mb-5 col-lg-6 col-md-6 col-sm-12">
          <p align="center" class="">Welcome to Shukran Rentals, your go-to destination for affordable staycations. Relax, unwind, 
            and enjoy a weekend or holiday getaway without breaking your budget. Find the perfect accommodation option and make the
            most of your time off.</p>
        </div>
      </div>

      <!-- WELCOME IMAGES -->

        <div class="container" align="center">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <div class="thumbnail">
                <img src="IMAGES/roomSample.jpg"  style="width:100%;" class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
              </div>
            </div>

            <div class="col-lg-4 col-sm-12">
              <div class="thumbnail">
                <img src="IMAGES/roomSample2.jpg"  style="width:100%" class="img-fluid mb-3" data-aos="fade" data-aos-duration="2500" data-aos-once="true">
              </div>
            </div>

            <div class="col-lg-4 col-sm-12">
              <div class="thumbnail">
                <img src="IMAGES/roomSample3.jpg"  style="width:100%" class="img-fluid mb-3" data-aos="fade" data-aos-duration="3000" data-aos-once="true">
              </div>
            </div>
          </div>
        </div>
        
      <!-- WELCOME CONTENT -->
        <div class="welcome-div" align="center">
          <div class="welcome-description">
            <div class="shukran-experience">
              <h3 class="welcome-message h2">Want the Shukran experience?</h3>
              <p>Create an account now to start booking with us!</p>
              <a class="btn btn-danger pe-5 ps-5 mb-5"href="php/register.php">REGISTER</a>
            </div>
          </div>
        </div>

        <div class="general-section1" style="padding:50px 0px 50px 0px;">
          <div class="container " align="center">
            <div class="row gap-0">
              <div class="col-lg-4 pb-2">
                <div class="card h-100" style="width: 18rem;">
                  <div class="card-body">
                    <i class="fa-solid fa-house-circle-check fa-2xl mb-4" style="color: #000000;"></i>
                    <h5 class="card-title mb-4">Accommodations</h5>
                    <p class="card-text">Have your cozy staycation with us! Explore our wide selection of rooms.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 pb-2">
                <div class="card h-100" style="width: 18rem;">
                  <div class="card-body">
                    <i class="fa-solid fa-champagne-glasses fa-2xl mb-4" style="color: #000000;"></i>
                    <h5 class="card-title mb-4">Events & Celebrations</h5>
                    <p class="card-text">Venues and Spaces for your celebrations</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 pb-2">
                <div class="card h-100" style="width: 18rem;">
                  <div class="card-body">
                    <i class="fa-solid fa-dumbbell fa-2xl mb-4" style="color: #000000;"></i>
                    <h5 class="card-title mb-4">Lifestyle & Leisure</h5>
                    <p class="card-text">Fitness, Chill, Drink, Watch & Play!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container" style="width:80%;">
            <div class="row" >
              
                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Cozy rooms
                </div>

                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Free WiFi
                </div>

                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Extended stays
                </div>

                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> No cancellation policy
                </div>
            </div>

            <div class="row" >
                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Affordable
                </div>
              
                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Accessible
                </div>

                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Stay now, Pay later
                </div>

                <div class="col-lg-3 mb-2" style="text-align:left;">
                  <i class="fa-regular fa-circle-check fa-lg" style="color: #000000;"></i> Monthly Promos
                </div>    
            </div>
          </div>
        </div>
      
      <!-- DEALS AND OFFERS SECTION -->
      
        <div class="general-section2">
          <h3 class ="fs-2" align="center" >Special deals and offers every month!</h3>
            <div class="container"style="width:90%;">
              <p align="center">Discover the latest promos and discounts offered by our hotel. 
              Check out our monthly promos and special offers to make your stay even more affordable and enjoyable.</p>
            </div>
          <div class="container" align="center">
            <div class="row" style="justify-content: center;">
              
              <?php 
              foreach ($promos as $promo):
                  echo "<div class=\"col-lg-4 col-sm-12 col-md-12 mb-5\">";
                    echo "<div class=\"card shadow-lg p-2 bg-body-tertiary rounded cards h-100\" style=\"width: 18rem;\">";
                    echo "<img class=\"card-img-top\" src=\"images/promos/" . $promo["promoImage"] . "\" alt=\"Card image\" object-fit: cover;>";
                      echo "<div class=\"card-body\">";
                      echo "<h4 class=\"card-title\">" . $promo["promoName"] . "</h4>";
                      echo "<p class=\"card-text\">" . $promo["promoDescription"] . "</p>";
                      echo "<button type=\"button\" class=\"btn btn-link\" data-bs-toggle=\"modal\" data-bs-target=\"#promoOne\"><a href=\"#promoOne\" class=\"btn btn-danger\">View Details</a></button>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
             endforeach; 
             ?>
            </div>
          </div>
      



      <!--Modal for promo one-->
      <div class="modal fade" id="promoOne" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Shukran Rentals OPC | Promo Details - valid until the end of November</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" > 
                <ol>
                  <li>Pay as you Ckeck-in and Strictly</li>
                  <li>Pay as you Order - Please pay food bill.</li>
                  <li>Head Counts is being implemented.</li>
                  <li>
                    The Management is Not Responsible for the safekeeping of any
                    personal belongings or valuables.
                  </li>
                  <li>
                    Banning of illegal drugs, illegal gambling and other illegal
                    activities are strictly observed. Firearms and ammunition
                    are Not Allowed.
                  </li>
                  <li>
                    All units are presented in Good Condition. Please
                    immediately upon check-in, for any other issues. Rooms and
                    Facilities are provided as is. Any damages that may occur,
                    will be CHARGED ACCORDINGLY.
                  </li>
                  <li>
                    Please do not bring materials not limited to decors and
                    equipment that are owned by the property. Otherwise, it is
                    right to consider such item as sold and must be Paid by the
                    Guest.
                  </li>
                  <li>
                    Violence and Misconduct of any sort will not be tolerated.
                  </li>
                  <li>
                    Security Guard on Duty, reserves the RIGHT TO INSPECT any
                    container, or closed packages that are visibly unique or
                    deem suspicious which are being brought in and out of the
                    building premises.
                  </li>
                  <li>
                    Keeping the noise at minimum to avoid disturbing other
                    Guests is at everyone's interests.
                  </li>
                  <li>
                    The Management will not be liable for any damage or loss of
                    a vehicle.
                  </li>
                  <li>
                    Loitering in hallways (especially for children) and
                    Vandalism within the premises are not allowed and offenders
                    of such acts will be given proper sanctions.
                  </li>
                  <li>
                    Tampering of Equipment's is considered a Criminal Act and
                    will not be taken lightly by the Management.
                  </li>
                  <li>
                    Strictly NO SMOKING inside the Rooms and triggering of Smoke
                    Detector Alarm will result to a P 500.00 FINE or more. There
                    is a Smoking Area specifically provided by the Management.
                  </li>
                  <li>
                    Disposal of waste must be properly stowed in the provided
                    Trash Bins.
                  </li>
                  <li>
                    The Management reserves the Right to Vacate Rooms that
                    exceeds reservation period.
                  </li>
                  <li>
                    Room Keys are to be surrendered to Lobby Personnel or
                    Security Guard on Duty upon Checking out. Lost Keys are
                    charged for P 500.00 without exemption
                  </li>
                  <li>
                    Occasional Events, Parties and other Celebratory Gatherings
                    must follow the permissible 10:00 PM Barangay ordinance.
                  </li>
                  <li>
                    For other Terms & Conditions apply. You can ask the Front
                    desk Clerk for the full list.
                  </li>
                </ol>
        
        
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Modal for promo two-->
      <div class="modal fade" id="promoTwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Shukran Rentals OPC | Promo Details - valid until end of the month</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" > 
                <ol>
                  <li>Pay as you Ckeck-in and Strictly</li>
                  <li>Pay as you Order - Please pay food bill.</li>
                  <li>Head Counts is being implemented.</li>
                  <li>
                    The Management is Not Responsible for the safekeeping of any
                    personal belongings or valuables.
                  </li>
                  <li>
                    Banning of illegal drugs, illegal gambling and other illegal
                    activities are strictly observed. Firearms and ammunition
                    are Not Allowed.
                  </li>
                  <li>
                    All units are presented in Good Condition. Please
                    immediately upon check-in, for any other issues. Rooms and
                    Facilities are provided as is. Any damages that may occur,
                    will be CHARGED ACCORDINGLY.
                  </li>
                  <li>
                    Please do not bring materials not limited to decors and
                    equipment that are owned by the property. Otherwise, it is
                    right to consider such item as sold and must be Paid by the
                    Guest.
                  </li>
                  <li>
                    Violence and Misconduct of any sort will not be tolerated.
                  </li>
                  <li>
                    Security Guard on Duty, reserves the RIGHT TO INSPECT any
                    container, or closed packages that are visibly unique or
                    deem suspicious which are being brought in and out of the
                    building premises.
                  </li>
                  <li>
                    Keeping the noise at minimum to avoid disturbing other
                    Guests is at everyone's interests.
                  </li>
                  <li>
                    The Management will not be liable for any damage or loss of
                    a vehicle.
                  </li>
                  <li>
                    Loitering in hallways (especially for children) and
                    Vandalism within the premises are not allowed and offenders
                    of such acts will be given proper sanctions.
                  </li>
                  <li>
                    Tampering of Equipment's is considered a Criminal Act and
                    will not be taken lightly by the Management.
                  </li>
                  <li>
                    Strictly NO SMOKING inside the Rooms and triggering of Smoke
                    Detector Alarm will result to a P 500.00 FINE or more. There
                    is a Smoking Area specifically provided by the Management.
                  </li>
                  <li>
                    Disposal of waste must be properly stowed in the provided
                    Trash Bins.
                  </li>
                  <li>
                    The Management reserves the Right to Vacate Rooms that
                    exceeds reservation period.
                  </li>
                  <li>
                    Room Keys are to be surrendered to Lobby Personnel or
                    Security Guard on Duty upon Checking out. Lost Keys are
                    charged for P 500.00 without exemption
                  </li>
                  <li>
                    Occasional Events, Parties and other Celebratory Gatherings
                    must follow the permissible 10:00 PM Barangay ordinance.
                  </li>
                  <li>
                    For other Terms & Conditions apply. You can ask the Front
                    desk Clerk for the full list.
                  </li>
                </ol>
        
        
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
            </div>

          </div>
        </div>
      </div>


      <!--Modal for promo three-->
      <div class="modal fade" id="promoThree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Shukran Rentals OPC | Promo Details - valid until December</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" > 
                <ol>
                  <li>Pay as you Ckeck-in and Strictly</li>
                  <li>Pay as you Order - Please pay food bill.</li>
                  <li>Head Counts is being implemented.</li>
                  <li>
                    The Management is Not Responsible for the safekeeping of any
                    personal belongings or valuables.
                  </li>
                  <li>
                    Banning of illegal drugs, illegal gambling and other illegal
                    activities are strictly observed. Firearms and ammunition
                    are Not Allowed.
                  </li>
                  <li>
                    All units are presented in Good Condition. Please
                    immediately upon check-in, for any other issues. Rooms and
                    Facilities are provided as is. Any damages that may occur,
                    will be CHARGED ACCORDINGLY.
                  </li>
                  <li>
                    Please do not bring materials not limited to decors and
                    equipment that are owned by the property. Otherwise, it is
                    right to consider such item as sold and must be Paid by the
                    Guest.
                  </li>
                  <li>
                    Violence and Misconduct of any sort will not be tolerated.
                  </li>
                  <li>
                    Security Guard on Duty, reserves the RIGHT TO INSPECT any
                    container, or closed packages that are visibly unique or
                    deem suspicious which are being brought in and out of the
                    building premises.
                  </li>
                  <li>
                    Keeping the noise at minimum to avoid disturbing other
                    Guests is at everyone's interests.
                  </li>
                  <li>
                    The Management will not be liable for any damage or loss of
                    a vehicle.
                  </li>
                  <li>
                    Loitering in hallways (especially for children) and
                    Vandalism within the premises are not allowed and offenders
                    of such acts will be given proper sanctions.
                  </li>
                  <li>
                    Tampering of Equipment's is considered a Criminal Act and
                    will not be taken lightly by the Management.
                  </li>
                  <li>
                    Strictly NO SMOKING inside the Rooms and triggering of Smoke
                    Detector Alarm will result to a P 500.00 FINE or more. There
                    is a Smoking Area specifically provided by the Management.
                  </li>
                  <li>
                    Disposal of waste must be properly stowed in the provided
                    Trash Bins.
                  </li>
                  <li>
                    The Management reserves the Right to Vacate Rooms that
                    exceeds reservation period.
                  </li>
                  <li>
                    Room Keys are to be surrendered to Lobby Personnel or
                    Security Guard on Duty upon Checking out. Lost Keys are
                    charged for P 500.00 without exemption
                  </li>
                  <li>
                    Occasional Events, Parties and other Celebratory Gatherings
                    must follow the permissible 10:00 PM Barangay ordinance.
                  </li>
                  <li>
                    For other Terms & Conditions apply. You can ask the Front
                    desk Clerk for the full list.
                  </li>
                </ol>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!--Main content section-->

      <!--Main content section (Accommodations)-->

      <div class="general-section1" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
        <div class="container">
          <div class="row " align="center">
            <div class="col-lg-6 col-sm-12">
                <img src="IMAGES/Rooms/Standard Room/standard_room5.jpeg" alt="" class="img-fluid" style="width:85%; vertical-align:middle;" >
            </div>
              <div class="col-lg-6 col-sm-12 align-self-center" >
                <div class="home-description" style="width:80%;">
                  <p class="fs-2" style="text-align:left">ACCOMODATIONS</p>
                  <div style="text-align:left">
                    <hr class="border border-danger opacity-100 w-50 mb-3">
                    
                    <p align="justify" class="fs-6">Discover and explore the ideal space for your stay, explore the range of accommodations, 
                    each beautifully designed to give you enjoyment and comfort. From cozy getaways to luxurious suites, 
                    find the perfect room to make your stay memorable and one for the books.</p>
                    <a class="btn btn-danger ps-5 pe-5 mt-3" href="php/accommodations.php" align="justify">EXPLORE</a> 
                  </div>    
                </div>
              </div>
          </div>
        </div>
      </div>


      <!--Main content section (Events & Celebrations)-->

      <div class="general-section2" data-aos="fade-left" data-aos-duration="2000" data-aos-once="true">
        <div class="container">
          <div class="row " align="center">
            <div class="col-lg-6 col-sm-12">
                <img src="IMAGES/events.jpg" alt="" class="img-fluid" style="width:85%; vertical-align:middle;" >
            </div>
              <div class="col-lg-6 col-sm-12 align-self-center" >
                <div class="home-description" style="width:80%;">
                  <p class="fs-2" style="text-align:left">EVENTS & CELEBRATIONS</p>
                  <div style="text-align:left">
                    <hr class="border border-danger opacity-100 w-50 mb-3">
                    
                    <p align="justify" class="fs-6">Level up your special moments with Shukran, whether it’s a wedding reception, 
                    business meeting, or a personal celebration, Shukran offers a versatile and modern events and 
                    celebrations venue. With ideal spaces, modern amenities, and a cooperative team, we ensure your 
                    events are elevated to extraordinary experiences.</p>
                    <a class="btn btn-danger ps-5 pe-5 mt-3" href="php/events.php" align="justify">EXPLORE</a> 
                  </div>    
                </div>
              </div>
          </div>
        </div>
      </div>

      
      <!--Main content section (Lifestyle & Leisure)-->

      <div class="general-section1"  data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
        <div class="container">
          <div class="row " align="center">
            <div class="col-lg-6 col-sm-12">
                <img src="IMAGES/accommodations.jpg" alt="" class="img-fluid" style="width:85%; vertical-align:middle;" >
            </div>
              <div class="col-lg-6 col-sm-12 align-self-center" >
                <div class="home-description" style="width:80%;">
                  <p class="fs-2" style="text-align:left">LIFESTYLE & LEISURE</p>
                  <div style="text-align:left">
                    <hr class="border border-danger opacity-100 w-50 mb-3">
                    
                    <p align="justify" class="fs-6">Experience lifestyle and leisure, unwind and rejuvenate with Shukran’s array of facilities. 
                    From a serene jacuzzi experience to fitness facilities, our hotel invites you to immerse yourself 
                    in relaxation and enjoy the finer aspects of life.</p>
                    <a class="btn btn-danger ps-5 pe-5 mt-3" href="php/leisure.php" align="justify">EXPLORE</a> 
                  </div>    
                </div>
              </div>
          </div>
        </div>
      </div>

      
      <!--Main content section (Location)-->

      <div class="general-section2" id="location">
        <div class="container mb-3">
          <p align="center" class="mb-4 fs-2">Find us here</p>
          
          <div class="row">
            <div class="col-lg-6 col-sm-12" >
              <iframe
                class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.567465641522!2d120.99095667585827!3d14.509502179299053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf32b2aaad23%3A0xc97d82f0d90ec2c7!2sRedDoorz%20near%20Tambo%20Quirino%20Avenue!5e0!3m2!1sen!2sph!4v1681727905452!5m2!1sen!2sph"
                width="600"
                height="500"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
                    
            </div>

            <div class="col-lg-6 col-sm-12" align="center">
              <p class="pt-3 pb-3 fs-3">What's near us:</p>
              
              <ul class="list-group" style="width:90%;">
                <li class="list-group-item">SM Mall Of Asia: <strong>approx 3.08km</strong></li>
                <li class="list-group-item">NAIA Terminals 1-4: <strong>approx 1.21km - 2.54km</strong></li>
                <li class="list-group-item">Paranaque Integrated Terminal Exchange(PITX): <strong>approx 0.24km</strong></li>
                <li class="list-group-item">Ayala Malls Manila bay: <strong>approx 1.62km</strong></li>
                <li class="list-group-item">DFA Main Office Roxas blvd: <strong>approx 4.11km</strong></li>
                <li class="list-group-item">IKEA: <strong>approx 2.75km</strong></li>
                <li class="list-group-item">Divi Mall Tambo Paranaque: <strong>0.22km</strong></li>
                <li class="list-group-item">7/11: <strong>0.88km</strong></li>
                <li class="list-group-item">Uncle John's: <strong>0.92km</strong></li>
                <li class="list-group-item">Some local restaurants within the locality</li>
              </ul>    
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="footer">
      <div class="bg-dark border-top border-2 text-light border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container p-4 pb-0">
          <section class="">
            <div class="row">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-center justify-content-center">
                <img src="IMAGES/logo.png" alt="" height="125">
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
