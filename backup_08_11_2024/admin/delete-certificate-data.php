<?php
include 'config.php';
$sql=mysqli_query($con,"TRUNCATE TABLE certificate");
header("location:certificate-insert.php");
?>
