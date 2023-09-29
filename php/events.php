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

      <div class="welcome-div" align="center">
        <p class="welcome-message h4 fs-4 mt-5 mb-3 fw-bold">PLAN YOUR NEXT EVENT WITH US!</p>
        <div class="welcome-description mb-5 col-lg-6 col-md-6 col-sm-12">
          <p align="justify" class="fs-5">Experience churvanes in our Unfussy budget hotel located in an accessible and strategic place in the locality of Paranque City. Long weekend staycations, Holiday breaks, Unwinding with your family or just Celebrating with your friends? We've got it covered! </p>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row" align="center"> 
          <div class="function-room col-lg-6">
            <p class="fs-4 fw-semibold">Function Room</p>

              <p class="fs-5">500 sqm</p>
              <p class="fs-5">Accommodates up to 20 pax</p>   

              <img src="../IMAGES/functionRoom.jpg" alt="" class="img-fluid " style="width:85%">

              <p class="fs-3 mt-3 fw-bold">Inclusions</p>

              <p class="fs-5">Sound system</p>
              <p class="fs-5">Karaoke</p>
              <p class="fs-5">In-room bathroom</p>
              <p class="fs-5">Tables & chairs</p>
              <p class="fs-5">Billiards</p>
              <p class="fs-5">Party lights</p>
              <p class="fs-5">Mini bar counter</p>
          </div>

          <div class="roof-deck col-lg-6">
            <p class="fs-4 fw-semibold">Roof Deck</p>

            <p class="fs-5 ">Open Area</p>
            <p class="fs-5">Accommodates up to 30 pax</p>

            <img src="../IMAGES/roofDeck.jpg" alt="" class="img-fluid" style="width:85%">

            <p class="fs-3 mt-3 fw-bold">Inclusions</p>

            <p class="fs-5">Sound system</p>
            <p class="fs-5">Karaoke</p>
            <p class="fs-5">Retractable Tent</p>
            <p class="fs-5">Tables & chairs</p>
              
            <p></p>
          </div>
        </div>
      </div>
    </main>

    <?php include 'footer.php'; ?>    
  </body>
</html>
