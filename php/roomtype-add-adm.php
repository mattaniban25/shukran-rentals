<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

include "database.php";

$roomType = "";
$roomDescription = "";
$roomCapacity = "";
$roomMaxCapacity = "";
$roomPrice = "";

$errorMessage = "";
$successMessage = "";

if(isset($_POST["submit"])) {
    $roomType = $_POST["roomType"];
    $roomDescription = $_POST["roomDescription"];
    $roomCapacity = $_POST["roomCapacity"];
    $roomMaxCapacity = $_POST["roomMaxCapacity"];
    $roomPrice = $_POST["roomPrice"];
    
    do{
        if(empty($roomType) OR empty($roomDescription) OR empty($roomCapacity) OR empty($roomMaxCapacity) OR empty($roomPrice)){
            $errorMessage = "All fields are required";
            break;
        }if(!preg_match("/^[a-zA-Z0-9\s]+$/", $roomType)){
            $errorMessage = "Room Type should only contain letters and numbers";
            break;
        }if(!preg_match("/^[0-9\s]+$/", $roomCapacity)){
            $errorMessage = "Room Capacity should only contain numbers";
            break;
        }if(!preg_match("/^[0-9\s]+$/", $roomMaxCapacity)){
            $errorMessage = "Room Max Capacity should only contain numbers";
            break;
        }if($roomCapacity > $roomMaxCapacity){
            $errorMessage = "Room Capacity should not be greater than Room Max Capacity";
            break;
        }if($roomCapacity < 1){
            $errorMessage = "Room Capacity should not be less than 1";
            break;
        }if($roomMaxCapacity < 1){
            $errorMessage = "Room Max Capacity should not be less than 1";
            break;
        }if(!preg_match("/^[0-9\s]+$/", $roomPrice)){
            $errorMessage = "Room Price should only contain numbers";
            break;
        }if($roomPrice < 1){
            $errorMessage = "Room Price should not be less than 1";
            break;
        }

        $roomTypeSql = "SELECT * FROM roomtype WHERE roomType = '$roomType'";
        $roomTypeResult = mysqli_query($conn, $roomTypeSql);
        $rowCount = mysqli_num_rows($roomTypeResult);
        if($rowCount > 0){
            $errorMessage = "Room Type already exists";
            break;
        }
        
        $value = $roomDescription;
        $new_value = str_replace("'", "''", "$value");

        $roomTypeSql="INSERT INTO roomtype (roomType, roomDescription, roomCapacity, roomMaxCapacity, roomPrice) VALUES ('$roomType', '$new_value', '$roomCapacity', '$roomMaxCapacity', '$roomPrice')";
        mysqli_query($conn, $roomTypeSql);
        $successMessage = "Room Type added successfully!";
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
    <title>Shukran Rentals - Employee Accounts</title>
</head>

<body>

    <?php include 'admin-header.php'; ?>

    <main class="staff-content">
      <div class="border border-4 border-success-subtle register-container rounded-3 p-4  bg-white">
        <br>
          <p class="fs-5" align="center"><i class= "fi fi-rs-bed-alt align-middle pe-3"></i>Create Room Type</p>
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

          <form action="roomtype-add-adm.php" method="post">
            <div class="row">
              <div class="form-group">
                <input type="text" class="form-control" name="roomType" placeholder="Room Type" value="<?php echo $roomType?>">
              </div>  
            </div>

            <div class="row">
               <div class="form-group">
                    <textarea class="form-control" name="roomDescription" placeholder="Room Description" rows="4"><?php echo $roomDescription?></textarea>
               </div> 
            </div>

            <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <input type="text" class="form-control" name="roomCapacity" placeholder="Room Capacity" value="<?php echo $roomCapacity?>">
                    
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <input type="text" class="form-control" name="roomMaxCapacity" placeholder="Room Max Capacity" value="<?php echo $roomMaxCapacity?>">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <input type="text" class="form-control" name="roomPrice" placeholder="Room Price" value="<?php echo $roomPrice?>">
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
                      <button type="submit" class="btn btn-success btn-sm" name="submit">Create Room Type</button>
                      <a class="btn btn-danger btn-sm" href="room-list-adm.php">Cancel</a>
                  </div>
              </div>           
          </form>
      </div>
    </main>
</body>

</html>