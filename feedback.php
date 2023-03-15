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
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
    $feed = $_POST["feedback"];
    $mobile = $_SESSION["mobile"];

    $query = "INSERT INTO `feedback` (`mobile`, `feedback`, `date`) VALUES ('$mobile', '$feed', current_timestamp())";
    mysqli_query($conn, $query);
    $valid = true;
}
?>

<?php
    if($valid){
      echo ' <div class="alert alert-success alert-dismissible fade show  container my-5" role="alert">
      <strong>Success!</strong> Feedback Submitted.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
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
      
        <img
          class="img rounded-circle ms-1 "
          src="logo.jpg"
          style= "height: 40" 
          alt="EV"
        />
      
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

    
<div class="container-fluid bg-warning my-5">
<div class="row">

        <h1 class="text-center my-5 fw-bold">Submit for<span class="text-info"> 4-Wheeler</span></h1>
        <div class="row justify-content-center">
            <div class="col-11 col-lg-5">
                <form action="/project/feedback.php" method="post">
                    <div class="form-group">
                    <label htmlFor="station_id">Your Feedback *</label>
                    <input
                    type="text"
                    name="feedback"
                    class="form-control"
                    placeholder="need improvement /liked it /loved it"
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
</div>

  </body>
</html>
