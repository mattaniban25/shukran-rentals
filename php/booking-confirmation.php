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

    <div class="container" style="background-color:green">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="container payment-container rounded-1" style="width:fit-content; background-color:wheat" >
                    <form action="POST">
                        <div class="container">
                            <h1>Booking details</h1>
                        </div>
                        <hr>
                        <div div class="container">
                            <div>
                                <h1 style="text-align:left;" class="fs-4"><b>Total: ₱2,700.00</b></h1>
                            </div>
                            
                            <div class="">
                                <label for="exampleFormControlInput1" class="form-label">Pick a date:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="00-00-00">
                            </div>
                            <!-- <h1 style="text-align:left;" class="fs-6">Mon, Sept 30, 2023 - Thu, Oct 03, 2023</h1> -->
                        </div>
                        <hr>
                        <div>
                            <h1 style="text-align:left;" class="fs-2">Standard Room</h1>
                            
                            <div class="">
                                <label for="AddGuests" class="form-label">Add guests </label>
                                    <select class="form-select form-select-sm" aria-label="Default select example" style="width:100px;">
                                        <option selected>-Select-</option>
                                        <option value="1">1 Pax</option>
                                        <option value="2">2 Pax</option>
                                        <option value="3">3 Pax</option>
                                    </select>
                            </div>

                            <h1 style="text-align:left;" class="fs-6">3 guests (2 adults, 1 child)</h1>
                            <h1 style="text-align:left;" class="fs-6">2 days, 3 nights</h1>
                        </div>
                        <hr>
                        <div>
                            <h1 style="text-align:left;" class="fs-6"><i>Note: Includes taxes & fees</i></h1>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
