<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ANIBAN, MATTHEW EMMANUEL DJ." />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <title>Shukran Rentals - Register</title>
  </head>

  <body>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-2 border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">
            <img src="../IMAGES/Logo.png" height="125" alt="" class="">
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">Home</a>
                <a href="#" class="nav-item nav-link">About Us</a>
                <a href="#" class="nav-item nav-link">Facilities & Amenities</a>
                <a href="#" class="nav-item nav-link">Photo Gallery</a>
                <a href="#" class="nav-item nav-link">Contact Us</a>
                <a href="#" class="nav-item nav-link">Terms & Conditions</a>
            </div>
            <div class="navbar-nav ms-auto">
              <a href="register.php" class="nav-item nav-link active">Register</a>
              <a href="login.php" class="nav-item nav-link">Login</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="content">
      <div class="register-container rounded-3" align="center">
      <?php
        if(isset($_POST["submit"])) {
          $firstName = $_POST["firstName"];
          $lastName = $_POST["lastName"];
          $email = $_POST["email"];
          $contact = $_POST["contact"];
          $password = $_POST["password"];
          $confirmPassword = $_POST["confirmPassword"];
          
          $passwordHash = password_hash($password, PASSWORD_DEFAULT);

          $errors = array();

          if(empty($firstName) OR empty($lastName) OR empty($email) OR empty($contact) OR empty($password) OR empty($confirmPassword)){
            array_push($errors, "All fields are required");
          }if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Email is not valid.");
          }if (strlen($password)<8){
            array_push($errors, "Password must be at least 8 characters long.");
          }if($password!==$confirmPassword){
            array_push($errors, "Password does not match");
          }
          require_once "database.php";
          $sql = "SELECT * FROM customerAccount WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          if ($rowCount>0) {
           array_push($errors,"Email already exists!");
          }
          
          if(count($errors)>0){
            foreach($errors as $error){
              echo"<div class='alert alert-danger'>$error</div>";
            }
          }else{
            $sql = "INSERT INTO customerAccount (firstname, lastname, email, contact, password) VALUES (?,?,?,?,?)";
             $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sssss",$firstName, $lastName,$email, $contact, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
          }
        }
      ?>
        <form action="register.php" method="post">
          <p class="fs-5">SIGN UP</p>

          <div class="form-group">
            <input type="text" class="form-control" name="firstName" placeholder="First Name">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="lastName" placeholder="Last Name">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="Contact Number">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
          </div>

          <div class="mb-3">
            <p>By registering to Shukran Rentals OPC, I agree with the <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Terms & Conditions</button>policy.</p>
          </div>

          <div class="form-btn mb-3">
            <input type="submit" class="btn btn-danger col-6" value="Register" name="submit">
          </div>
          
          <div class="mb-3">
            <p>Already registered? <a href="login.php">Login Here</a></p>
          </div>
        </form>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Shukran Rentals OPC | Terms & Conditions</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" > 
              <ol>
                <li>Pay as you Ckeck-in and Strictly</li>
                <li>Pay as you Order - Please pay food bill.</li>
                <li>Head Counts is being implemented.</li>
                <li>
                  The Management is Not Responsible for the safekeeping of any
                  personal belongings or valuables.
                </li>
                <li>
                  Banning of illegal drugs, illegal gambling and other illegal
                  activities are strictly observed. Firearms and ammunition
                  are Not Allowed.
                </li>
                <li>
                  All units are presented in Good Condition. Please
                  immediately upon check-in, for any other issues. Rooms and
                  Facilities are provided as is. Any damages that may occur,
                  will be CHARGED ACCORDINGLY.
                </li>
                <li>
                  Please do not bring materials not limited to decors and
                  equipment that are owned by the property. Otherwise, it is
                  right to consider such item as sold and must be Paid by the
                  Guest.
                </li>
                <li>
                  Violence and Misconduct of any sort will not be tolerated.
                </li>
                <li>
                  Security Guard on Duty, reserves the RIGHT TO INSPECT any
                  container, or closed packages that are visibly unique or
                  deem suspicious which are being brought in and out of the
                  building premises.
                </li>
                <li>
                  Keeping the noise at minimum to avoid disturbing other
                  Guests is at everyone's interests.
                </li>
                <li>
                  The Management will not be liable for any damage or loss of
                  a vehicle.
                </li>
                <li>
                  Loitering in hallways (especially for children) and
                  Vandalism within the premises are not allowed and offenders
                  of such acts will be given proper sanctions.
                </li>
                <li>
                  Tampering of Equipment's is considered a Criminal Act and
                  will not be taken lightly by the Management.
                </li>
                <li>
                  Strictly NO SMOKING inside the Rooms and triggering of Smoke
                  Detector Alarm will result to a P 500.00 FINE or more. There
                  is a Smoking Area specifically provided by the Management.
                </li>
                <li>
                  Disposal of waste must be properly stowed in the provided
                  Trash Bins.
                </li>
                <li>
                  The Management reserves the Right to Vacate Rooms that
                  exceeds reservation period.
                </li>
                <li>
                  Room Keys are to be surrendered to Lobby Personnel or
                  Security Guard on Duty upon Checking out. Lost Keys are
                  charged for P 500.00 without exemption
                </li>
                <li>
                  Occasional Events, Parties and other Celebratory Gatherings
                  must follow the permissible 10:00 PM Barangay ordinance.
                </li>
                <li>
                  For other Terms & Conditions apply. You can ask the Front
                  desk Clerk for the full list.
                </li>
              </ol>
      
      
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="bg-dark border-top border-2 text-light border-danger" style="box-shadow: black 0px 0px 10px 0px;">
        <div class="container p-4 pb-0">
          <section class="">
            <div class="row">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-center justify-content-center">
                <img src="../IMAGES/logo.png" alt="" height="125">
              </div>

              <hr class="w-100 clearfix d-md-none" />

              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
                <p><a class="text-white" href="#">Home</a></p>
                <p><a class="text-white" href="#">About Us</a></p>
                <p><a class="text-white" href="#">Facilities & Amenities</a></p>
              </div>

              <hr class="w-100 clearfix d-md-none" />

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"><p>&nbsp;</p></h6>
                <p><a class="text-white" href="#">Photo Gallery</a></p>
                <p><a class="text-white" href="#">Contact Us</a></p>
                <p><a class="text-white" href="#">Terms & Conditions</a></p>
              </div>

              <hr class="w-100 clearfix d-md-none" />

              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="fas fa-home mr-3"></i> 3384 Arias Compound, Parañaque, 1701 Metro Manila</p>
                <p><i class="fas fa-phone mr-3"></i> +63 998 991 7073</p>
                <p><i class="fas fa-envelope mr-3"></i> shukranrentalsopc@gmail.com	</p>
              </div>
            </div>
          </section>

          <hr class="my-3">

          <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
              <div class="col-md-7 col-lg-8 text-center text-md-start">
                <div class="p-3">
                  <p>© 2023 | Shukran Rentals OPC</p>
                </div>
              </div>
              <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-google"></i></a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
