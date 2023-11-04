<?php
session_start();
if(!isset($_SESSION["adminuser"])){
    header("Location: admin-login.php");
}

require "database.php";
$sql = "SELECT * FROM adminaccount WHERE username = '$_SESSION[username]'";
$result = mysqli_query($conn, $sql);
$adminuser = mysqli_fetch_array($result, MYSQLI_ASSOC);



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
          <a class = "btn btn-success" href="promo-add.php" role="button">Add a New Promo</a>
        </div>
          <div class="mt-4">
            <b class="fs-5">Active Promos</b>
            <div class="container">
                <div class="table-responsive border border-2 border-danger">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <div class="row">
                            <tr class="border text-center">
                                <th class="border col-lg-1">Promo ID</th>
                                <th class="border col-lg-1">Promo Name</th>
                                <th class="border col-lg-1">Promo Type</th>
                                <th class="border col-lg-1">Duration</th>
                                <th class="border col-lg-1">Discount</th>
                                <th class="border col-lg-1">Promo Code</th>
                                <th class="border col-lg-3">Description</th>
                                <th class="border col-lg-2">Promo Image</th>
                                <th class="border col-lg-1">Action</th>
                            </tr>
                        </div>
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
                                    <td class="text-center"><?= $promo['promoImage'] ?></td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <div class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                <a class="fa-solid fa-pen-to-square text-light"></a>
                                            </div>
                                            <ul class="dropdown-menu text-center">
                                                <li class="btn btn-success m-1"><a class="nav-link" href="promo-edit.php?id=<?= $promo['id'] ?>">EDIT</a></li>
                                                <hr class="m-2">
                                                <li class="btn btn-danger m-1"><a class="nav-link" href="promo-delete.php?id=<?= $promo['id'] ?>">DELETE</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
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

