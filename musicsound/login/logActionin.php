<?php
session_start();
$conn = mysqli_connect("localhost","root","","sound");

$username=$_POST["user"];
$password=$_POST["pass"];
$query= "SELECT * FROM `user` WHERE user_name= '$username' && user_password= '$password'";
 
$rider= mysqli_query($conn, $query);
while($row= mysqli_fetch_assoc($rider))

if($row){

    $_SESSION['username'] = $row['user_name'];
    $_SESSION['password'] = $row['user_password'];
    $_SESSION['userrole'] = $row['rrole'];
    if($_SESSION['userrole'] == "admin"){
    echo"
     <script>
       alert('Login successfully');
       window.location.href='../admin/admin-dashboard.php';
     </script>";
    }
    else{
        echo"
        <script>
          alert('Login Failed');
          window.location.href='login.php';
        </script>";
    }
}

?>