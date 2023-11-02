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

    <!-- Icons -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    
    <!-- CSS FILE -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Shukran Rentals - Login</title>

  </head>

  <body>
    
    <?php include 'header.php'; ?> 

    <main>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12" align="center ">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>

              <div class="carousel-inner">

                <div class="carousel-item active">
                  <img src="../IMAGES/Rooms/Jacuzzi Room/316 Jacuzzi Room/316_jacuzzi1.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Jacuzzi Room/316 Jacuzzi Room/316_jacuzzi2.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Jacuzzi Room/105 Jacuzzi Room/105_jacuzzi2.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Jacuzzi Room/Jacuzzi Room 2.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Jacuzzi Room/105 Jacuzzi Room/105_jacuzzi4.jpg" class="d-block w-100" alt="...">
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
            <p class="fs-1">Jacuzzi Room</p>
            <p>Dip yourself in luxury and serenity with our captivating Jacuzzi room. A room of relaxation as you soak away your
                 exhaustion in the indulgent embrace of a private Jacuzzi tub. This ideal space also features a comfortable bed, 
                 modern amenities, and a soothing ambiance that invites you to unwind and relax. Our Jacuzzi room offers a blissful 
                 retreat for an unforgettable stay.
            </p> 
            
            <p class="fs-3">Room features</p>
              <ol>
                <li><i class="fi fi-rs-bed-alt pe-3"></i>One queen-sized bed</li>
                <li><i class="fi fi-rs-fan pe-3"></i>Ceiling fan</li>
                <li><i class="fi fi-rs-bath pe-3"></i>Jacuzzi bathtub</li>
                <li><i class="fi fi-rs-tshirt pe-3"></i>Bath robes</i></li>
                <li><i class="fi fi-rs-toilet pe-3"></i>Comfort Room</li>
                <li><i class="fi fi-rs-faucet pe-3"></i>Sink</li>
                <li><i class="fi fi-rs-sink pe-3"></i>Lavatory</li>
                <li><i class="fi fi-rs-charging-station pe-3"></i>Electric Outlets</li>
                <li><i class="fi fi-rs-swimmer pe-3"></i>Swimming pool access (7AM - 10PM)</li>
                <li><i class="fi fi-rs-biking pe-3"></i>Gym access</li>
              </ol>
              <br>
              <p class="fs-6"><i>Note: Additional items such as pillows, mattresses, etc. are available upon request in the receptionist area or through the room service telephone.</i></p>
              <?php include 'room-inclusions.php'; ?> 
          </div>
        </div>
      </div>
                
      <div align="center" class="text-secondary">
        <hr class="border opacity-50 w-75">
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <p class="fs-5">Price: ₱5,000</p>
            <p class="fs-5">Check In: 2 PM</p>
            <p class="fs-5">Check Out: 12 PM</p>
            <a class="btn btn-danger ps-4 pe-4 mt-3"href="mode-of-payment.php">Book Now</a>
          </div> 
        </div>
      </div>

      <div align="center" class="text-secondary">
        <hr class="border opacity-100 w-75">
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </body>
