
<?php 
$showAlert= false;
$showError= false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $mobile = $_POST["mobile"];
    $Fullname = $_POST["Fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // check weather user exists
    $existSql = "SELECT * FROM `signup` WHERE mobile = '$mobile' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0){
      $showError = "Account Already Exists";
    }
    else{
      if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `signup` (`mobile`, `fullname`, `email`, `password`) VALUES ('$mobile', '$Fullname', '$email', '$hash')";
        $result = mysqli_query($conn,$sql);
        if ($result){
          $showAlert= true;
        }
      }
      else{
        $showError = "Passwords do not match";
      }
    }
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/4642a2875e.js"
      crossorigin="anonymous"
    ></script>
    <title>Signup</title>
    <!-- to HIDE SCROLLBAR-->
    <style>
      .scrollbar::-webkit-scrollbar {
        display: none;
      }
    </style>
  </head>
  <body>

  <?php require '_navbar.php' ?>
  <?php
  if($showAlert){
  echo ' <div class="alert alert-success alert-dismissible fade show  container my-5" role="alert">
    <strong>Success!</strong> Account created, You can login now.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
  }
  if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show  container my-5" role="alert">
      <strong>Error!</strong> '.$showError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }
  ?>
  <div class="container-fluid  my-5 py-5 ">
      <h1 class="text-center my-5 fw-bold">
        Sign<span class="text-info">Up</span>
      </h1>
      <div class="row justify-content-center">
        <div class="col-11 col-lg-5">
          <form action="/project/signup.php" method="post">
            <div class="form-group">
              <label htmlFor="mobile">Enter 10-digit Mobile number *</label>
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">+91</span>
                <input
                  type="number"
                  name="mobile"
                  class="form-control "
                  placeholder="Enter mobile number"
                  required  
                />
              </div>
            </div>
            <div class="form-group">
              <label htmlFor="name">Enter FullName *</label>
              <input
                type="text"
                name="Fullname"
                class="form-control"
                placeholder="fullname"
                required
              />
            </div>
            <div class="form-group">
              <label htmlFor="email">Enter Email *</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="email"
                required
                  
               />
            </div>
            <div class="form-group">
              <label htmlFor="pwd">Set-Password *</label>
              <input
                type="text"
                name="password"
                class="form-control"
                placeholder="password"
                required
                  
              />
            </div>
            <div class="form-group">
              <label htmlFor="pwd">Confirm-Password *</label>
              <input
                type="password"
                name="cpassword"
                class="form-control"
                placeholder="password"
                required
                  
              />
            </div>
            <button
              type="submit"
              class="btn btn-dark float-end my-4 "
              style="backgroundColor: black" 
              >
                SUBMIT
            </button>
          </form>
        </div>
      </div>
  
    </div>
    <!--fw in bootstrap 5-> font-weight in bootstrap 4-->
   

    
  </body>
</html>
