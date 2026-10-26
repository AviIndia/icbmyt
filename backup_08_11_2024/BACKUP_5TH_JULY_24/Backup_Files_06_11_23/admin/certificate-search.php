<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> CERTIFICATE</title>
<link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
     <!-- Page Level CSS -->
    <link href="assets/plugins/timeline/timeline.css" rel="stylesheet" />
	
	

</head>
	 
	<body>
	<center> 
	  <table class="table table-bordered table-hover table-striped" border="2"  style="font-family:Verdana; width:950px; font-size:13px;  ">
	 
	  <tr>
	  <img src="assets/img/reg.jpg" style="margin-top:100px;" />
	  </tr>
	   <h1></h1>
	
	   <?php
	  include'config.php';
	 
	  $rno=$_POST['txt15'];
	  $year=$_POST['txt16'];
	$sql=mysqli_query($con,"select * from certificate where reg='".$rno."' and year='".$year."'  ");
	  $rs=mysqli_fetch_array($sql);
	
	  $reg1=$rs['reg'];
	 
	  $name=$rs['name'];
	  
	  $degree=$rs['degree'];
	  $pos=$rs['position'];
	  $year=$rs['year'];
	  
	  
	  
	  ?>
	  
	
	 
	   
	   
		<tbody>
			<tr>
		
			<td style="font-size:20px; font-family:Lucida Calligraphy;text-align:justify; color: #000">This is to certify that Shri/Smt_______<strong><?php echo $name; ?></strong>_______
			having completed the curriculum of Theoretical study and obtained the Diploma of Bio-Chemic Medicine in the council having been successful at the Final/ Compartmental Examination held in the year ____<strong><?php echo $year; ?>____</strong>.
			He/She upon whom the Diploma has been duly conferred is hereby declared competent and authorised to practice Bio-Chemic Medicine.<br /><br />
			Diploma No.- <strong><?php echo $reg1; ?></strong>
			 </td>
			
			
	</tr>
    </tbody>			
	
</table>
</center>
</body>
</html>