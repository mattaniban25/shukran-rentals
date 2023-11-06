<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
    exit();
}

include "database.php";
$id = "";
$promoName = "";
$promoType = "";
$promoDuration = "";
$discount = "";
$promoCode = "";
$promoDescription = "";
$promoImage = "";
$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET["id"])){
        header("Location: promo.php");
        exit;
    }

    $id = $_GET["id"];
    $promoSql = "SELECT * FROM promo WHERE id = $id";
    $promoResult = $conn->query($promoSql);
    $row = $promoResult->fetch_assoc();

    if(!$row){
        header("Location: promo.php");
        exit;
    }

    $promoName = $row["promoName"];
    $promoType = $row["promoType"];
    $promoDuration = $row["promoDuration"];
    $discount = $row["discount"];
    $promoCode = $row["promoCode"];
    $promoDescription = $row["promoDescription"];
    $promoImage = $row["promoImage"];   
}
else{
    $id = $_GET["id"];
    $promoName = $_POST["promoName"];
    $promoType = $_POST["promoType"];
    $promoDuration = $_POST["promoDuration"];
    $discount = $_POST["discount"];
    $promoCode = $_POST["promoCode"];
    $promoDescription = $_POST["promoDescription"];
    $promoImage = $_FILES["promoImage"]["name"];
    $tempfile = $_FILES["promoImage"]["tmp_name"];
    $folder = "../images/promos/".$promoImage;

    do{
        if( empty($promoName) || empty($promoType) || empty($promoDuration) || empty($discount) || empty($promoCode) || empty($promoDescription) || empty($promoImage) )
        {
            $errorMessage = "All the fields are required";
            break;
        }
        if(!preg_match("/^[a-zA-Z0-9\s]+$/", $promoName))
        {
            $errorMessage = "Promo Name should only contain letters and numbers";
            break;
        }
        if(!preg_match("/^[a-zA-Z0-9\s]+$/", $promoCode))
        {
            $errorMessage = "Promo Code should only contain letters and numbers";
            break;
        }
        if(!preg_match("/^[0-9\s]+$/", $discount))
        {
            $errorMessage = "Discount should only contain numbers";
            break;
        }
        $img_ex = pathinfo($promoImage, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");
        
        if (in_array($img_ex_lc, $allowed_exs)) {
            $folder = "../images/promos/".$promoImage;
            move_uploaded_file($tempfile, $folder);

            // Insert into Databas
            $promoSql = "UPDATE promo SET promoName = '$promoName', promoType = '$promoType', promoDuration = '$promoDuration', discount = '$discount', promoCode = '$promoCode', promoDescription = '$promoDescription', promoImage = '$promoImage' WHERE id = $id";
            mysqli_query($conn, $promoSql);
            header("Location: promo.php");
        }else {
            $errorMessage = "You can't upload files of this type";
        }
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
    <title>Shukran Rentals - Admin Index</title>

  </head>

  <body class="bg-light">
  
    <?php include 'admin-header.php'; ?>

    <main class="staff-content bg-light">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-sm-12 border-start border-end border-4 border-primary-subtle shadow-sm rounded-3 p-4  bg-white tablinks" style="">
                    <b class="text-primary fs-5">EDIT PROMO</b>
                    <br><br>

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
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $id; ?>">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Promo Name</b>
                                <input type="text" class="form-control" name="promoName" placeholder="Promo Name" value="<?php echo $promoName?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Promo Type</b>
                                <input type="text" class="form-control" name="promoType" placeholder="Promo Type" value="<?php echo $promoType ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Promo Duration</b>
                                <input type="date" class="form-control" name="promoDuration" placeholder="Promo Duration" value="<?php echo $promoDuration ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Discount</b>
                                <input type="text" class="form-control" name="discount" placeholder="Discount" value="<?php echo $discount ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Promo Code</b>
                                <input type="text" class="form-control" name="promoCode" placeholder="Promo Code" value="<?php echo $promoCode ?>">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Promo Image</b>
                                <input type="file" class="form-control" name="promoImage" placeholder="Promo Image" value="<?php echo $promoImage ?>">
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <b class = "fs-6">Description</b>
                                <textarea class="form-control" placeholder="Description" name="promoDescription" ><?php echo $promoDescription ?></textarea>
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
                                <button type="submit" class="btn btn-success btn-sm" name="add">Add Promo</button>
                                <a class="btn btn-danger btn-sm" href="promo.php">Cancel</a>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </main>

    <footer>
    </footer>
  </body>
</html>