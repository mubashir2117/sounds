<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play List</title>
    
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
    .playlist .box{
      display: flex;
    }
    .playlist img{
      height: 80px;
      width: 80px;
    }
   

    </style>
</head>

<body>
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
                <a class="nav-link active" aria-current="page" href="descover.php">Discover</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">Trending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">Release</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">PlayList</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">Downloads</a>
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
    

    <div class="container playlist">

       <h1 style="font-family: 'Gill Sans'; color: rgb(216, 11, 86);text-align: center;">Melodies that Move You</h1>
       <div class="music-container">
    <div class="row">
          <div class="col-lg-6 col-sm-12">

            <div class="box">
                <div class="image">
               <img src="images/alizafar1.jpg" alt=""> </div>
             <div class="music">
                <audio src="" controls></audio></div>
               </div>
         
              </div>

              <div class="col-lg-6 col-sm-12">

                <div class="box">
                    <div class="image">
                   <img src="images/" alt=""> </div>
                 <div class="music">
                    <audio src="" controls></audio></div>
                   </div>
             
                  </div>
         </div>
         <div class="row">
                  <div class="col-lg-6 col-sm-12">

                    <div class="box">
                        <div class="image">
                       <img src="images/" alt=""> </div>
                     <div class="music">
                        <audio src="" controls></audio></div>
                       </div>
                 
                      </div>


                      <div class="col-lg-6 col-sm-12">

                        <div class="box">
                            <div class="image">
                           <img src="images/" alt=""> </div>
                         <div class="music">
                            <audio src="" controls></audio></div>
                           </div>
                     
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-sm-12">

                            <div class="box">
                                <div class="image">
                               <img src="images/" alt=""> </div>
                             <div class="music">
                                <audio src="" controls></audio></div>
                               </div>
                         
                              </div>
                              <div class="col-lg-6 col-sm-12">

                                <div class="box">
                                    <div class="image">
                                   <img src="images/aima1.jpg" alt=""> </div>
                                 <div class="music">
                                    <audio src="" controls></audio></div>
                                   </div>
                             
                                  </div>
                                </div>
                                <div class="row">

                                  <div class="col-lg-6 col-sm-12">

                                    <div class="box">
                                        <div class="image">
                                       <img src="images/aima2.jpg" alt=""> </div>
                                     <div class="music">
                                        <audio src="" controls></audio></div>
                                       </div>
                                 
                                      </div>
                                      <div class="col-lg-6 col-sm-12">

                                        <div class="box">
                                            <div class="image">
                                           <img src="images/" alt=""> </div>
                                         <div class="music">
                                            <audio src="" controls></audio></div>
                                           </div>
                                     
                                          </div>
                                </div>

              </div>
        </div>
    </div>
</body>
</html>