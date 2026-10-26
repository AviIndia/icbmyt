<?php
include 'config.php';
$sql=mysqli_query($con,"TRUNCATE TABLE registration");
header("location:registration-certificate-insert.php");
?>
