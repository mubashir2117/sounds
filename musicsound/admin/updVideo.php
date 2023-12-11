<?php
include "header.php";
?>

<br><br>
  <!-- Page Content  -->
<div id="content-page" class="content-page">
    <br><br>
 <form action="" method="POST" enctype="multipart/form-data">
     <?php
     $conn = mysqli_connect("localhost","root", "", "sound");
     $vidId= $_GET['updId'];
        $videoQry= "SELECT * FROM `video` WHERE video_id= $vidId";
        $resuult=mysqli_query($conn, $videoQry);
        while($upd=mysqli_fetch_assoc($resuult)){
         
    ?>
            <label for="">Select genre</label>
                <select name="gnr" id="">
                    <?php
    $slct= "SELECT * FROM `genretbl`";
   $res=mysqli_query($conn, $slct);
   while($row= mysqli_fetch_assoc($res)){
    if($row['GenreId']==$upd['v_genre']){
        $select= "selected";
    }
    else {
        $select="";
    }
                    ?>
                    <option <?php echo $select ?> value="<?php echo $row['GenreId'] ?>"><?php echo $row['GenreName'] ?></option>
                    <?php } ?>
                </select><br><br>
            <label for="">Select artist</label>

                <select name="artist" id="">
                    <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
    $art= "SELECT * FROM `artisttbl`";
   $artres=mysqli_query($conn, $art);
   while($artrow= mysqli_fetch_assoc($artres)){
    if($artrow['ArtistId']==$upd['v_artist']){
        $selected= "selected";
    }
    else {
        $selected="";
    }
                    ?>
                    <option <?php echo $selected ?> value="<?php echo $artrow['ArtistId'] ?>"><?php echo $artrow['ArtistName'] ?></option>
                    <?php } ?>
                </select><br><br>
            <label for="">video name</label>
           <input type="text" name="vname" value="<?php echo $upd['video_name'] ?> "><br>

        
            <label for="">video file</label>
             <input type="file" name="mp4"><br>
             <br>
            <button name=sub>Update</button>
            <?php } ?>
        </form>
</div>
<?php
   $conn = mysqli_connect("localhost","root","","sound");
   if(isset($_POST['sub'])){
       $gnr= $_POST['gnr'];
       $artist= $_POST['artist'];
       $vidname= $_POST['vname'];       
      $vid = $_FILES["mp4"];
      
    
      $actAddres = $vid["tmp_name"] ;
      $vidNamee =  $vid["name"] ;
    
      $myvidpath = "video/".$vidNamee;
      
      
      move_uploaded_file($actAddres,$myvidpath);


      $qry= "UPDATE `video` SET `video_name`='$vidname,`v_artist`='$artist',`v_genre` ='$gnr' WHERE `video_id`= {$vidId}";
      

      
      mysqli_query($conn, $qry);

      echo "
      <script>
         alert('video Updated Successfully');
      </script>
      ";
   }


?>


<?php
      include "footer.php";
   ?>
