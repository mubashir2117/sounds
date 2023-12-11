<style>
   .form{
      position: relative;
      width:1100px;
     height:600px;
     background: lightgray;
     border-radius: 8px;
     font-family: Georgia, 'Times New Roman', Times, serif;
   }
   .input-box{
    padding: 5px;
    margin: 10px 0;
    width: 95%;
    border: 1px solid black;
    outline: none;
   }
</style>
<?php
include "header.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <form class="container form" action="" method="POST"><br>
            <input class="input-box" type="text" name="User" placeholder="User Name"><br>
              <br><br>
            <input class="input-box" type="password" name="pwd" placeholder="User Password"><br><br>
            <button name='sub' style=" width: 80px; background: black;  color: white; ">Add</button>
        </form>
      </div>
   </div>
   <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   if(isset($_POST['sub'])){
      $User= $_POST['User'];
      $pwd= $_POST['pwd']; 




      $qry= "INSERT INTO `user`(`user_name`, `user_password`,`rrole`) VALUES ('$User','$pwd','admin')";
      mysqli_query($conn, $qry);

      echo "
      <script>
         alert('User Added Successfully');
      </script>
      ";
   }

?>
   <!-- Wrapper END -->
   <?php
      include "footer.php";
   ?>