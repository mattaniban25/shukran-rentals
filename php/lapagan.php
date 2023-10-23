<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Reservation Interface</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
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

        .day.selected {
            background-color: #28a745;
            color: #fff;
        }
        .payment-container
        {
            border:1px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <div class="calendar-header">
            <button onclick="prevMonth()">Previous Month</button>
            <h2 id="month-year">September 2023</h2>
            <button onclick="nextMonth()">Next Month</button>
        </div>

        <div class="calendar-days" id="calendar-days">
            <!-- Days will be dynamically generated here -->
        </div>
    </div>

    <script>
        // Function to get the total number of days in a month (as in previous example)

        // Function to generate the calendar for a specific month and year (as in previous example)

        // Function to handle day click for reservation
        function reserveDay(day) {
            if (!day.classList.contains('reserved')) {
                day.classList.toggle('selected');
            }
        }

        // Function to display the previous month (as in previous example)

        // Function to display the next month (as in previous example)

        // Function to update the calendar display (as in previous example)
    </script>

<br><br><br><br><br>

<!--
<div class="container "align="center">
    <div class="row">

        <div class="col-lg-8">
            <div class="container w-75 payment-container">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="active"><a data-toggle="tab" href="#home"><img src="../IMAGES/bankTransfer.png" alt="" style="width:100px"><p>Bank Transfer</p></a></li>
                    <li><a data-toggle="tab" href="#menu1"><img src="../IMAGES/digitalWallet.png" alt="" style="width:100px"><p>Digital Wallet</p></a></li>
                    <li><a data-toggle="tab" href="#menu2"><img src="../IMAGES/overTheCounter.png" alt="" style="width:100px"><p>Over the counter</p></a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <p>Some content.</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Some content in menu 1.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="container">
                <h2>yeah</h2>
            </div>
        </div>

    </div>
</div>
    -->






       



        <!-- Nav tabs -->
<div class="container">
    <div class="row">
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

                    
                        <div class="tab-content">
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
                        
                    
                    
                    <div class="tab-pane container fade" id="counter">THIS IS OVER THE COUNTER</div>
                
                </div>
            </div>
        </div>

        

        
    </div>
    <div class="col-lg-4 col-sm-12">
          
            <div class="payment-container">
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







</body>
</html>
