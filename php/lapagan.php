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






       

    <?php include 'header.php'; ?> 

        <!-- Nav tabs -->
        
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#function-room" type="button" role="tab" aria-controls="function-room" aria-selected="true">Function Room</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#roof-deck" type="button" role="tab" aria-controls="roof-deck" aria-selected="false">Roof Deck</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade" id="function-room" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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


<?php include 'footer.php'; ?>

</body>
</html>
