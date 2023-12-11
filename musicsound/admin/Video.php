<style>
    .form{
      position: relative;
      width: 1100px;
      height: 550px;
      background: lightgray;
      border-radius: 5px;
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
<div id="content-page" class="content-page">
 <form class="container form"action="" method="POST" enctype="multipart/form-data">
            <label for=""style="font-weight: bold;">Select Genre</label>
                <select class="input-box" name="gnr" id="">
                    <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
    $slct= "SELECT * FROM `genretbl`";
   $res=mysqli_query($conn, $slct);
   while($row= mysqli_fetch_assoc($res)){

                    ?>
                    <option value="<?php echo $row['GenreId'] ?>"><?php echo $row['GenreName'] ?></option>
                    <?php } ?>
                </select><br>
            <label for=""style="font-weight: bold;">Select Artist</label>

                <select class="input-box" name="artist" id="">
                    <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
    $art= "SELECT * FROM `artisttbl`";
   $artres=mysqli_query($conn, $art);
   while($artrow= mysqli_fetch_assoc($artres)){

                    ?>
                    <option value="<?php echo $artrow['ArtistId'] ?>"><?php echo $artrow['ArtistName'] ?></option>
                    <?php } ?>
                </select><br>
            <label for=""style="font-weight: bold;">Video Name</label>
           <input class="input-box" type="text" name="vname"><br>

            <label for=""style="font-weight: bold;">Video Poster</label>
            <input class="input-box" type="file" name="poster"><br>
            
            <label for=""style="font-weight: bold;">Video File</label>
             <input class="input-box" type="file" name="mp4"><br>
             <br>
            <button name=sub style=" width: 80px; background: black;  color: white;">Add</button>
        </form>
</div>
<?php
   $conn = mysqli_connect("localhost","root","","sound");
   if(isset($_POST['sub'])){
       $gnr= $_POST['gnr'];
       $artist= $_POST['artist'];
       $vidname= $_POST['vname'];
     
        $imggg = $_FILES["poster"];
      
    
      $actualAddres = $imggg["tmp_name"] ;
      $imageNamee =  $imggg["name"] ;
    
      $mypath = "images/".$imageNamee;
      
      
      move_uploaded_file($actualAddres,$mypath);
       
      $aud = $_FILES["mp4"];
      
    
      $actAddres = $aud["tmp_name"] ;
      $vidNamee =  $aud["name"] ;
    
      $myvidpath = "video/".$vidNamee;
      
      
      move_uploaded_file($actAddres,$myvidpath);


      $qry= "INSERT INTO `video`(`video_name`, `v_artist`, `v_genre`, `video_poster`, `video_file`) VALUES ('$vidname','$artist','$gnr','$mypath','$myvidpath')";
      
      mysqli_query($conn, $qry);

      echo "
      <script>
         alert('video Added Successfully');
      </script>
      ";
   }

?>
<?php
      include "footer.php";
   ?>