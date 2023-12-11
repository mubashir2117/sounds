<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOUND</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      /* background-image: linear-gradient(rgb(12, 12, 12), rgb(12, 12, 12)); */
      background-color: black;
    }

    .navbar {
      font-size: 23px;
      font-family: 'Gill Sans';

    }

    .navbar-nav .nav-link {
      padding: 0 20px;
      color: aliceblue;
      transition: 0.3s ease;
    }

    .navbar i {
      color: aliceblue;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar i:hover,
    .navbar-light .navbar-nav .nav-link.active {
      color: rgb(244, 12, 186);
    }

    .navbar i {
      font-size: 1.2rem;
      padding: 0 20px;
      cursor: pointer;
      font-weight: 500;
      transition: 0.3s ease;
    }

    .container {
      text-align: center;
      font-family: 'Gill Sans';
      color: black;
    }


    .row .card:hover {
      transform:  scale(1.1);
      transition: 0.8s;
     
    }

   
    .fa {
      padding: 10px;
      font-size: 30px;
      width: 50px;
      text-align: center;
      text-decoration: none;
      border-radius: 50%;
    }

    /* Add a hover effect if you want */
    .fa:hover {
      opacity: 0.7;

    }

    /* Set a specific color for each brand */

    /* Facebook */
    .fa-facebook {
      color: aliceblue;
    }

    .fa-facebook:hover {
      background-color: #406dcf;
    }

    /* Twitter */
    .fa-twitter {
      color: aliceblue;
    }

    .fa-twitter:hover {
      background-color: #00ace0;
    }



    /* instagram */
    .fa-instagram {
      color: aliceblue;
    }

    .fa-instagram:hover {
      background-color: #e266ae;
    }

    /* pinterest */
    .fa-pinterest {
      color: aliceblue;
    }

    .fa-pinterest:hover {
      background-color: #CA232C;
    }
    .nav-item .dropdown-menu {
      background-color:grey;
      color: black;
     font-size: 23px;
      border-radius: 20px;
    }
    .nav-item .dropdown-menu :hover{
      color:deeppink;
      background-color:blue;
      border-radius: 40px;
    }
  </style>
</head>

<body>
  <!--NAVIGATION-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"
          style="height:80px; width: 120px; border-radius: 25px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="release.php">Release</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Trending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="playlist.php">PlayList</a>
          </li>
         
          </li>
        
          <li class="nav-item">
            <a href="signup.php">
            <i class="fa fa-user" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">LOGIN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <!--NAVIGATION END-->

                        <!-- SECTION-->
   <div class="carousel-inner">
   <div class="carousel-item active" data-bs-interval="10000">
   <img src="images/banner1.avif" class="d-block w-100" alt="" height="400px">
 <div class="carousel-caption d-none d-md-block">
  <h1 style="font-family: 'Gill Sans'; color: rgb(232, 10, 169);text-align: center;">Unlock the Rhythm of Life
  </h1>
  
 </div>
   </div>
  </div>
<br>
  
  <div class="container">
    <div class="row text-dark m-4">
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="aimabaig.php">
          <img src="images/aimabaig.jpg" class="card-img-top" alt="" height=250px;>
        </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="alizafar.php">
          <img src="images/alizafar.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="atifaslam.php">
          <img src="images/atifaslam1.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/meesha.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-dark m-4">
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/arjit.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/momina1.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/bilal3.jfif" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/talha.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-dark m-4">
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/carousal3.webp" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/asim1.jfif" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/rahat.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
     
    
 
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/natasha.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div>
      
      <!-- <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <div class="card" style="border:2px solid  rgb(232, 10, 169)">
          <a href="">
          <img src="images/talhayounus.jpg" class="card-img-top" alt="..." height="250px">
          </a>
        </div>
      </div> -->
    </div>
  </div>
  <br>
 <!-- SECTION END-->
 

  
  <!-- Footer -->
  
  <hr style="height: 16px; color: rgb(232, 10, 169); width: 100%;">
  <div class="container-fluid">
    <div class="row">
      <div class="logo" style="text-align: center;">
        <img src="images/logo.png" alt="logo" style="height:80px; width: 120px; ">
      </div>
      <!-- Section: Links  -->

      <div class="col-lg-3 md-6 sm-12 ">

        <h4 style="font-family: 'Gill Sans'; color:aliceblue;"><a href="index.html" class="text-reset"
            style="text-decoration: none;">Home</a></h4>
        <p style="font-family: 'Gill Sans'; color:aliceblue; font-size: 18px;">Videos</p>
        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;">Audios</p>
        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;">Artist</p>
        <p style="font-family: 'Gill Sans'; color: aliceblue;font-size: 18px;"></p>
        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;"></p>
        <p style="font-family: 'Gill Sans'; color: aliceblue;font-size: 18px;"></p>
        <p style="font-family: 'Gill Sans'; color: aliceblue;font-size: 18px;"></p>
        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;"></p>
        <p style="font-family: 'Gill Sans'; color: aliceblue;font-size: 18px;"></p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
        <h4 style="font-family: 'Gill Sans'; color:aliceblue;"><a href="newarrival.html" class="text-reset"
            style="text-decoration: none;">Discover</a></h4>

        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;"><a href="" class="text-reset"
            style="text-decoration: none;"></a>Tranding</p>
        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;">Release<a href="" class="text-reset"
            style="text-decoration: none;"></a></p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mt-4">

        <h4 style="font-family: 'Gill Sans'; color:aliceblue;"><a href="index.html" class="text-reset"
            style="text-decoration: none;"> SOUND</a> </h4>
        <p style="font-family: 'Gill Sans'; color:aliceblue;font-size: 18px;"><a href="" class="text-reset"
            style="text-decoration: none;">PlayList</a></p>

       
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 mt-4" style="color: white;">
        <h5 style="font-family: 'Gill Sans'; color:aliceblue;">Subscribe to our Newsletter</h5>
        <form>
          <input type="email" placeholder="E-mail" id="email">
          <span id="mail" style="color:red; font-weight: bold;"></span>
          <!-- <a href="#" class="btn btn-outline-light" style="font-family: 'Gill Sans';">Submit</a> -->
          <button onsubmit="return validation()" class="btn btn-outline-light">Submit</button>
        </form>
        <br>
        
        <h5 style="font-family: 'Gill Sans'; color:aliceblue;">Follow Us</h5>

        <a href="https://www.facebook.com/login/" class="fa fa-facebook"></a>
        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"
          class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
        <a href="https://www.pinterest.com/" class="fa fa-pinterest"></a>
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- Copyright -->
  <div class="text-center p-4 fw-lighter " style="background-color:black ; color: white; font-size:13px"><br>
    © 2023 SOUND.All Rights Reserved |
    <a class="text-danger " href="https://open.spotify.com/">Developed by SOUND</a>
    |<a class="text-danger " href="https://soundcloud.com/"> Powered by SOUND</a>
  </div>
  
  <!-- Copyright -->

  <!-- Footer -->
  <script>
    function validation(){
      var email = document.getElementById("email").value
      if (email = " ") {
        document.getElementById("mail").innerHTML = "<br>Please fill this feild <br>"
        return false
      }
      else {
        document.getElementById("mail").innerHTML = null
      }
    }
  </script>







</body>

</html>