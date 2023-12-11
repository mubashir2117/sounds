<?php
include "header.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">GenreID</th>
      <th scope="col">GenreName</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   
   $qury="SELECT * FROM `genretbl`";
   $sql= mysqli_query($conn, $qury);

      while($row= mysqli_fetch_assoc($sql)){


?>
      <th scope="row"><?php echo "$row[GenreId]" ?></th>
      <td><?php echo "$row[GenreName]" ?></td>
      <td><a href="genre_update.php?udID=<?php echo "$row[GenreId]" ?>"><button class="btn btn-outline-info">Update</button></a>
   <a href="genre_delete.php?dltID=<?php echo "$row[GenreId]" ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
    </tr>
  <?php 

      }

      ?>
  </tbody>
</table>
      </div>
   </div>
   <!-- Wrapper END -->
   <?php
      include "footer.php";
   ?>