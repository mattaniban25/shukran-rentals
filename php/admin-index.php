<?php
    session_start();
    if(!isset($_SESSION["adminuser"])){
        header("Location: admin-login.php");
    }

    require "database.php";
    $sql = "SELECT * FROM adminaccount WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);
    $adminuser = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $pendingsql = "SELECT * FROM pendingreservations";
    $pendingresult = mysqli_query($conn, $pendingsql);

    $confirmedsql = "SELECT * FROM confirmedreservations";
    $confirmedresult = mysqli_query($conn, $confirmedsql);

    $checkedinsql = "SELECT * FROM checkedinreservations";
    $checkedinresult = mysqli_query($conn, $checkedinsql);

    $alldatasql = "SELECT * FROM pendingreservations UNION SELECT * FROM confirmedreservations UNION SELECT * FROM checkedinreservations";
    $calldataresult = mysqli_query($conn, $alldatasql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ANIBAN, MATTHEW EMMANUEL DJ." />

    <!-- social links logo -->
    <script src="https://kit.fontawesome.com/29a620f807.js" crossorigin="anonymous"></script>
    
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <title>Shukran Rentals - Admin Index</title>

  </head>

  <body>

    <?php include 'admin-header.php'; ?> 

    <main>
      <div class="staff-content bg-light">
        <div class="mt-4">
          <p class="fs-3">Dashboard</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 mb-3" style="">
            <div class="border-start border-4 border-primary shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'pending')" id="defaultOpen">
              <b class="text-primary">PENDING<br></b>
              <b class="fs-2"><?php echo $pendingresult-> num_rows ?></b>
            </div>
          </div>

          <div class=" col-lg-3 col-md-6 mb-3" style="">
            <div class="border-start border-4 border-warning shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'confirmed')">
              <b class="text-warning ">CONFIRMED<br></b>
              <b class="fs-2"><?php echo $confirmedresult-> num_rows ?></b>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-3" style="">
            <div class="border-start border-4 border-success shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'checkin')">
              <b class="text-success">CHECKED-IN<br></b>
              <b class="fs-2"><?php echo $checkedinresult-> num_rows ?></b>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-3" style="">
            <div class="border-start border-4 border-danger shadow-sm rounded p-4  bg-white tablinks" onclick="openCity(event, 'alldata')">
              <b class="text-danger">ALL<br></b>
              <b class="fs-2"><?php echo ($pendingresult-> num_rows) + ($confirmedresult-> num_rows) + ($checkedinresult-> num_rows) ?></b>
            </div>
          </div>
        </div>

        <div id="pending" class="tabcontent active">
          <div class="mt-4">
            <b class="fs-5">Pending Reservations</b>

            <div class="container">
              <div class="table-responsive border border-2 border-primary">
                  <table class="table table-bordered">
                      <thead class="thead-dark">
                          <tr class="border">
                              <th class="border">Booking Code</th>
                              <th class="border">First Name</th>
                              <th class="border">Last Name</th>
                              <th class="border">Contact Info</th>
                              <th class="border">Room Number</th>
                              <th class="border">Check-In</th>
                              <th class="border">Check-Out</th>
                              <th class="border">Amount To Pay</th>
                              <th class="border">EDIT</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                          if ($pendingresult-> num_rows > 0) {
                            $i = 0;
                            while ($row = $pendingresult->fetch_assoc()) {
                              $i++;
                              $class = $i % 2 == 0 ? '' : 'table-secondary';
                              echo "<tr class=". $class .">";
                              echo "<td>" . $row["bookingCode"] . "</td>";
                              echo "<td>" . $row["firstName"] . "</td>";
                              echo "<td>" . $row["lastName"] . "</td>";
                              echo "<td>" . $row["contactInfo"] . "</td>";
                              echo "<td>" . $row["roomNumber"] . "</td>";
                              echo "<td>" . $row["checkIn"] . "</td>";
                              echo "<td>" . $row["checkOut"] . "</td>";
                              echo "<td>" . $row["amountToPay"] . "</td>";
                              echo "<td>" . "<button class='fa-solid fa-pen-to-square'></button>" . "</td>";
                              echo "</tr>";
                            }
                        } else {
                            echo "No pending reservations found.";
                        }
                        ?>
                      </tbody>
                  </table>
              </div>
            </div>

          </div>
          
        </div>

        <div id="confirmed" class="tabcontent">
          <div class="mt-4">
            <b class="fs-5">Confirmed</b>

            <div class="container">
              <div class="table-responsive">
                  <table class="table table-bordered border border-2 border-warning">
                      <thead class="thead-dark">
                          <tr>
                              <th>ID</th>
                              <th>Booking Code</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Contact Info</th>
                              <th>Room Number</th>
                              <th>Check-In</th>
                              <th>Check-Out</th>
                              <th>Amount To Pay</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                          if ($confirmedresult->num_rows > 0) {
                            $i = 0;
                            while ($row = $confirmedresult->fetch_assoc()) {
                              $i++;
                              $class = $i % 2 == 0 ? '' : 'table-secondary';
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["bookingCode"] . "</td>";
                                echo "<td>" . $row["firstName"] . "</td>";
                                echo "<td>" . $row["lastName"] . "</td>";
                                echo "<td>" . $row["contactInfo"] . "</td>";
                                echo "<td>" . $row["roomNumber"] . "</td>";
                                echo "<td>" . $row["checkIn"] . "</td>";
                                echo "<td>" . $row["checkOut"] . "</td>";
                                echo "<td>" . $row["amountToPay"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "No pending reservations found.";
                        }
                        ?>
                      </tbody>
                  </table>
              </div>
            </div>

          </div>
        </div>

        <div id="checkin" class="tabcontent">
          <div class="mt-4">
            <b class="fs-5">Checked-in</b>

            <div class="container">
              <div class="table-responsive">
                  <table class="table table-bordered border border-2 border-success">
                      <thead class="thead-dark">
                          <tr>
                              <th>ID</th>
                              <th>Booking Code</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Contact Info</th>
                              <th>Room Number</th>
                              <th>Check-In</th>
                              <th>Check-Out</th>
                              <th>Amount To Pay</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                          if ($checkedinresult->num_rows > 0) {
                            $i = 0;
                            while ($row = $checkedinresult->fetch_assoc()) {
                              $i++;
                              $class = $i % 2 == 0 ? '' : 'table-secondary';
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["bookingCode"] . "</td>";
                                echo "<td>" . $row["firstName"] . "</td>";
                                echo "<td>" . $row["lastName"] . "</td>";
                                echo "<td>" . $row["contactInfo"] . "</td>";
                                echo "<td>" . $row["roomNumber"] . "</td>";
                                echo "<td>" . $row["checkIn"] . "</td>";
                                echo "<td>" . $row["checkOut"] . "</td>";
                                echo "<td>" . $row["amountToPay"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "No pending reservations found.";
                        }
                        ?>
                      </tbody>
                  </table>
              </div>
            </div>

          </div>
        </div>

        <div id="alldata" class="tabcontent">
          <div class="mt-4">
            <b class="fs-5">ALL</b>

            <div class="container">
              <div class="table-responsive">
                  <table class="table table-bordered border border-2 border-danger">
                      <thead class="thead-dark">
                          <tr>
                              <th>ID</th>
                              <th>Booking Code</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Contact Info</th>
                              <th>Room Number</th>
                              <th>Check-In</th>
                              <th>Check-Out</th>
                              <th>Amount To Pay</th>
                          </tr>
                      </thead>

                      <?php
                          if ($calldataresult->num_rows > 0) {
                            $i = 0;
                            while ($row = $calldataresult->fetch_assoc()) {
                              $i++;
                              $class = $i % 2 == 0 ? '' : 'table-secondary';
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["bookingCode"] . "</td>";
                                echo "<td>" . $row["firstName"] . "</td>";
                                echo "<td>" . $row["lastName"] . "</td>";
                                echo "<td>" . $row["contactInfo"] . "</td>";
                                echo "<td>" . $row["roomNumber"] . "</td>";
                                echo "<td>" . $row["checkIn"] . "</td>";
                                echo "<td>" . $row["checkOut"] . "</td>";
                                echo "<td>" . $row["amountToPay"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "No pending reservations found.";
                        }
                        ?>
                      <tbody>
                      </tbody>
                  </table>
              </div>
            </div>

          </div>
        </div>
      </div>  
    </main>

    <footer>
    </footer>

    <script>
      function openCity(evt, dashboardCard) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(dashboardCard).style.display = "block";
        evt.currentTarget.className += " active";
      }

      document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>
