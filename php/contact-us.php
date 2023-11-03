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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>

    <!-- CSS FILE -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Shukran Rentals - Login</title>

  </head>

  <body>
    <?php include 'header.php'; ?> 

    <main>
      <div class="container pt-5 pb-5 mt-5 mb-5">
        <div class="row " style="width:fit-content; background-color:#f5f8f7;">
            <div class="col-lg-6 col-sm-12">
                <div class="container p-4">
                    <h3 align="left">Contact Information</h3>
                    <h5 class="fw-semibold" style="color:#aa4200;">Shukran Rentals OPC</h5>
                    <p class="mb-5">3384, Arias Compound, Paranaque City 1701, Metro Manila, Philippines</p>


                    <ul style="padding-left:0;" class="mb-4">
                        <li><i class="fi fi-rs-phone-call pe-3 fs-5 align-middle"></i>+63 998 991 7073</li>
                        <li><i class="fi fi-rs-envelope pe-3 fs-5 align-middle"></i>shukranrentalsopc@gmail.com</li>
                    </ul>

                    <p class="fw-semibold mb-2">Get directions:</p>

                    <ul style="padding-left:0;" class="mb-4">
                        <li><i class="fi fi-rs-marker pe-2 align-middle"></i>Waze - SoukMRental </li>
                        <li><i class="fi fi-rs-marker pe-2 align-middle"></i>Angkas - SoukMRental </li>
                        <li><i class="fi fi-rs-marker pe-2 align-middle"></i>Google maps - SoukMRental</li>
                        <li><i class="fi fi-rs-marker pe-2 align-middle"></i>Grab - RedDoorz SoukMRentals Paranaque</li>
                    </ul>


                    <p class="fw-semibold mb-2">Stay connected:</p>
                    
                    <ul style="padding-left:0;" class="mb-4">
                        <li><i class="fi fi-brands-facebook pe-2 align-middle fs-5"></i>Shukran Rentals OPC</li>
                        <li><i class="fi fi-brands-instagram pe-2 align-middle fs-5"></i></i>@shukranrantalsopc</li>
                        <li><i class="fi fi-brands-tik-tok pe-2 align-middle fs-5"></i>@shukranrantalsopc</li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="container p-4">
                    <h3 align="left">Inquiry Form</h3>
                    <br>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-floating mb-5">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-danger pe-4 ps-4 rounded-1">Submit</button>
                    </form>

                </div>
            </div>
        </div>
      </div>
    </main>
    
    <?php include 'footer.php'; ?>  
  </body>
</html>
