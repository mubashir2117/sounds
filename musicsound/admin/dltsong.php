<?php 
require "config.php";

$DltId= $_GET['dltID'];
$dltSQL= "DELETE FROM `songtbl` WHERE audio_id= $DltId";

$res=mysqli_query($conn, $dltSQL);
echo"
<script>
    alert('Song Deleted');
    window.location.href='songlist.php';
    </script>

";

?>