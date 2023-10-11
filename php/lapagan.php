<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Reservation Interface</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

<div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12" align="center ">
            <div class="container w-75 payment-container">
                    <h1>Choose payment method</h1>
                    <br><br>


                    <ul class="nav nav-tabs justify-content-center">
                        <li><a data-toggle="tab" href="#banktransfer"><img src="../IMAGES/bankTransfer.png" alt="" style="width:100px"><p>Bank Transfer</p></a></li>
                        <li><a data-toggle="tab" href="#digitalwallet"><img src="../IMAGES/digitalWallet.png" alt="" style="width:100px"><p>Digital Wallet</p></a></li>
                        <li><a data-toggle="tab" href="#counter"><img src="../IMAGES/overTheCounter.png" alt="" style="width:100px"><p>Over the counter</p></a></li>
                    </ul>


                    
                    <div class="tab-content">
                        <div id="banktransfer" class="tab-pane fade">
                            
                            <h2>Available banks</h2>

                            <ul class="nav nav-tabs justify-content-center">
                                <li><a data-toggle="tab" href="#bdo"><img src="../IMAGES/bdo.png" alt="" style="width:60px"><p>BDO</p></a></li>
                                <li><a data-toggle="tab" href="#bpi"><img src="../IMAGES/bpi.png" alt="" style="width:60px"><p>BPI</p></a></li>
                                <li><a data-toggle="tab" href="#secbank"><img src="../IMAGES/securityBank.png" alt="" style="width:60px"><p>Security Bank</p></a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="bdo" class="tab-pane fade">
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

                                <div id="bpi" class="tab-pane fade">
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

                                <div id="secbank" class="tab-pane fade">
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


                        <div id="digitalwallet" class="tab-pane fade">

                            <h2>Available digital wallets</h2>

                            <ul class="nav nav-tabs justify-content-center">
                                <li><a data-toggle="tab" href="#gcash"><img src="../IMAGES/gCash.png" alt="" style="width:80px"><p>GCash</p></a></li>
                                <li><a data-toggle="tab" href="#grab"><img src="../IMAGES/grabPay.png" alt="" style="width:80px"><p>Grab Pay</p></a></li>
                                <li><a data-toggle="tab" href="#shopee"><img src="../IMAGES/shopeePay.png" alt="" style="width:80px"><p>Shopee Pay</p></a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="gcash" class="tab-pane fade">
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

                                <div id="grab" class="tab-pane fade">
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

                                <div id="shopee" class="tab-pane fade">
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




                        <div id="counter" class="tab-pane fade">
                            <h3>Kindly present this to the hotel lobby and pay the exact amount.</h3>
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
      </div>

      

</body>
</html>
