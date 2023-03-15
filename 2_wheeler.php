<?php
session_start();
if(isset($_SESSION['logedin']) || $_SESSION['loggedin']!= true){
  header("location: login.php");
  exit;
}
?>

<?php include '_dbconnect.php';?>
<?php
$valid = false;
$error =false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $station_id = $_POST["station_id"];
  $chargetime = $_POST["charge_time"];
  $mobile = $_SESSION["mobile"];
  $abc = 2.5;
  $total = $chargetime*$abc; 
  if($station_id > 0 && $station_id <5){

    if($station_id == 1 && $chargetime<50){
      $place = "Palace_Road";
      $valid = true;
    }
    elseif ($station_id == 2 && $chargetime<50) {
      $place = "Gokulam";
      $valid = true;
    }
    elseif ($station_id == 3 && $chargetime<50) {
      $place = "Hebbal";
      $valid = true;
    }
    elseif ($station_id == 4 && $chargetime<50) {
      $place = "Kuvempunagar";
      $valid = true;
    }
    else{
      $error = "Invalid Credentials";
    }
    if($chargetime<50){
    $query = "INSERT INTO `2wheeler` ( `mobile`, `station_id`,`place`, `charge_time`,`bill`, `date`) VALUES ('$mobile','$station_id','$place', '$chargetime','$total',current_timestamp())";
    mysqli_query($conn, $query);}
  }
  else{
    $error = "Invalid Credentials";
  }
  
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/4642a2875e.js"
      crossorigin="anonymous"
    ></script>
    <title>User Account-<?php echo$_SESSION['mobile']?></title>
    <!-- to HIDE SCROLLBAR-->
    <style>
      .scrollbar::-webkit-scrollbar {
        display: none;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar fixed-top bg-black">
    <div class="container fluid">
      <a href="/project" class="navbar-brand  text-dark fw-bold ">
        <img
          class="img rounded-circle "
          src="logo.jpg"
          style= "height: 40" 
          alt="EV"
        />
      </a>
      <a href="/project/home.php" class="navbar-brand ms-2">
      <button class="btn btn-outline-info fw-bold">Home</button>
      </a>
      <a href="/project/account.php" class="navbar-brand  text-dark fw-bold ">
      <button class="btn btn-outline-info fw-bold">Account</button>
      </a>
      <a href ="/project/signup.php" class="ms-auto mx-1">
        <button class="btn btn-outline-info fw-bold">Signup</button>
      </a>
      <a href ="/project/logout.php" class="mx-1">
        <button class="btn btn-outline-info fw-bold">Logout</button>
      </a>
    </div>
  </nav>

  <h4 class="my-3">Welcome-<?php echo $_SESSION['mobile']?></h4>
  <div class="alert alert-success " role="alert">
    <h4 class="alert-heading">Hello User-<?php echo $_SESSION['mobile']?></h4>
    <p>Welcome to GO ELECTRIC. Enjoy Our Service & Keep Charging Your Vehicle </p>
    <p class="mb-0">Be sure to Logout at the End</p>
  </div>

  <?php
    if($valid){
      echo ' <div class="alert alert-success alert-dismissible fade show  container my-5" role="alert">
      <strong>Success!</strong> Your Bill will be generated.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }
    if($error){
      echo ' <div class="alert alert-danger alert-dismissible fade show  container my-5" role="alert">
      <strong>Error!</strong> '.$error.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }
  ?>


<div class="container-fluid bg-warning my-5">
<div class="row">
<div class=" col-6">
        <h1 class="text-center my-5 fw-bold">Submit for<span class="text-info"> 2-Wheeler</span></h1>
        <div class="row justify-content-center">
            <div class="col-11 col-lg-5">
                <form action="/project/2_wheeler.php" method="post">
                    <div class="form-group">
                    <label htmlFor="station_id">Enter Station ID *</label>
                    <input
                    type="number"
                    name="station_id"
                    class="form-control"
                    placeholder="station-id"
                    required    
                    />
                    </div>
                    <div class="form-group">
                    <label htmlFor="charge_time">Enter Charge Time *</label>
                    <input
                    type="text"
                    name="charge_time"
                    class="form-control"
                    placeholder="chargetime (range 10-50 mins)"
                    required
                    />
                    </div>
                    <button
                        type="submit"
                        class="btn btn-dark float-end my-4 "
                        style="backgroundColor: black">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <div class=" col my-3">
    <h1 class="text-center my-4 fw-bold"> Your<span class="text-danger"> BILL</span> <a href ="/project/payment.php" >
      <button class="btn btn-outline-dark fw-bold">CLICK HERE TO PAY</button>
    </a></h1>
    <h6>Pay each bill within 7 days </h6>
   <h6>if paid wait for 24 hrs to get status updated</h6>
        <?php require 'bill_2wheeler.php'?>
    
    </div>


  </div>
    <a href ="/project/account.php" >
      <button class="btn  btn-dark btn-outline-info fw-bold">Go Back</button>
    </a>
  </div>
  





    <div class="container-fluid text-center my-4"
    
      style=" background-color: black" >
        <div class="py-5">
          <h3 class="text-light">Share your experience</h3>
          <a href="/project/feedback.php">
          <button class="btn btn-outline-light btn-lg">Feedback</button></a>
        </div>
        <div class="row">
          <div class="clo-12 col-md-4 py-3">
            <h5 class="text-info py-3">More Links</h5>
            <a href="/project/login.php" class="text-light d-block">
              Login
            </a>
            <a href="/project/logout.php" class="text-light d-block">
              Logout
            </a>
            <a href="/project/signup.php" class="text-light d-block">
              Signup
            </a>
          </div>
          <div class="col-12 col-md-4 text-light py-3">
            <p style="textAlign: justify">
              A second common modern English style is to use no indenting, but
              add vertical white space to create "block paragraphs." On a
              typewriter, a double carriage return produces a blank line for
              this purpose;
            </p>
          </div>
          <div class="clo-12 col-md-4 py-3">
            <h5 class="text-info pb-3">Social</h5>
            <a href="https://www.linkedin.com/login">
              <i class="fab fa-linkedin text-light h1 d-block"></i>
            </a>
            <a href="https://github.com/login">
              <i class="fab fa-github text-light h1 d-block"></i>
            </a>
          </div>
        </div>
        <div class="text-muted py-3">
          <p>Copyright © GoElectric</p>
        </div>
      </div>
  </body>
  </html>