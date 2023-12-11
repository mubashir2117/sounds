<?php 
require "config.php";

$vidId= $_GET['dltID'];
$dltSQL= "DELETE FROM `video` WHERE video_id= $vidId";

$res=mysqli_query($conn, $dltSQL);
echo"
<script>
    alert('Video Deleted');
    window.location.href='VideoList.php';
    </script>

";

?>