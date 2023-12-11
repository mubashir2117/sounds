<?php
include "header.php";
require "config.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <form action="" method="POST" enctype="multipart/form-data">
                <?php
                $artID= $_GET['updID'];
                $slctqry="SELECT * FROM `artisttbl` WHERE ArtistId = '$artID'";
                $result=mysqli_query($conn, $slctqry);
                while($artRes= mysqli_fetch_assoc($result)){
                ?>

            <input type="text" name="artist" placeholder="Artist Name" value="<?php echo $artRes['ArtistName'] ?>" ><br>
                <select name="gnr" id="">
                    <?php
                    $slct= "SELECT * FROM `genretbl`";
                $res=mysqli_query($conn, $slct);
                while($row= mysqli_fetch_assoc($res)){
                if($row['GenreId']==$artRes['ArtistGener']){
                    $select= "selected";
                }
                else {
                    $select="";
                }
                    ?>
                    <option <?php echo $select ?> value="<?php echo $row['GenreId'] ?>"><?php echo $row['GenreName'] ?></option>
                    <?php 
                } ?>
                </select><br><br>
            <input type="file" name="artistimg" value="<?php echo $artRes['ArtistImg'] ?>"><br>
            <button name="update">Update</button>
            <?php } ?>
        </form>
      </div>
   </div>
   <?php
   if(isset($_POST['update'])){
      $artist= $_POST['artist'];
      $gnr= $_POST['gnr'];

      
        $imggg = $_FILES["artistimg"];
      
    
      $actualAddres = $imggg["tmp_name"] ;
      $imageNamee =  $imggg["name"] ;
    
      $mypath = "images/".$imageNamee;
      
      
      move_uploaded_file($actualAddres,$mypath);


      $qry= "UPDATE `artisttbl` SET `ArtistName`='$artist',`ArtistImg`='$mypath',`ArtistGener`='$gnr' WHERE ArtistId = $artID";
      mysqli_query($conn, $qry);

      echo "
      <script>
         alert('Artist Added Successfully');
      </script>
      ";
   }

?>
   <!-- Wrapper END -->
   <?php
      include "footer.php";
   ?>