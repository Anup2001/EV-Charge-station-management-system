
<?php 
$login= false;
$showError= false;
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

   // $sql = "Select * from signup where mobile = '$mobile' AND password = '$password'";
    $sql = "Select * from signup where mobile = '$mobile'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
      while($row = mysqli_fetch_assoc($result)){
        if(password_verify($password, $row['password'])){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['mobile'] = $mobile;
          $_SESSION["Fullname"] = $Fullname;
          header("location:account.php");
        }
        else{
          $showError = "Invalid Credentials";
        }
      }
    }
    else{
      $showError = "Invalid Credentials";
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
    <title>Go Electric</title>
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
    if($login){
      echo ' <div class="alert alert-success alert-dismissible fade show  container my-5" role="alert">
      <strong>Success!</strong> You are logged in.
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
    <div class="container my-5 py-2">
        <h1 class="text-center my-5 fw-bold">
          <span class="text-info">Welcome </span>Back
        </h1>
        <div class="row justify-content-center">
          <div class="col-11 col-lg-5">
            <form action="/project/login.php" method="post">
              <div class="form-group">
                <label htmlFor="mobile">Mobile *</label>
                <input
                  type="number"
                  name="mobile"
                  class="form-control"
                  placeholder="Enter mobile number"
                  required
                  
                />
              </div>
              <div class="form-group">
                <label htmlFor="pwd">Password *</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  placeholder="password"
                  required
                  
                />
              </div>

              <button
                type="submit"
                class="btn btn-dark float-end my-4 "
                style= "backgroundColor: black" 
              >
                SUBMIT
              </button>
            </form>
          </div>
        </div>

       
    </div>
  </body>
</html>
