<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
  header("location: delete.php");
  exit;
}
?>
<?php 
include '_dbconnect.php';
$mobile=$_SESSION['mobile'];
$query = "DELETE FROM `signup` WHERE mobile= $mobile";
mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <Link
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
  <title>Account-Delete</title>
  <!-- to HIDE SCROLLBAR-->
  <style>
    .scrollbar::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>
<body>
<nav class="navbar navbar fixed-top border-bottom bg-dark">
  <div class="container-fluid ">
  <img
        class="img rounded-circle ms-1"
        src="logo.jpg"
        style= "height: 35px" 
        alt="EV"
      />
   
    <a href="/project/home.php" class="navbar-brand ms-auto mx-1">
      <button class="btn btn-outline-info fw-bold">Home</button>
    </a>
    <a href ="/project/signup.php" class="mx-1">
      <button class="btn btn-outline-info fw-bold">Signup</button>
    </a>
        
  </div>
</nav>
  <?php $msg= false; ?> 
  <?php $alert= "<script>alert('Are you sure want to DELETE your Account');</script>";echo $alert?>

  <div class="container-fluid bg-dark">
    <?php $msg= true;
    if($msg){
      echo ' <div class="alert alert-danger alert-dismissible fade show  container my-5" role="alert">
      <strong>Success!</strong> Your Account is deleted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
    }?>
    
    <div class="container-fluid bg-dark">
      <div class="row text-center align-items-center my-5 py-5">
        
        <div class="col-12 col-md-6 pt-5">
          <div class=" text-info " style= "fontSize: 50px">
            <h1 class="display-4 fw-bolder">
              Wishing To See
              <br />
              <span class="text-warning">You Again</span>
            </h1>
          </div>
        </div>
        <div class="col-12 col-md-6 ">
          <img class="img-fluid py-5 " src="charg2.jpg" alt="station2" />
        </div>
      </div>
    </div>
  </div>
</body>
<?php

session_unset(); // freezes all current sessio
session_destroy();
exit;
?>
</html>

