<?php
include 'config.php';
$name=$_POST["a1"];
$mail=$_POST["a2"];
$mob=$_POST["a3"];
$msg=$_POST["a4"];
date_default_timezone_set('Asia/Calcutta');
$date=date("d-m-Y");

$sql=mysqli_query($con,"insert into contact(`name`,`email`,`phone`,`msg`,`date`)values('".$name."','".$mail."','".$mob."','".$msg."','".$date."')");
?>
<script>
alert("Thnks for share your information");
window.location="../index.php";
</script>