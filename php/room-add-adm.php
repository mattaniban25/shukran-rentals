<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

include "database.php";

$roomNumber = "";
$roomType = "";
$floor = "";
$availability = "";

$errorMessage = "";
$successMessage = "";

if(isset($_POST["submit"])){
    $roomNumber = $_POST["roomNumber"];
    $roomType = $_POST["roomType"];
    $floor = $_POST["floor"];
    $availability = $_POST["availability"];

    do{
        if(empty($roomNumber) OR empty($roomType) OR empty($floor) OR empty($availability)){
            $errorMessage = "All fields are required";
            break;
        }if(!preg_match("/^[0-9\s]+$/", $roomNumber)){
            $errorMessage = "Room Number should only contain numbers";
            break;
        }if(!preg_match("/^[0-9\s]+$/", $floor)){
            $errorMessage = "Floor should only contain numbers";
            break;
        }if($floor < 1){
            $errorMessage = "Floor should not be less than 1";
            break;
        }

        $roomNumberSql = "SELECT * FROM rooms WHERE roomNumber = '$roomNumber'";
        $roomNumberResult = mysqli_query($conn, $roomNumberSql);
        $rowCount = mysqli_num_rows($roomNumberResult);
        if($rowCount > 0){
            $errorMessage = "Room already exists";
            break;
        }

        $roomSql = "INSERT INTO rooms (roomNumber, roomType, floor, availability) VALUES ('$roomNumber', '$roomType', '$floor', '$availability')";
        mysqli_query($conn, $roomSql);
        header("Location: room-list-adm.php");
    }while(false);
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
    <title>Shukran Rentals - Add Room</title>
</head>

<body>

    <?php include 'admin-header.php'; ?>

    <main class="staff-content">
      <div class="border border-4 border-success-subtle register-container rounded-3 p-4  bg-white">
        <br>
          <p class="fs-5" align="center"><i class= "fi fi-rs-bed-alt align-middle pe-3"></i>Create Room</p>
          <hr class="me-3 ms-3 pb-3">
          <?php
              if(!empty($errorMessage))
              echo 
              "
              <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                  <h4 class='text-center'>$errorMessage</h4>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
              ";
          ?>

          <form method="post">
            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="roomNumber">Room Number</label>
                    <input type="number" class="form-control" name="roomNumber" placeholder="Room Number" value="<?php echo $roomNumber?>">
                </div>  

                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="roomType">Room Type</label>
                    <select class="form-select" name="roomType" id="">
                        <?php
                            echo "<option disabled>SELECT ROOM TYPE</option>";
                            $roomTypeSql = "SELECT * FROM roomtype";
                            $roomTypeResult = $conn->query($roomTypeSql);
                            if($roomTypeResult->num_rows > 0){
                                while($row = $roomTypeResult->fetch_assoc()){
                                    echo "<option value='" . $row['roomType'] . "'>" . $row['roomType'] . "</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="floor">Floor</label>
                    <select class="form-select" name="floor" id="">
                        <option disabled>SELECT FLOOR</option>;
                        <?php
                            for($i = 1; $i <= 4; $i++){
                                echo "<option value='" . $i . "'>" . $i . "</option>";
                            }
                        ?>
                    </select>
                </div>  

                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="availability">Availability</label>
                    <select class="form-select" name="availability" id="">
                        <option disabled>SELECT AVAILABILITY</option>;
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>  
            </div>
     
            <?php
              if(!empty($successMessage)){
                  echo 
                  "
                  <div class='row'>
                      <div class='alert alert-success alert-dismissible fade show' role='alert'>
                          <h4 class='text-center'>$successMessage</h4>
                          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>
                  </div>
                  ";
              }
              ?>

              <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <button type="submit" class="btn btn-success btn-sm" name="submit">Create Room</button>
                      <a class="btn btn-danger btn-sm" href="room-list-adm.php">Cancel</a>
                  </div>
              </div>       
          </form>
      </div>
    </main>
</body>

</html>