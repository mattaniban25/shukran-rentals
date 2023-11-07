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
                  <img src="../IMAGES/Rooms/Executive Suite Room/executive4.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Executive Suite Room/executive3.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Executive Suite Room/executive2.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Executive Suite Room/executive1.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Executive Suite Room/executive5.jpg" class="d-block w-100" alt="...">
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
            <p class="fs-1">Executive Room</p>
            <p>Elevate and step into luxury with our exquisite Executive Suite, where luxury meets entertainment. 
                This stunning and cozy haven boasts a beautifully appointed bedroom for restful nights, beyond the bedroom, there is 
                a separate mini private cinema. Immerse yourself into the magic of cinematic experiences right in your room, complete 
                with premium audio speakers and a mini projector. Our Executive suite offers a lavish escape for those who seek a 
                truly remarkable stay.
            </p> 
            
            <p class="fs-3">Room features</p>
              <ol>
                <li><i class="fi fi-rs-bed-bunk pe-3"></i>One queen-sized bed</li>
                <li><i class="fi fi-rs-film pe-3"></i>Theatre room with 2 lazyboy couch</li>
                <li><i class="fi fi-rs-joystick pe-3"></i>Playstation 4</li>
                <li><i class="fi fi-rs-microphone-alt pe-3"></i>Karaoke</li>
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
                    <a class="btn btn-danger ps-4 pe-4 mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" >Book Now</a>
                  </div>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-body">
                          <p class="fw-semibold fs-5">You have to be logged in to book a reservation.</p>
                          <p>Click <a href="login.php">Here</a> to Login.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <?php include 'room-inclusions.php'; ?> 
                  </div>

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
</html>