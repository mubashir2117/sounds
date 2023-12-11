<?php 
require "config.php";

$gnrID= $_GET['dltID'];
$dltSQL= "DELETE FROM `genretbl` WHERE GenreId= $gnrID";

$res=mysqli_query($conn, $dltSQL);
echo"
<script>
    alert('Genre Deleted');
    window.location.href='genreList.php';
    </script>

";

?>