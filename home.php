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
    <div class="container-fluid bg-dark" >
      <div class="row text-center align-items-center my-5 py-5">
        <div class="col-12 col-md-6 ">
          <img class="img-fluid py-5 " src="charg2.jpg" alt="station2" />
        </div>
        <div class="col-12 col-md-6 pt-5">
          <div class=" text-info" >
            <h1 class="display-4 fw-bolder">
              Good Bye Fuel,
              <br />
              <span class="text-warning">Hello Electric</span>
            </h1>
            
          </div>
          <h4 class="fw-light leadtext"></h4>
        </div>
      </div>
    </div>


    <div class="container text-center my-5">
      <h1 class="fw-bold">
        Our
        <span class="text-info">Places</span>
      </h1>
      <div class="lead">Make use of our services in these places</div>
      <div class="lead">Click the below cards to reach your nearby station</div>
      <div class="row my-5 pt-3">
        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img src="palacerd.jpg" alt="image" />
            <div class="card-body">
              <h3 class="card-title">Palace Road</h3>
              <h4 class="card-text">(Station-ID : 1)</h4>
              <a href="https://www.google.com/maps/dir/NIE+Administration+Block,+Ashokapuram,+Mysuru,+Karnataka/Onesta+Mysuru,+2927,+Shiva%E2%80%99s+Plaza+and+Star+Point,+Gokulam+Main+Rd,+Vani+Vilas+Mohalla,+Mysuru,+Karnataka+570002/@12.3215965,76.6272358,16.22z/data=!4m13!4m12!1m5!1m1!1s0x3baf655624415471:0x1285cf84181794f7!2m2!1d76.6407999!2d12.2831581!1m5!1m1!1s0x3baf7a8efe7307c3:0xee60c1c086ee9c57!2m2!1d76.6267924!2d12.3266294" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img src="gokulam.jpg" alt="image" />
            <div class="card-body">
              <h3 class="card-title my-3">Gokulam</h3>
              <h4 class="card-text">
                (Station-ID : 2)
              </h4>
              <a href="https://www.google.com/maps/dir/12.283409,76.7221076/electric+charge+station+near+onesta+mysore/@12.2823473,76.6516878,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3baf71d0b23e4f69:0x34c6d95403abad36!2m2!1d76.6502416!2d12.3024877" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img src="hebbal.jpg" alt="image" />
            <div class="card-body">
              <h3 class="card-title">Hebbal</h3>
              <h4 class="card-text">(Station-ID : 3)</h4>
              <a href="https://www.google.com/maps/dir/12.283409,76.7221076/Electric+Vehicle+Charging+Station,+KIADB+Industrial+Area+Hebbal,+Hootagalli,+570+018,+Hebbal+Industrial+Estate,+Hebbal,+Ilavala+Hobli,+Karnataka+570027/@12.3202156,76.5890572,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3baf7a352c65b7eb:0x20e01aae3504111!2m2!1d76.5952725!2d12.3579528" class="stretched-link"></a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 my-2">
          <div class="card shadow h-100">
            <img src="hebbal.jpg" alt="image" />
            <div class="card-body">
              <h3 class="card-title">Kuvempunagar</h3>
              <h4 class="card-text">(Station-ID : 4)</h4>
              <a href="https://www.google.com/maps/dir/12.283409,76.7221076/7JWR%2B3HP+Tata+Charging+Station,+Krishnamurthy+Puram,+Mysuru,+Karnataka+570009/@12.2792704,76.6473277,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3baf71c24bccc7b3:0x3afe7aa72d202a50!2m2!1d76.6414378!2d12.2952118" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="my-5">
        <a href="#" class="text-dark text-end"
          ><h5>
            see other places
            <i class="fas fa-arrow-right align-middle"></i></h5
        ></a>
      </div>
    </div>
   

    <div class="container-fluid bg-dark bg-gradient">
      <div class="row text-center align-items-center my-5 py-5">
        <div class="col-12 col-md-6 ">
          <img class="img-fluid py-5 " src="2wheeler.jpg" alt="pic" />
        </div>
        <div class="col-12 col-md-6">
        <img class="img-fluid py-5 " src="4wheeler.jpg" alt="abc" />    
        </div>
      </div>
    </div>
   
      <div
        class="container-fluid text-center my-5"
        style=" background-color: black" 
      >
       
        <div class="row">
          <div class="col-12 col-md-4 py-3">
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
          <div class="col-12 col-md-4 py-3">
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