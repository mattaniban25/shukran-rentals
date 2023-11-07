<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: ../index.php");
    }

    include "database.php";
    $sql = "SELECT * FROM customeraccount WHERE email = '$_SESSION[email]'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!-- CSS FILE -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Animate On Scroll links -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <title>Shukran Rentals - Login</title>

  </head>

  <body>
  <script>
    AOS.init();
  </script>
    
    <?php include 'login-header.php'; ?>  
    
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

      <br><br><br>

      <div class="container" align="center">
          <div class="row">

              <div class="container" align="left">
                  <p class="fs-4">FACILITIES</p>
                  <hr>
              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="../IMAGES/Rooms/Facilities/shukneneng.JPG" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/shukneneng.JPG" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->   

              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <img src="../IMAGES/Rooms/Facilities/shukneneng2.JPG" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/shukneneng2.JPG" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    <img src="../IMAGES/Rooms/Facilities/reddoorz_sign.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/reddoorz_sign.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                    <img src="../IMAGES/Rooms/Facilities/smokingarea1.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/smokingarea1.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                    <img src="../IMAGES/Rooms/Facilities/smokingarea2.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/smokingarea2.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

                  <img src=""   class="img-fluid mb-3" data-aos="fade" data-aos-duration="3000" data-aos-once="true">
              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                    <img src="../IMAGES/Rooms/Facilities/hallway1.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/hallway1.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                    <img src="../IMAGES/Rooms/Facilities/hallway2.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/hallway2.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->

              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                    <img src="../IMAGES/Rooms/Facilities/smokingarea3.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/smokingarea3.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  
              </div>

              <div class="col-lg-4 col-sm-12">

                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                    <img src="../IMAGES/Rooms/Facilities/outdoor_jacuzzi.jpg" alt=""  class="img-fluid mb-3" data-aos="fade" data-aos-duration="1500" data-aos-once="true">
                  </button>

                  <!-- Image Modal -->
                  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="../IMAGES/Rooms/Facilities/outdoor_jacuzzi.jpg" alt="" style="width:100%; height:auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  
              </div>

              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              
              <div class="container" align="left">
                <p class="fs-4">FACILITIES</p>
                <hr>
              </div>
              
              
          </div>
        </div>


    </main>

    <?php include 'login-footer.php'; ?>    
  </body>
</html>
