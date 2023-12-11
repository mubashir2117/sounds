<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
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
      background-image: linear-gradient(rgb(238, 18, 201), rgb(121, 13, 210));
     
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

    .container-fluid{
        width: 450px;
        box-shadow: 0 0 3px 0 rgba( 0, 0, 0, 0.3);
        background: black;
        padding: 20px;
        text-align: center;
      font-family: 'Gill Sans';
      border-radius: 10px;
        }
       
        label{
            color: #fff;
            font-size: 20px;
        }
        .input-box{
      
      border-radius: 20px;
      padding: 5px;
      margin: 10px 0;
      width: 100%;
      border: 1px solid #999;
      outline: none;
     
    }
    button{
        background: rgb(63,94,251);
       background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
      color:#fff;
      width: 100%;
      padding: 5px;
      border-radius: 20px;
      font-size: 20px;
      margin: 10px 0;
      border: none;
      outline: none;
      cursor: pointer;
    }
    b{
        color: #fff;
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
            <a class="nav-link active" href="">PlayList</a>
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
 <br><br>
 <div class="container-fluid">
     <h1  style="font-family: 'Gill Sans'; color: rgb(232, 10, 169);text-align: center;">SignUp</h1>
 <form action="signupaction.php" method="POST">
     <label for="">Username</label><br>
     <input type="text" class="input-box" name="uname" width="250px"><br><br>
     <label for="">Password</label><br>
     <input type="password" class="input-box" name="pwd"><br><br>
     <label for="">Email</label><br>
     <input type="email" class="input-box" name="mail"><br><br>

     <button type="submit" class="signup-btn" name="submit">Sign Up</button><br>
     <p style="color: wheat; font-family:'Gill Sans' sans-serif; font-size: 20px;">
      Already have an Account?
      <a href="login.php">
        <span style="color: aqua;text-decoration: none;">LOGIN</span></a></p>
 </form>
 </div>
    
 
</body>
</html>