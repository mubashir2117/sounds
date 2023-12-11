<?php
include "header.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <form action="" method="POST">
            <input type="text" name="gnr" placeholder="Genre Name">
            <button name=sub style=" width: 80px; background: black;  color: white; ">Add</button>
        </form>
      </div>
   </div>
   <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   if(isset($_POST['sub'])){
      $gnr= $_POST['gnr'];

      $qry= "INSERT INTO `genretbl`(`GenreName`) VALUES ('$gnr')";
      mysqli_query($conn, $qry);

      echo "
      <script>
         alert('Genre Added Successfull');
      </script>
      ";
   }
?>
   <!-- Wrapper END -->
   <?php
      include "footer.php";
   ?>