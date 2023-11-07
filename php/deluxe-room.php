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
              </div>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../IMAGES/Rooms/Deluxe Rooms/deluxe1.jpeg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Deluxe Rooms/deluxe2.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Deluxe Rooms/deluxe3.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Deluxe Rooms/deluxe4.jpeg" class="d-block w-100" alt="...">
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
            <p class="fs-1">Deluxe Room</p>
            <p>Stir up your stay with our Deluxe One-Bedroom suite, a space designed for ultimate relaxtion. Enjoy the spacious comfort of a separate bedroom, furnished with a king sized bed and tasteful decor. Unwind in our neutral and modern living area, complete with 
              comfortable seating and modern amenities such as a smart fflat screen TV for entertainment. Enjoy the conevnience of having a simple furnish kitchenette, perfect for preparing light meals or enjoying a cup of coffee. Our Deluxe Room will surely make your stay execeptional.
            </p> 
            
            <p class="fs-3">Room features</p>
              <ol>
                <li><i class="fi fi-rs-bed-alt pe-3"></i>One queen-sized bed</li>
                <li><i class="fi fi-rs-door-closed pe-3"></i>One bedroom</i></li>
                <li><i class="fi fi-rs-couch pe-3"></i>Living room</li>
                <li><i class="fi fi-rs-toilet pe-3"></i>Comfort Room</li>
                <li><i class="fi fi-rs-faucet pe-3"></i>Sink</li>
                <li><i class="fi fi-rs-sink pe-3"></i>Lavatory</li>
                <li><i class="fi fi-rs-charging-station pe-3"></i>Electric Outlets</li>
                <li><i class="fi fi-rs-swimmer pe-3"></i>Swimming pool access (7AM - 10PM)</li>
                <li><i class="fi fi-rs-biking pe-3"></i>Gym access</li>
              </ol>
              <br>
              <p class="fs-6"><i>Note: Additional items such as pillows, mattresses, etc. are available upon request in the receptionist area or through the room service telephone.</i></p>
              
              <br>

              <div class="container">
                <div class="row">

                  <div class="col-lg-6" > 
                    <a class="btn btn-danger ps-4 pe-4 mt-3" href="mode-of-payment.php" >Book Now</a>
                  </div>

                  <div class="col-lg-6">
                    <?php include 'room-inclusions.php'; ?> 
                  </div>

                </div>
              </div>

          </div>
        </div>
      </div>
                
      
      <div align="center" class="text-secondary">
        <hr class="border opacity-100 w-75">
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </body>
