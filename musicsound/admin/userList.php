<?php
include "header.php";
?>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">user_id </th>
      <th scope="col">user_name</th>
      <th scope="col">user_password </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
   $conn = mysqli_connect("localhost","root", "", "sound");
   
   $qury="SELECT * from user";
   $sql= mysqli_query($conn, $qury);

      while($row= mysqli_fetch_assoc($sql)){


?>
      <th scope="row"><?php echo "$row[user_id]" ?></th>
      <td><?php echo "$row[user_name]" ?></td>
      <td><?php echo "$row[user_password]" ?></td>
    
      
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