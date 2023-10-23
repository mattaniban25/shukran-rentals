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


    <div class="container">
    <div class="row" align="center">
        <div class="col-lg-8">
            <div class="container w-75 payment-container">
                <h1>Choose Payment Method</h1>
                <br><br>

                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#banktransfer">
                            <img src="../IMAGES/bankTransfer.png" alt="" style="width:100px"><p>Bank Transfer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#digitalwallet">
                            <img src="../IMAGES/digitalWallet.png" alt="" style="width:100px"><p>Digital Wallet</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#counter">  
                            <img src="../IMAGES/overTheCounter.png" alt="" style="width:100px"><p>Over the counter</p>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container fade" id="banktransfer">

                        <br><br>
                        <h2>Available banks</h2>
                        <br>
                        <ul class="nav nav-tabs justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#bdo">
                                    <img src="../IMAGES/bdo.png" alt="" style="width:60px"><p>BDO</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#bpi">
                                    <img src="../IMAGES/bpi.png" alt="" style="width:60px"><p>BPI</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#securitybank">  
                                    <img src="../IMAGES/securityBank.png" alt="" style="width:60px"><p>Security Bank</p>
                                </a>
                            </li>
                        </ul>
                    
                        <div class="tab-content">
                            <div class="tab-pane container fade" id="bdo">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="../IMAGES/sampleQR.png" alt="" style="width:100%">
                                        </div>

                                        <div class="col-lg-8">
                                            <p>Account Name: Shukran Rentals OPC</p>
                                            <p>Account Number: 09999999999</p>
                                            <input type="button" value="Attach File" class="btn btn-danger">
                                            <input type="button" value="Submit" class="btn btn-danger">
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="tab-pane container fade" id="bpi">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="../IMAGES/sampleQR.png" alt="" style="width:100%">
                                        </div>

                                        <div class="col-lg-8">
                                            <p>Account Name: Shukran Rentals OPC</p>
                                            <p>Account Number: 09999999999</p>
                                            <input type="button" value="Attach File" class="btn btn-danger">
                                            <input type="button" value="Submit" class="btn btn-danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="securitybank">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="../IMAGES/sampleQR.png" alt="" style="width:100%">
                                        </div>

                                        <div class="col-lg-8">
                                            <p>Account Name: Shukran Rentals OPC</p>
                                            <p>Account Number: 09999999999</p>
                                            <input type="button" value="Attach File" class="btn btn-danger">
                                            <input type="button" value="Submit" class="btn btn-danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                

                <div class="tab-pane container fade" id="digitalwallet">

                    <br><br>
                    <h2>Available banks</h2>
                    <br>
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#gcash">
                                <img src="../IMAGES/gCash.png" alt="" style="width:60px"><p>GCASH</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#grabpay">
                                <img src="../IMAGES/grabPay.png" alt="" style="width:60px"><p>GRAB PAY</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#shopeepay">  
                                <img src="../IMAGES/shopeePay.png" alt="" style="width:60px"><p>SHOPEE PAY</p>
                            </a>
                        </li>
                    </ul>
                    
                            <div class="tab-content">
                                <div class="tab-pane container fade" id="gcash">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="../IMAGES/sampleQR.png" alt="" style="width:100%">
                                            </div>

                                            <div class="col-lg-8">
                                                <p>Account Name: Shukran Rentals OPC</p>
                                                <p>Account Number: 09999999999</p>
                                                <input type="button" value="Attach File" class="btn btn-danger">
                                                <input type="button" value="Submit" class="btn btn-danger">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="grabpay">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="../IMAGES/sampleQR.png" alt="" style="width:100%">
                                            </div>

                                            <div class="col-lg-8">
                                                <p>Account Name: Shukran Rentals OPC</p>
                                                <p>Account Number: 09999999999</p>
                                                <input type="button" value="Attach File" class="btn btn-danger">
                                                <input type="button" value="Submit" class="btn btn-danger">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="shopeepay">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="../IMAGES/sampleQR.png" alt="" style="width:100%">
                                            </div>

                                            <div class="col-lg-8">
                                                <p>Account Name: Shukran Rentals OPC</p>
                                                <p>Account Number: 09999999999</p>
                                                <input type="button" value="Attach File" class="btn btn-danger">
                                                <input type="button" value="Submit" class="btn btn-danger">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                        <div class="tab-content">
                            <div class="tab-pane container fade" id="counter">THIS IS OVER THE COUNTER</div>
                        </div>           
                                
                    </div>
                </div>   
</div>
        
        <div class="col-lg-4 col-sm-12">
            
                <div class="container payment-container">
                    <h1>Booking details</h1>
                    <hr>
                    <h4 style="text-align:left;"><b>Total: ₱2,700.00</b></h4>
                    <h4 style="text-align:left;">Mon, Sept 30, 2023 - Thu, Oct 03, 2023</h4>
                    <hr>
                    <h3 style="text-align:left;">Standard Room</h3>
                    <h5 style="text-align:left;">3 guests (2 adults, 1 child)</h5>
                    <h5 style="text-align:left;">2 days, 3 nights</h5>
                    <hr>
                    <h5 style="text-align:left;"><i>Note: Includes taxes & fees</i></h5>
                </div>
        </div>
    </div>
</div>



    <?php include 'footer.php'; ?>
  </body>
</html>
