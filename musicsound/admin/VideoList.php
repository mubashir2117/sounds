<?php
include "header.php";
?>


      <!-- Page Content  -->
      <div id="content-page" class="content-page">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">video_id</th>
      <th scope="col">video_name</th>
      <th scope="col">GenreName </th>
      <th scope="col">ArtistName </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   
   $qury="SELECT `video_id`, `video_name`, `ArtistName`, `GenreName`, `video_poster`, `video_file` FROM `video`
   INNER JOIN artisttbl INNER join genretbl
      WHERE artisttbl.ArtistId=  video.v_artist = genretbl.GenreId";
   $sql= mysqli_query($conn, $qury);

      while($row= mysqli_fetch_assoc($sql)){


?>
      <th scope="row"><?php echo "$row[video_id]" ?></th>
      <th><?php echo "$row[video_name]" ?></th>
      <td><?php echo "$row[GenreName]" ?></td>
      <td><?php echo "$row[ArtistName]" ?></td>
   
      <td>
        <a href="updVideo.php?updId=<?php echo "$row[video_id]" ?>">
            <button class="btn btn-outline-info">Update</button>
        </a>
        <a href="Videodlt.php?dltID=<?php echo "$row[video_id]" ?>">
            <button class="btn btn-outline-danger">Delete</button>
        </a>
      </td>
      
    </tr>
  <?php 

      }

      ?>
  </tbody>
</table>
<div class="container-fluid">
    <div class="row">
        
        
        <?php
           $conn = mysqli_connect("localhost","root", "", "sound");
   
           $qury="SELECT `video_id`, `video_name`, `ArtistName`, `GenreName`, `video_poster`, `video_file` FROM `video`
           INNER JOIN artisttbl INNER join genretbl
              WHERE artisttbl.ArtistId=  video.v_artist = genretbl.GenreId";
           $sql= mysqli_query($conn, $qury);
   while($row= mysqli_fetch_assoc($sql)){
       
       
       ?>
       <div class="col-lg-4 col-md-6 col-sm-6">
<div class="card" style="width: 18rem;">
  <!-- <img src="<?php echo "$row[video_poster]" ?>" class="card-img-top" width="350px" height="300px" alt="..."> -->
  <div class="card-body">
   <video src="<?php echo "$row[video_file] " ?>" width="290px" height="300px" controls></video>
  </div>
</div>
</div>
<?php } ?>
    </div>
</div>
      </div>
   </div>
   <!-- Wrapper END -->

<?php
    
      include "footer.php";
      ?> 