<?php
include "header.php";
require "config.php";

?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <form action="" method="POST">
            <?php

            $gnrID= $_GET['udID'];
            $qury="SELECT * FROM `genretbl` where `GenreId`= $gnrID";
            $sql= mysqli_query($conn, $qury);
         
               while($row= mysqli_fetch_assoc($sql)){
            ?>
            <input type="text" name="gnr" value="<?php echo $row['GenreName'] ?>" placeholder="Genre Name">
            <button name=update>Update</button>
            <?php } ?>
        </form>
      </div>
   </div>
   <?php
   if(isset($_POST['update'])){
      $gnr= $_POST['gnr'];

      $qry= "UPDATE `genretbl` SET `GenreName`='$gnr' WHERE `GenreId`= $gnrID";
      mysqli_query($conn, $qry);

      echo"
      <script>
          alert('Genre Deleted');
          window.location.href='genreList.php';
          </script>
      
      ";
   }
?>
   <!-- Wrapper END -->
   <?php
      include "footer.php";
   ?>