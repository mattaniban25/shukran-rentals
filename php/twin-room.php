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
                  <img src="../IMAGES/Rooms/Twin Room/twin_room1.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Twin Room/twin_room2.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Twin Room/twin_room3.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../IMAGES/Rooms/Twin Room/twin_room4.jpeg" class="d-block w-100" alt="...">
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
            <p class="fs-1">Twin Room</p>
            <p>Our Twin room brings the blended experience of comfort and companionship, furnished with two comfortable beds and a private bathroom.
                This space is ideal for friends or travelers that seek separate sleeping arrangements. Enjoy the use of modern amenities including
                a TV for entertainment, a refrigerator to store left-overs, a microwave and an electric kettle. Staying in our simple but cozy Twin
                room ensures a restful and enjoyable stay for you and your fellow traveller.
            </p> 
            
            <p class="fs-3">Room features</p>
              <ol>
                <li><i class="fi fi-rs-bed-alt pe-3"></i>2 Single size beds</li>
                <li><i class="fi fi-rs-door-closed pe-3"></i>No bedroom</li>
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

    <ul class="nav nav-tabs">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Number of guests</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#sectionA" data-bs-toggle="tab">1-2 Pax</a></li>
        <li><a class="dropdown-item" href="#sectionB" data-bs-toggle="tab">3 Pax</a></li>
        <li><a class="dropdown-item" href="#sectionC" data-bs-toggle="tab">4 Pax</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
    </li>
    </ul>

    <div class="tab-content"> 
        <div id="sectionA" class="tab-pane fade in active"> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-sm-6" align="left">
                        <br><br>
                        <p class="fs-5">Price: ₱1,500</p>
                        <p class="fs-5">Check In: 2 PM</p>
                        <p class="fs-5">Check Out: 12 PM</p>
                        <a class="btn btn-danger ps-4 pe-4 mt-3"href="mode-of-payment.php">Book Now</a>
                    </div> 
                </div>
            </div>
        </div> 

        
        <div id="sectionB" class="tab-pane fade in "> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-sm-6" align="left">
                        <br><br>
                        <p class="fs-5">Price: ₱1,800</p>
                        <p class="fs-5">Check In: 2 PM</p>
                        <p class="fs-5">Check Out: 12 PM</p>
                        <a class="btn btn-danger ps-4 pe-4 mt-3"href="mode-of-payment.php">Book Now</a>
                       </div> 
                </div>
            </div>
        </div> 

        
        <div id="sectionC" class="tab-pane fade in "> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-sm-6" align="left">
                        <br><br>
                        <p class="fs-5">Price: ₱2,300</p>
                        <p class="fs-5">Check In: 2 PM</p>
                        <p class="fs-5">Check Out: 12 PM</p>
                        <a class="btn btn-danger ps-4 pe-4 mt-3"href="mode-of-payment.php">Book Now</a>
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
