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
        <form class="container form" action="" method="POST" enctype="multipart/form-data"><br>
            <input class="input-box" type="text" name="artist" placeholder="Artist Name"><br>
                <select class="input-box" name="gnr" id="">
                    <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
    $slct= "SELECT * FROM `genretbl`";
   $res=mysqli_query($conn, $slct);
   while($row= mysqli_fetch_assoc($res)){

                    ?>
                    <option value="<?php echo $row['GenreId'] ?>"><?php echo $row['GenreName'] ?></option>
                    <?php } ?>
                </select><br><br>
            <input class="input-box" type="file" name="artistimg"><br><br>
            <button name=sub style=" width: 80px; background: black;  color: white; ">Add</button>
        </form>
      </div>
   </div>
   <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   if(isset($_POST['sub'])){
      $artist= $_POST['artist'];
      $gnr= $_POST['gnr'];

      
        $imggg = $_FILES["artistimg"];
      
    
      $actualAddres = $imggg["tmp_name"] ;
      $imageNamee =  $imggg["name"] ;
    
      $mypath = "images/".$imageNamee;
      
      
      move_uploaded_file($actualAddres,$mypath);


      $qry= "INSERT INTO `artisttbl`(`ArtistName`, `ArtistImg`, `ArtistGener`) VALUES ('$artist','$mypath','$gnr')";
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