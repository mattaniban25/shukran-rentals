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

    <link rel="stylesheet" href="../css/style.css">
    <title>Shukran Rentals - Register</title>
  </head>

  <body>
    <?php include 'header.php'; ?>

    <div class="content bg-body-secondary">
      <div class="register-container rounded-3 bg-white" align="center">
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
          }if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName) OR !preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
            array_push($errors, "First name and last name must not contain numbers and special characters.");
          }if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Email is not valid.");
          }if (strlen($password)<8){
            array_push($errors, "Password must be at least 8 characters long.");
          }if($password!==$confirmPassword){
            array_push($errors, "Password does not match");
          }if($contact==" "){
            array_push($errors, "Contact number must not contain spaces.");
          }if(strlen($contact)<=10 OR strlen($contact)>=12){
            array_push($errors, "Contact number must be 11 digits long.");
          }if(!preg_match("/^[0-9]*$/",$contact)){
            array_push($errors, "Contact number must not contain letters and special characters.");
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

    <?php include 'footer.php'; ?>  
  </body>
</html>
