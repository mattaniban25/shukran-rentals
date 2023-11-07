<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: employee-login.php");
}

include "database.php";

$roomsSql = "SELECT * FROM rooms";
$roomsResult = $conn->query($roomsSql);
$rooms = mysqli_fetch_all($roomsResult, MYSQLI_ASSOC);

$roomTypeSql = "SELECT * FROM roomtype";
$roomTypeResult = $conn->query($roomTypeSql);
$roomTypes = mysqli_fetch_all($roomTypeResult, MYSQLI_ASSOC);

if(!$roomsResult){
    die("Something went wrong " . $conn->error);
}

if(!$roomTypeResult){
    die("Something went wrong " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ANIBAN, MATTHEW EMMANUEL DJ." />

    <!-- social links logo -->
    <script src="https://kit.fontawesome.com/29a620f807.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/style.css">
    <title>Shukran Rentals - Employee List</title>
</head>

<body class="bg-light">

    <?php include 'admin-header.php'; ?>

    <main class="staff-content">
        <div class="mt-4">
            <p class="fs-3"></p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="border-start border-4 border-secondary shadow-sm rounded p-4 bg-white tablinks" onclick="openTab(event, 'roomsTab')" id="defaultOpen">
                    <b class="text-secondary">Rooms<br></b>
                    <b class="fs-2"><?php echo $roomsResult-> num_rows ?></b>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3">
                <div class="border-start border-4 border-warning shadow-sm rounded p-4 bg-white tablinks" onclick="openTab(event, 'roomTypeTab')">
                    <b class="text-warning">Room Type<br></b>
                    <b class="fs-2"><?php echo $roomTypeResult-> num_rows ?></b>
                </div>
            </div>
        </div>

        <hr>
        <div id = "roomsTab"class="tabcontent active">
            <div class="">
            <p class="fs-3">Rooms</p>
                <a class = "btn btn-success" href="room-add-adm.php" role="button">Create a New Room</a>
            </div>
            <br>
            <div class="mt-4">
                <b class="fs-5">List of Active Rooms</b>
            </div>

            <div class="table-responsive border border-3 border-secondary shadow rounded-3">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <div class="row">
                            <tr class="border text-center">
                                <th class="border col-lg-1 align-middle">ID</th>
                                <th class="border col-lg-2 align-middle">Room Number</th>
                                <th class="border col-lg-3 align-middle">Room Type</th>
                                <th class="border col-lg-2 align-middle">Floor</th>
                                <th class="border col-lg-2 align-middle">Availability</th>
                                <th class="border col-lg-2 align-middle">Action</th>
                            </tr>
                        </div>
                    </thead>

                    <tbody>
                        <?php $i = 0; foreach ($rooms as $room): $i++; $class = $i % 2 == 0 ? '' : 'table-secondary';?>
                            <?php echo "<tr class=". $class .">"; ?>
                                <td class="text-center align-middle"><?= $i ?></td>
                                <td class="text-center align-middle"><?= $room['roomNumber'] ?></td>
                                <td class="text-center align-middle"><?= $room['roomType'] ?></td>
                                <td class="text-center align-middle"><?= $room['floor'] ?></td>
                                <td class="text-center align-middle"><?= $room['availability'] ?></td>
                                <td class="text-center align-middle">
                                <div>
                                    <div class="btn btn-primary m-1"><a class="nav-link" href="room-edit-adm.php?id=<?= $room['id'] ?>">EDIT</a></div>
                                    <div class="btn btn-danger m-1"><a class="nav-link" href="room-delete-adm.php?id=<?= $room['id'] ?>">DELETE</a></div>
                                </div>
                            </td>
                            <?php echo "</tr>"; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id = "roomTypeTab"class="tabcontent active">
            <div class="">
                <p class="fs-3">Room Type</p>
                <a class = "btn btn-success" href="roomType-add-adm.php" role="button">Create a New Room Type</a>
            </div>
            <br>
            <div class="mt-4">
                <b class="fs-5">List of Rooms Types</b>
            </div>

            <div class="table-responsive border border-3 border-warning shadow rounded-3">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <div class="row">
                            <tr class="border text-center">
                                <th class="border col-lg-1 align-middle">ID</th>
                                <th class="border col-lg-2 align-middle">Room Type</th>
                                <th class="border col-lg-3 align-middle">Description</th>
                                <th class="border col-lg-1 align-middle">Capacity</th>
                                <th class="border col-lg-1 align-middle">Max Capacity</th>
                                <th class="border col-lg-2 align-middle">Price</th>
                                <th class="border col-lg-2 align-middle">Action</th>
                            </tr>
                        </div>
                    </thead>

                    <tbody>
                        <?php $i = 0; foreach ($roomTypes as $row): $i++; $class = $i % 2 == 0 ? '' : 'table-warning';?>
                            <?php echo "<tr class=". $class .">"; ?>
                                <td class="text-center align-middle"><?= $i ?></td>
                                <td class="text-center align-middle"><?= $row['roomType'] ?></td>
                                <td class="align-middle m-1" align="justify"><?= $row['roomDescription'] ?></td>
                                <td class="text-center align-middle"><?= $row['roomCapacity'] ?></td>
                                <td class="text-center align-middle"><?= $row['roomMaxCapacity'] ?></td>
                                <td class="text-center align-middle">₱<?= number_format($row['roomPrice']) ?></td>
                                <td class="text-center align-middle">
                                    <div>
                                        <div class="btn btn-primary m-1"><a class="nav-link" href="roomType-edit-adm.php?id=<?= $row['id'] ?>">EDIT</a></div>
                                        <div class="btn btn-danger m-1"><a class="nav-link" href="roomType-delete-adm.php?id=<?= $row['id'] ?>">DELETE</a></div>
                                    </div>
                                </td>
                            <?php echo "</tr>"; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
      function openTab(evt, dashboardCard) {
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