<?php 
require "config.php";

$artID= $_GET['dltId'];
$dltSQL= "DELETE FROM `artisttbl` WHERE ArtistId= $artID";

$res=mysqli_query($conn, $dltSQL);
echo"
<script>
    alert('Artist Deleted');
    window.location.href='artistList.php';
    </script>

";

?>