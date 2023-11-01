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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!-- CSS FILE -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Shukran Rentals - Login</title>

  </head>

  <body>
    
    <?php include 'header.php'; ?>  
    
    <main>
      <div id="carouselExampleCaptions" class="carousel" data-bs-ride="carousel">  
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="../IMAGES/eventsHeader.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
                  <!--
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                  -->
            </div>
          </div>
        </div>
      </div>

      <div class="container" align="center" style="width:90%;">
        <p class="h4 fs-4 mt-5 mb-3 fw-bold">PLAN YOUR NEXT EVENT WITH US!</p>
        <div class="mb-5 col-lg-6 col-md-6 col-sm-12">
          <p align="center" class="">Experience churvanes in our Unfussy budget hotel located in an accessible and strategic place in the locality of Paranque City. Long weekend staycations, Holiday breaks, Unwinding with your family or just Celebrating with your friends? We've got it covered! </p>
        </div>
      </div>

      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#function-room" type="button" role="tab" aria-controls="function-room" aria-selected="true">Function Room</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#roof-deck" type="button" role="tab" aria-controls="roof-deck" aria-selected="false">Roof Deck</button>
          </li>
        </ul>
          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="function-room" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              <div class="container mt-5">
                      <div class="row" align="center"> 

                      <div class="function-room col-lg-6"> 
                          <img src="../IMAGES/functionRoom.jpg" alt="" class="img-fluid " style="width:100%">  
                      </div>

                      <div class="col-lg-6" align="left">
                          <p class="fs-3 " style="margin-bottom:0px;">Function Room</p>
                          <p class="text-muted">Accommodates up to 20 pax</p>
                          <hr>

                          <p class="fs-3 pt-2">Inclusions</p>
                          <ol>
                              <li><i class="fi fi-rs-air-conditioner pe-3"></i>Airconditioned</li>
                              <li><i class="fi fi-rs-speakers pe-3"></i>Sound System</li>
                              <li><i class="fi fi-rs-microphone-alt pe-3"></i>Karaoke</li>
                              <li><i class="fi fi-rs-toilet pe-3"></i>In-room bathroom w/ flush & bidet</li>
                              <li><i class="fi fi-rs-chair pe-3"></i>Tables & Chairs</li>
                              <li><i class="fi fi-rs-pool-8-ball pe-3"></i>Billiards</li>
                              <li><i class="fi fi-rs-lights-holiday pe-3"></i>Party lights</li>
                              <li><i class="fi fi-rs-cocktail-alt pe-3"></i>Mini bar area</li>
                          </ol>
                      </div>
                      </div>
                  </div>
            </div>


            <div class="tab-pane fade" id="roof-deck" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              <div class="container mt-5">
                      <div class="row" align="center"> 

                      <div class="function-room col-lg-6"> 
                          <img src="../IMAGES/roofDeck.jpg" alt="" class="img-fluid " style="width:100%">  
                      </div>

                      <div class="col-lg-6" align="left">
                          <p class="fs-3 " style="margin-bottom:0px;">Roof Deck</p>
                          <p class="text-muted">Accommodates up to 30 pax</p>
                          <hr>

                          <p class="fs-3 pt-2">Inclusions</p>
                          <ol>
                              <li><i class="fi fi-rs-mountain-city pe-3"></i>Roof deck view</li>
                              <li><i class="fi fi-rs-speakers pe-3"></i>Sound System</li>
                              <li><i class="fi fi-rs-microphone-alt pe-3"></i>Karaoke</li>
                              <li><i class="fi fi-rs-house-blank pe-3"></i>Retractable tent</li>
                              <li><i class="fi fi-rs-chair pe-3"></i>Tables & Chairs</li>
                          </ol>
                      </div>
                      </div>
                  </div>
            </div>
          </div>
      </div>
    </main>

    <?php include 'footer.php'; ?>    
  </body>
</html>
