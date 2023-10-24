
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
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['edit'])) {
        // Update record in database
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id='$id'";
        mysqli_query($conn, $sql);
    } elseif (isset($_POST['delete'])) {
        // Delete record from database
        $id = $_POST['id'];
        $sql = "DELETE FROM products WHERE id='$id'";
        mysqli_query($conn, $sql);
    }
}

// Fetch records from database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

    <main class="staff-content">
        <h1>Promo</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td>
                            <form method="post">
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Shukran Rentals OPC | Terms & Conditions</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" >
                                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                                <input type="text" name="name" value="<?= $product['name'] ?>">
                                                <input type="text" name="description" value="<?= $product['description'] ?>">
                                                <input type="text" name="price" value="<?= $product['price'] ?>">
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

        <h2>Add Product</h2>

        <form method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="description" placeholder="Description">
            <input type="text" name="price" placeholder="Price">
            <button type="submit" name="add">Add</button>
        </form>
    </main>

    <footer>
    </footer>
  </body>
</html>

