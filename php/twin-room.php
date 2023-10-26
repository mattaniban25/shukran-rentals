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
            <p class="fs-1">Twin Room</p>
            <p>Our Twin room brings the blended experience of comfort and companionship, furnished with two comfortable beds and a private bathroom.
                This space is ideal for friends or travelers that seek separate sleeping arrangements. Enjoy the use of modern amenities including
                a TV for entertainment, a refrigerator to store left-overs, a microwave and an electric kettle. Staying in our simple but cozy Twin
                room ensures a restful and enjoyable stay for you and your fellow traveller.
            </p> 
            
            <p class="fs-3">Room Amenities</p>
              <ol>
                <li>Two single beds</li>
                <li>Comfort Room</li>
                <li>Sink</li>
                <li>Lavatory</li>
                <li>Electric Outlets</li>
                <li>Swimming pool access (7AM - 10PM)</li>
                <li>Gym access</li>
              </ol>
              <br>
              <p class="fs-6"><i>Note: Additional items such as pillows, mattresses, etc. are available upon request in the receptionist area or through the room service telephone.</i></p>
              <a href="#RoomInclusions"  class="btn btn-link" data-bs-toggle="modal" data-bs-target="#RoomInclusions">View room inclusions</a>
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

      <div class="modal fade" id="RoomInclusions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ROOM INCLUSIONS</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body" > 
              <div class="container pb-5">
                <p class="mb-5 mt-5 fs-2" align="center">ALL TYPES OF ROOM APPLIES TO THIS</p>
                <div class="row" align="" >
                  <div class="col-lg-6 ">
                    <p class="fs-4 fw-bold">INCLUSIONS</p>
                    <table class="table w-100">
                      <ul>
                        <tbody>
                          <tr>
                            <td>
                              <li><i class="fa-solid fa-bed fa-lg" style="color: #aa2400;"></i> Bed & Pillows</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-blender-phone fa-lg" style="color: #aa2400;"></i> Water Kettle</li>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <li><i class="fa-solid fa-shower fa-lg" style="color: #aa2400;"></i> Hot & Cold Shower</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-toolbox fa-lg" style="color: #aa2400;"></i> Guest Kit</li>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <li><i class="fa-solid fa-tv fa-lg" style="color: #aa2400;"></i> Cable TV or Android TV</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-toilet-paper fa-lg" style="color: #aa2400;"></i> Tissue</li>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <li><i class="fa-solid fa-utensils fa-lg" style="color: #aa2400;"></i> Microwave</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-person-shelter fa-lg" style="color: #aa2400;"></i> Spacious</li>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <li><i class="fa-solid fa-bowl-rice fa-lg" style="color: #aa2400;"></i> Rice Cooker</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-temperature-arrow-down fa-lg" style="color: #aa2400;"></i> Airconditioned</li>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <li><i class="fa-solid fa-wifi fa-lg" style="color: #aa2400;"></i> WiFi</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-rug fa-lg" style="color: #aa2400;"></i> Towels</li>
                            </td>
                          </tr>
                          
                          <tr>
                            <td>
                              <li><i class="fa-regular fa-snowflake fa-lg" style="color: #aa2400;"></i> Mini Fridge</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-chair fa-lg" style="color: #aa2400;"></i> Tables & Chairs</li>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <li><i class="fa-solid fa-bottle-water ms-1 fa-lg" style="color: #aa2400;"></i> Complimentary Water</li>
                            </td>
                            <td>
                              <li><i class="fa-solid fa-trash fa-lg" style="color: #aa2400;"></i> Trash Bin</li>
                            </td>
                          </tr>
                        </tbody>
                      </ul>
                    </table>
                  </div>

                  <div class="col-lg-6">
                    <p class="fs-4 fw-bold">AMENITIES</p>
                    <table class="table w-100">
                        <ul>
                          <tbody>
                            <tr>
                              <td>
                                <li><i class="fa-solid fa-dumbbell fa-lg fs-6" style="color: #aa2400;"></i> Gym</li>
                              </td>
                              <td>
                                <li><i class="fa-solid fa-couch fa-lg fs-6" style="color: #aa2400;"></i> Lounge</li>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <li><i class="fa-solid fa-hot-tub-person fa-lg fs-6" style="color: #aa2400;"></i> Roof deck view & Jacuzzi Area</li>
                              </td>
                              <td>
                                <li><i class="fa-solid fa-dice-five fa-lg" style="color: #aa2400;"></i> Billiard Table, Beer Pong & Mini Bar</li>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <li><i class="fa-solid fa-person-swimming fa-lg" style="color: #aa2400;"></i> Indoor Swimming pool</li>
                              </td>
                              <td>
                                <li><i class="fa-solid fa-basketball fa-lg" style="color: #aa2400;"></i> Basketball Court & Playground</li>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <li><i class="fa-solid fa-store fa-lg" style="color: #aa2400;"></i> Convenience Store</li>
                              </td>
                              <td>
                                <li><i class="fa-solid fa-pizza-slice fa-lg" style="color: #aa2400;"></i> Room service food & beverage</li>
                              </td>
                            </tr>

                            <tr>
                              <td>
                              <li><i class="fa-solid fa-smoking fa-lg fa-flip-horizontal" style="color: #aa2400;"></i> Smoking Area</li>
                              </td>
                            </tr>
                          </tbody>
                        </ul>
                      </table>

                      <p class="fs-4 fw-bold">OTHERS</p>
                      <table class="table w-100">
                        <ul>
                          <tbody>
                            <tr>
                              <td>
                                <li><i class="fa-solid fa-phone-volume fa-lg fa-flip-horizontal" style="color: #aa2400;"></i> Room service telephone</li> 
                              </td>
                              <td>
                                <li><i class="fa-solid fa-eye fa-lg" style="color: #aa2400;"></i> 24 hours surveillance system</li>
                              </td>
                            </tr>  

                            <tr>
                              <td>
                                <li><i class="fa-solid fa-car-side fa-lg" style="color: #aa2400;"></i> Free parking</li>
                              </td>
                              <td>
                                <li><i class="fa-solid fa-person-military-pointing fa-lg" style="color: #aa2400;"></i> 24 hours security service</li>
                              </td>
                            </tr>
                          </tbody>
                        </ul>
                      </table>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
   
      <div class="container" align="center">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <p class="fs-4">500 SQM</p>
            <hr class="border border-danger opacity-75 w-25">
          </div>

          <div class="col-lg-3 col-sm-6">
            <p class="fs-4">4 Max Guests</p>
            <hr class="border border-danger opacity-75 w-25">
          </div>
          <div class="col-lg-3 col-sm-6">
            <p class="fs-4">2 Beds</p>
            <hr class="border border-danger opacity-75 w-25">
          </div>
          <div class="col-lg-3 col-sm-6">
            <p class="fs-4">1 Bedroom</p>
            <hr class="border border-danger opacity-75 w-25">
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
