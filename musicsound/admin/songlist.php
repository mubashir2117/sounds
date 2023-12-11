<?php
include "header.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">audio_id</th>
      <th scope="col">audio_name</th>
      <th scope="col">GenreName </th>
      <th scope="col">ArtistName </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   
   $qury="SELECT `audio_id`,`audio_name`, `GenreName`, `ArtistName`, `audio_poster`, `audio_file`  FROM `songtbl`
   INNER JOIN artisttbl INNER join genretbl
   WHERE artisttbl.ArtistId=  songtbl.a_artist = genretbl.GenreId";
   $sql= mysqli_query($conn, $qury);

      while($row= mysqli_fetch_assoc($sql)){


?>
      <th scope="row"><?php echo "$row[audio_id]" ?></th>
      <th><?php echo "$row[audio_name]" ?></th>
      <td><?php echo "$row[GenreName]" ?></td>
      <td><?php echo "$row[ArtistName]" ?></td>
   
      <td>
        <a href="updsong.php?updID=<?php echo "$row[audio_id]" ?>">
            <button class="btn btn-outline-info">Update</button>
        </a>
        <a href="dltsong.php?dltID=<?php echo "$row[audio_id]" ?>">
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
   
           $qury="SELECT `audio_id`,`audio_name`, `GenreName`, `ArtistName`, `audio_poster`, `audio_file`  FROM `songtbl`
           INNER JOIN artisttbl INNER join genretbl
           WHERE artisttbl.ArtistId=  songtbl.a_artist = genretbl.GenreId";
           $sql= mysqli_query($conn, $qury);
   while($row= mysqli_fetch_assoc($sql)){
       
       
       ?>
       <div class="col-lg-4 col-md-6 col-sm-6">
<div class="card" style="width: 18rem;">
  <img src="<?php echo "$row[audio_poster]" ?>" class="card-img-top" width="350px" height="300px" alt="...">
  <div class="card-body">
   <audio src="<?php echo "$row[audio_file] " ?>" controls></audio>
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