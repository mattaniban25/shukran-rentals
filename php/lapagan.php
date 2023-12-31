<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Reservation Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    
  <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            
        }

        .calendar {
            max-width: 600px;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            padding: 10px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 5px;
        }

        .day {
            position: relative;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
        }

        .day.reserved {
            background-color: #ffc107;
        }

        ;.day.selected {
            background-color: #28a745;
            color: #fff;
        }
        .payment-container
        {
            border:1px solid black;
            padding: 20px;
        }



        .indicator
        {
            width: 50%;
            display:flex;
            justify-content:space-between;
            position:relative;
            margin-bottom:24px;
        }
        .indicator .line
        {
            position:absolute;
            top:35%;
            transfor:translateY(-50%);
            height:4px;
            background: white;
            width:100%;
            left:0;
            z-index:10;
        }
        .indicator .line span
        {
            position:absolute;
            height:100%;
            top:0;
            left:0;
            width:0;
            background:#a42000;
            transition:0.5s;
        }
        .indicator p
        {
            position:relative;
            z-index:20;
            width:40px;
            height:40px;
            border:4px solid white;
            background:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:600;
            border-radius:50%;
            transition:0.5s;
        }
        .indicator p.active
        {
            border-color:#a42000;
            color:#a42000;
        }
        .tab
        {
            display:none;
        }
        .tab.show
        {
            display:block;
        }
        
    </style>


</head>
<body>
    


    <?php include 'header.php'; ?> 

        <!-- Nav tabs -->
        
       <br><br><br><br>
            
        <div class="container" style="background-color:#ddd;  padding:30px;">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <div class="indicator">
                        <span class="line"><span></span></span>
                        <p class="active">1</p>
                        <p>2</p>
                        <p>3</p>
                    </div>

                    
                </div>

                <div class="container payment-container rounded-1 mt-4" style="width:fit-content; background-color:white">
                    <div class="row">
                    <form action="#">
                        <div class="tab container p-3 ">

                            <h3 class="mb-3">STEP 1: Confirm contact details</h3>

                            <div class="mb-3 form show">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Firstname">
                            </div>

                            <div class="mb-3 form">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Surname">
                            </div>
                            <div class="mb-3 form">
                                <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                            </div>
                            <div class="mb-3 form">
                                <input type="telephone" class="form-control" id="formGroupExampleInput2" placeholder="Phone">
                            </div>
                            

                        </div>
                        
                        <div class="tab container p-3">

                            <div class="container">
                                <h3 class="mb-5">STEP 2: Confirm booking summary</h3>
                            </div>

                            <div class="container" align="left">
                                <h5>Booking Summary</h5>
                                <hr>
                            </div>

                            <div class="container mb-4" align="left">
                                <h3>Standard Room</h3>
                            </div>

                            <div class="container justify-content-center mb-4">
                                <div class="row">
                                <div class="col-lg-6 " align="left">
                                    <label for="startDate">Check In date</label>
                                    <input id="startDate" class="form-control" type="date" />
                                    
                                </div>
                                <div class="col-lg-6" align="left">
                                    <label for="endDate">Check Out date</label>
                                    <input id="endDate" class="form-control" type="date" />
                                    
                                </div>
                                </div>
                            </div>


                            <div class="container" align="left">
                                <h5>Guests</h5>
                                <div class="row">
                                    <div class="col-lg-3" align="left">
                                        <label for="adults">Adults</label>
                                        <input type="number" class="form-control" id="adults">
                                    </div>

                                    <div class="col-lg-3" align="left">
                                        <label for="children">Children</label>
                                        <input type="number" class="form-control" id="children">
                                    </div>

                                    <div class="col-lg-3" align="left">
                                        <label for="additional">Additional Guest(s)</label>
                                        <input type="number" class="form-control" id="additional">
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <hr>
                            </div>

                            <div class="container" align="left">
                                <h3>Total: ₱1,500.00</h3>
                            </div>
                        </div>




                        <div class="tab container">
                        <div class="" >
    <div class="row" align="center">
        <div class="col-lg-12">
            <div class="container payment-container rounded-1">
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
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="../IMAGES/sampleQR.png" alt="" style="width:100px">
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
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="../IMAGES/sampleQR.png" alt="" style="width:100px">
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
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="../IMAGES/sampleQR.png" alt="" style="width:100px">
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
                                                <img src="../IMAGES/sampleQR.png" alt="" style="width:100px">
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
                                                <img src="../IMAGES/sampleQR.png" alt="" style="width:100px">
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
                                                <img src="../IMAGES/sampleQR.png" alt="" style="width:100px">
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
        
    </div>
</div>
                        </div>
                        <div class="btn">
                            <button class="prev">Previous</button>
                            <button class="next">Next</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>
<?php include 'footer.php'; ?>

<script src="..//javascript/app.js"></script>
</body>
</html>




                    