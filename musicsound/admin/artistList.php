<?php
include "header.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ArtistId </th>
      <th scope="col">ArtistName</th>
      <th scope="col">ArtistGener </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   
   $qury="SELECT `ArtistId`, `ArtistName`, `ArtistImg`, `GenreName` FROM `artisttbl` 
   INNER JOIN genretbl where genretbl.GenreId = artisttbl.ArtistGener";
   $sql= mysqli_query($conn, $qury);

      while($row= mysqli_fetch_assoc($sql)){


?>
      <th scope="row"><?php echo "$row[ArtistId]" ?></th>
      <td><?php echo "$row[ArtistName]" ?></td>
      <td><?php echo "$row[GenreName]" ?></td>
      <td>
        <a href="artist_update.php?updID=<?php echo "$row[ArtistId]" ?>">
            <button class="btn btn-outline-info">Update</button>
        </a>
        <a href="artist_delt.php?dltId=<?php echo "$row[ArtistId]" ?>">
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
   
   $qury="SELECT `ArtistId`, `ArtistName`, `ArtistImg`, `GenreName` FROM `artisttbl` 
   INNER JOIN genretbl where genretbl.GenreId = artisttbl.ArtistGener";
   $sql= mysqli_query($conn, $qury);
   
   while($row= mysqli_fetch_assoc($sql)){
       
       
       ?>
       <div class="col-lg-4 col-md-6 col-sm-6">
<div class="card" style="width: 18rem;">
  <img src="<?php echo "$row[ArtistImg]" ?>" class="card-img-top" width="350px" height="300px" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?php echo "$row[ArtistName]" ?></h3>
    <p class="card-text"><?php echo "$row[GenreName]" ?></p>
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