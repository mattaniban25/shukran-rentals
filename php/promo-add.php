<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

include "database.php";
// Handle form submissions
$promoName = "";
$promoDuration = "";
$discount = "";
$promoCode = "";
$promoDescription = "";
$promoImage = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add']) && isset($_FILES['promoImage'])) {
        // Add record to database
        $promoName = $_POST['promoName'];
        $promoDuration = $_POST['promoDuration'];
        $discount = $_POST['discount'];
        $promoCode = $_POST['promoCode'];
        $promoDescription = $_POST['promoDescription'];
        $promoImage = $_FILES["promoImage"]["name"];
        $tempfile = $_FILES["promoImage"]["tmp_name"];
        $folder = "../images/promos/".$promoImage;

        do{
            if( empty($promoName) || empty($promoDuration) || empty($discount) || empty($promoCode) || empty($promoDescription) || empty($promoImage) )
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

            $value = $promoDescription;

            $new_value = str_replace("'", "''", "$value");


            if (in_array($img_ex_lc, $allowed_exs)) {
                $folder = "../images/promos/".$promoImage;
                move_uploaded_file($tempfile, $folder);

                // Insert into Database

                $promoSql = "INSERT INTO promo (promoName, promoDuration, discount, promoCode, promoDescription, promoImage) VALUES ('$promoName', '$promoDuration', '$discount', '$promoCode', '$new_value', '$promoImage')";
                mysqli_query($conn, $promoSql);
                header("Location: promo.php");
            }else {
                $errorMessage = "You can't upload files of this type";
            }
        }while (false);
    } 
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
            <div class="border border-4 border-success-subtle register-container rounded-3 p-4  bg-white" style="">
                    <b class="text-success">ADD A NEW PROMO</b>
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
                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <input type="text" class="form-control" name="promoName" placeholder="Promo Name" value="<?php echo $promoName?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="date" class="form-control" name="promoDuration" placeholder="Promo Duration" value="<?php echo $promoDuration ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="discount" placeholder="Discount" value="<?php echo $discount ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="promoCode" placeholder="Promo Code" value="<?php echo $promoCode ?>">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="file" class="form-control" name="promoImage" placeholder="Promo Image" value="<?php echo $promoImage ?>">
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea class="form-control border border-3 border-success-subtle" placeholder="Description" name="promoDescription" ><?php echo $promoDescription ?></textarea>
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
        </div>
    </main>

    <footer>
    </footer>
  </body>
</html>

