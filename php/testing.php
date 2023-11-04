
<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

require "database.php";
$sql = "SELECT * FROM adminaccount WHERE username = '$_SESSION[username]'";
$result = mysqli_query($conn, $sql);
$adminuser = mysqli_fetch_array($result, MYSQLI_ASSOC);


// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        // Add record to database
        $promoName = $_POST['promoName'];
        $promoType = $_POST['promoType'];
        $promoDuration = $_POST['promoDuration'];
        $discount = $_POST['discount'];
        $promoCode = $_POST['promoCode'];
        $promoDescription = $_POST['promoDescription'];

        $promoImage = $_FILES["promoImage"]["name"];
        $tempfile = $_FILES["promoImage"]["tmp_name"];
        $folder = "../images/promos/".$promoImage;
        $promoSql = "INSERT INTO promo (promoName, promoType, promoDuration, discount, promoCode, promoDescription, promoImage) VALUES ('$promoName', '$promoType', '$promoDuration', '$discount', '$promoCode', '$promoDescription', '$promoImage')";
        if($promoImage == "")
        {
            echo 
            "
            <div class='alert alert-danger' role='alert'>
                <h4 class='text-center'>Blank not Allowed</h4>
            </div>
            ";
        }else{
            move_uploaded_file($tempfile, $folder);
        }
        
        mysqli_query($conn, $promoSql);
    } 
    
    if(isset($_GET['edit'])) {
        // Update record in database
        $id = $_GET['id'];
        $promoName = $_POST['promoName'];
        $promoType = $_POST['promoType'];
        $promoDuration = $_POST['promoDuration'];
        $discount = $_POST['discount'];
        $promoCode = $_POST['promoCode'];
        $promoDescription = $_POST['promoDescription'];
        $promoImg = $_FILES["promoImage"]["name"];
        $tempfile = $_FILES["promoImage"]["tmp_name"];
        $folder = "../images/promos/".$promoImg;
        $promoSql = "UPDATE promo SET promoName='$promoName', promoType='$promoType', promoDuration='$promoDuration', discount='$discount', promoCode='$promoCode', promoDescription='$promoDescription', promoImage='$promoImg' WHERE id='$id'";
        if($promoImg == "")
        {
            echo 
            "
            <div class='alert alert-danger' role='alert'>
                <h4 class='text-center'>Blank not Allowed</h4>
            </div>
            ";
        }else{
            $imageResult = mysqli_query($conn, $promoSql);
            move_uploaded_file($tempfile, $folder);
        }
        
        mysqli_query($conn, $promoSql);

    } 
    
    if (isset($_POST['delete'])) {
        // Delete record from database
        $id = $_POST['id'];
        $promoSql = "DELETE FROM promo WHERE id='$id'";
        mysqli_query($conn, $promoSql);
    }
    header("Location: promo.php");
}

$promoSql = "SELECT * FROM promo";
$promoResult = mysqli_query($conn, $promoSql);
$promos = mysqli_fetch_all($promoResult, MYSQLI_ASSOC);
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

    <main class="staff-content bg-light">
        <div class="mt-4">
          <p class="fs-3">Promos</p>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-sm-12" style="">
                <div class="border-start border-end border-4 border-danger-subtle shadow-sm rounded-3 p-4  bg-white tablinks">
                    <b class="text-danger">ADD A NEW PROMO</b>
                    <br><br>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="promoName" placeholder="Promo Name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="promoType" placeholder="Promo Type">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="date" class="form-control" name="promoDuration" placeholder="Promo Duration">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="discount" placeholder="Discount">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="promoCode" placeholder="Promo Code">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="promoDescription" placeholder="Description">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="file" class="form-control" name="promoImage" placeholder="Promo Image">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <button type="submit" class="btn btn-success" name="add">ADD</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

        <div id="active" class="">
          <div class="mt-4">
            <b class="fs-5">Active Promos</b>
            <div class="container">
                <div class="table-responsive border border-2 border-danger">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="border">
                                <th class="border">Promo ID</th>
                                <th class="border">Promo Name</th>
                                <th class="border">Promo Type</th>
                                <th class="border">Duration</th>
                                <th class="border">Discount</th>
                                <th class="border">Promo Code</th>
                                <th class="border">Description</th>
                                <th class="border">Promo Image</th>
                                <th class="border"></th>
                            </tr>
                        </thead>

                        <tbody>

                            
                            <?php foreach ($promos as $promo): ?>
                                <tr>
                                    <td><?= $promo['id'] ?></td>
                                    <td><?= $promo['promoName'] ?></td>
                                    <td><?= $promo['promoType'] ?></td>
                                    <td><?= $promo['promoDuration'] ?></td>
                                    <td><?= $promo['discount'] ?></td>
                                    <td><?= $promo['promoCode'] ?></td>
                                    <td><?= $promo['promoDescription'] ?></td>
                                    <td><img src="../images/promos/<?php echo $promo['promoImage'] ?>" width=150px height="150px" alt=""></td>
                                    <td>
                                        <form action="promo.php" method="post" enctype="multipart/form-data" id="edit">
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
                                                    <div class="modal-content">
                                                        <div class="modal-body">

                                                        
                                                            <input type="hidden" name="id" value="<?= $promo['id'] ?>">

                                                            <div class="border border-4 border-primary-subtle shadow-sm  p-4  bg-white tablinks">
                                                                <h5 class="text-primary modal-title" id="exampleModalLabel">EDIT PROMO</h5>
                                                                <br><br>
                                                                <div class="row">
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="text" class="form-control" name="promoName" placeholder="Promo Name">
                                                                    </div>
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="text" class="form-control" name="promoType" placeholder="Promo Type">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="date" class="form-control" name="promoDuration" placeholder="Promo Duration">
                                                                    </div>
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="text" class="form-control" name="discount" placeholder="Discount">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="text" class="form-control" name="promoCode" placeholder="Promo Code">
                                                                    </div>
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="text" class="form-control" name="promoDescription" placeholder="Description">
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                        <input type="file" class="form-control" name="promoImage" placeholder="Promo Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                            <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </main>

    <footer>
    </footer>
  </body>
</html>

