<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

include "database.php";

$promoSql = "SELECT * FROM promo";
$promoResult = $conn->query($promoSql);
$promos = mysqli_fetch_all($promoResult, MYSQLI_ASSOC);

if(!$promoResult){
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
    <title>Shukran Rentals - Admin Index</title>

  </head>

  <body class="bg-light">
  
    <?php include 'admin-header.php'; ?>

    <main class="staff-content">
        <div class="mt-4">
          <p class="fs-3">Promos</p>
          <a class = "btn btn-success" href="promo-add.php" role="button">Add a New Promo</a>
        </div>
        <div class="mt-4">
            <b class="fs-5">Active Promos</b>
                <div class="container">
                    <div class="table-responsive border border-3 border-danger shadow rounded-3">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <div class="row">
                                    <tr class="border text-center">
                                        <th class="border col-lg-1 align-middle">Promo ID</th>
                                        <th class="border col-lg-1 align-middle">Promo Name</th>
                                        <th class="border col-lg-1 align-middle">Promo Type</th>
                                        <th class="border col-lg-1 align-middle">Duration</th>
                                        <th class="border col-lg-1 align-middle">Discount</th>
                                        <th class="border col-lg-1 align-middle">Promo Code</th>
                                        <th class="border col-lg-2 align-middle">Description</th>
                                        <th class="border col-lg-2 align-middle">Promo Image</th>
                                        <th class="border col-lg-2 align-middle">Action</th>
                                    </tr>
                                </div>
                            </thead>

                            <tbody>
                                <?php $i = 0; foreach ($promos as $promo): $i++; $class = $i % 2 == 0 ? '' : 'table-danger';?>
                                    <?php echo "<tr class=". $class .">"; ?>
                                        <td class="text-center align-middle"><?= $promo['id'] ?></td>
                                        <td class="align-middle"><?= $promo['promoName'] ?></td>
                                        <td class="align-middle"><?= $promo['promoType'] ?></td>
                                        <td class="text-center align-middle"><?= $promo['promoDuration'] ?></td>
                                        <td  class="align-middle"><?= $promo['discount'] ?></td>
                                        <td  class="align-middle"><?= $promo['promoCode'] ?></td>
                                        <td class="text-justify align-middle"><?= $promo['promoDescription'] ?></td>
                                        <td class="text-center align-middle"><?= $promo['promoImage'] ?></td>
                                        <td class="text-center align-middle">
                                        <div>
                                            <div class="btn btn-primary m-1"><a class="nav-link" href="promo-edit.php?id=<?= $promo['id'] ?>">EDIT</a></div>
                                            <div class="btn btn-danger m-1"><a class="nav-link" href="promo-delete.php?id=<?= $promo['id'] ?>">DELETE</a></div>
                                        </div>
                                        
                                    </td>
                                    <?php echo "</tr>"; ?>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </main>

    <footer>
    </footer>
  </body>
</html>

