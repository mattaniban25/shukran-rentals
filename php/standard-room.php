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
    <link rel="stylesheet" href="../css/style.css">

    <title>Shukran Rentals - Login</title>

  </head>

  <body>
    
    <div class="header">
      <nav class="navbar navbar-expand-lg" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img src="../IMAGES/Logo.png"  width="80" height="40" alt="" class=" border-end border-2 border-danger">
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../default-index.php" class="nav-item page-header nav-link">Home</a>
                <a href="default-accommodations.php" class="nav-item page-header nav-link">Accommodations</a>
                <a href="default-events.php" class="nav-item page-header nav-link">Events</a>
                <a href="#" class="nav-item page-header nav-link">Leisure</a>
                <a href="#" class="nav-item page-header nav-link">Contact Us</a>
                <a href="#" class="nav-item page-header nav-link">Terms & Conditions</a>
            </div>
            <div class="navbar-nav ms-auto">
              <a href="register.php" class="nav-item page-header nav-link"><strong>Register</strong></a>
              <a href="login.php" class="nav-item page-header nav-link"><strong>Login</strong></a>
            </div>
        </div>
        </div>
      </nav>


      <nav class="navbar bg-body-tertiary shukran-navbar">
        <div class="container-fluid" id="shukran-navbar">
          <a class="navbar-brand">SHUKRAN RENTALS OPC</a>
          <div class="d-flex">
            <a href="#location" class="nav-link me-4"><i class="fa-solid fa-location-dot fa-xl me-2 ms-2" style="color: #aa2400;"></i>Locate Us</a>

            <a href="" class="nav-link me-4" style="cursor:alias">
            <i class="fa-solid fa-phone fa-xl me-2 ms-2" style="color: #aa2400;"></i>099191919191</a>
          </div>
        </div>
      </nav>
    </div>

      
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12" align="center ">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../IMAGES/roomOne.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../IMAGES/roomSample.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../IMAGES/roomSample2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <p class="fs-1">Standard Room</p>
                <p>Experience comfort and convenience in our standard room, featuring a King size bed, a bathroom, and essential 
                    amenities that you will be needing during your stay. Unwind while watching your favorite shows on the TV, catch 
                    up on work using the room table, stir and enjoy a cup of coffee with the help of our electric kettle. Our standard 
                    room comes in with simple and neutral décor which offers a welcoming retreat during your stay.</p> 
                    
                <p class="fs-3">Room Amenities</p>

                <ol>
                    <li>Comfort Room</li>
                    <li>Sink</li>
                    <li>Lavatory</li>
                    <li>Electric Outlets</li>
                    <li>Swimming pool access (7AM - 10PM)</li>
                    <li>Gym access</li>
                </ol>

                <br>
                <p class="fs-6"><i>Note: Additional items such as pillows, mattresses, etc. are available upon request in the receptionist area.</i></p>
               <!-- <div class="row">
                    <div class="col-6">
                    <p class="fs-2">500 SQM</p>
                    </div>
                    <div class="col-6">
                    <p class="fs-3">4 Max Guests</p>
                    </div>
                    <div class="col-6">
                    <p class="fs-3">2 Beds</p>
                    </div>
                    <div class="col-6">
                    <p class="fs-3">1 Bedroom</p>
                    </div>
                </div>-->

            </div>
        </div>
    </div>

    
     <div class="container">
        <div class="row">
            <div class="col-3">
                <p class="fs-2">500 SQM</p>
            </div>
            <div class="col-3">
                <p class="fs-2">4 Max Guests</p>
            </div>
            <div class="col-3">
                <p class="fs-2">2 Beds</p>
            </div>
            <div class="col-3">
                <p class="fs-2">1 Bedroom</p>
            </div>
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
