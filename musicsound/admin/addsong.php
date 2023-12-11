<?php
include "header.php";
?>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .box{
     position: relative;
     width: 1100px;
     height: 570px;
     background: lightgray;
     border-radius: 8px;
     font-family: Georgia, 'Times New Roman', Times, serif;
  
    }
    .box form{
        position: absolute;
        inset: 4px;
        background: lightgrey;
        border-radius: 8px;
        z-index: 2;
    }
    .input-box{
    padding: 5px;
    margin: 10px 0;
    width: 95%;
    border: 1px solid black;
    outline: none;
   }
   .artist{
    padding: 5px;
    margin: 10px 0;
    width: 92%;
    border: 1px solid black;
    outline: none;
   }
</style>

      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <div class="box">
        <form class="container form"  action="" method="POST" enctype="multipart/form-data">
            <label for="" style="font-weight: bold;">Select Genre</label><br>
                <select class="artist" name="gnr" id="">
                    <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
    $slct= "SELECT * FROM `genretbl`";
   $res=mysqli_query($conn, $slct);
   while($row= mysqli_fetch_assoc($res)){

                    ?>
                    <option value="<?php echo $row['GenreId'] ?>"><?php echo $row['GenreName'] ?></option>
                    <?php } ?>
                </select><br>
            <label for="" style="font-weight: bold;">Select Artist</label><br>

                <select class="artist" name="artist" id="">
                    <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
    $art= "SELECT * FROM `artisttbl`";
   $artres=mysqli_query($conn, $art);
   while($artrow= mysqli_fetch_assoc($artres)){

                    ?>
                    <option value="<?php echo $artrow['ArtistId'] ?>"><?php echo $artrow['ArtistName'] ?></option>
                    <?php } ?>
                </select><br><br>
            <label for="" style="font-weight: bold;">Audio Name</label>
           <input class="input-box" type="text" name="aname" style="  width: 1000px;"><br>

            <label for="" style="font-weight: bold;">Audio Poster</label>
            <input class="input-box" type="file" name="poster" style="  width: 1000px;"><br>
            
            <label for="" style="font-weight: bold;">Audio File</label><br>
             <input class="input-box" type="file" name="mp3" style="width: 1000px;"><br>
    
            <button name=sub style=" width: 80px; background: black;  color: white; ">Add</button>
        </form>
        </div>
      </div>
  
   <?php
   $conn = mysqli_connect("localhost","root","","sound");
   if(isset($_POST['sub'])){
       $gnr= $_POST['gnr'];
       $artist= $_POST['artist'];
       $audname= $_POST['aname'];
     
        $imggg = $_FILES["poster"];
      
    
      $actualAddres = $imggg["tmp_name"] ;
      $imageNamee =  $imggg["name"] ;
    
      $mypath = "images/".$imageNamee;
      
      
      move_uploaded_file($actualAddres,$mypath);
       
      $aud = $_FILES["mp3"];
      
    
      $actAddres = $aud["tmp_name"] ;
      $AudNamee =  $aud["name"] ;
    
      $myaudpath = "audio/".$AudNamee;
      
      
      move_uploaded_file($actAddres,$myaudpath);


      $qry= "INSERT INTO `songtbl`(`audio_name`, `a_artist`, `a_genre`, `audio_poster`, `audio_file`) VALUES ('$audname','$artist','$gnr', '$mypath', '$myaudpath')";
      
      mysqli_query($conn, $qry);

      echo "
      <script>
         alert('Audio Added Successfully');
      </script>
      ";
   }

?>
   <!-- Wrapper END -->
   <?php
      include "footer.php";
   ?>