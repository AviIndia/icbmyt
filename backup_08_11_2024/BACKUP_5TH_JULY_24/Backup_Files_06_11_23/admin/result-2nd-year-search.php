<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>2ND YEAR MARKSHEET</title>
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
	  <table class="table table-bordered table-hover table-striped" style="font-family:Verdana; width:1000px; font-size:13px; text-align:justify; ">
	  <tr>
	  <h1>Indian Council of Bio Chemic Medicine and Yoga Therapy</h1>
	  </tr>
	  <tr>
	<h3>Naihati North 24 Pargana West Bengal</h3>
	  
	  </tr>
	  <tr>
	  <img src="assets/img/logo.jpg" width="100" height="100">
	  </tr>
	  <tr>
	  <h2>2nd D.B.M.S Marksheet</h2>
	  </tr>
	  <?php
	  include'config.php';
	  $roll=$_POST['txt4'];
	  $no=$_POST['txt5'];
	  $reg=$_POST['txt6'];
	  $sql=mysqli_query($con,"select * from two_year where roll='".$roll."' and no='".$no."' and reg='".$reg."' ");
	  $rs=mysqli_fetch_array($sql);
	  $reg=$rs['reg'];
	  $roll=$rs['roll'];
	  $no=$rs['no'];
	  $name=$rs['name'];
	   $gname=$rs['gname'];
	  $sub1=$rs['sub1'];
	  $sub2=$rs['sub2'];
	  $sub3=$rs['sub3'];
	  $sub4=$rs['sub4'];
	  $sub5=$rs['sub5'];
	  $sub6=$rs['sub6'];
	  $sub7=$rs['sub7'];
	  $sub8=$rs['sub8'];
	  $total=$rs['total'];
	  $remark=$rs['remark'];
	  $year=$rs['year'];
	  
	  
	  ?>
	  
	  
	  <tr> <h4> Student Name : <?php echo $name;?>  </h4></tr>
	  <tr><h4>  Son/Daughter/Wife of: <?php echo $gname;?></h4></tr><br>
	   <tr> <h4> </h4></tr>
	   
		<tr><h4>Roll:__ <?php echo $roll;?>___   No.___<?php echo $no;?>___  Registration No.___<?php echo $reg;?>___</tr>
	 <tr><h4>Year- __<?php echo $year;?>__</h4></tr>

   <thead>
			<tr>
				<th>SUBJECTS</th>
				 <th>BIO </th>
				<th>HOMEO </th>
				<th>ORGANON</th>
				<th>ANATOMY</th>
				<th>PHYSIOLOGY</th>
				<th>PATHOLOGY</th>
				<th>GYNECOLOGY</th>
				<th>OBSTRETRICS</th>
				<th>REMARK</th>
				            </tr>
                                            </thead>

		

		

		 <tbody>
			<tr>
			<td>MARKS OBTAINED</td>
			<td><?php echo $sub1;?></td>
			<td><?php echo $sub2;?></td>
			<td><?php echo $sub3;?></td>
			<td><?php echo $sub4;?></td>
			<td><?php echo $sub5;?></td>
			<td><?php echo $sub6;?></td>
			<td><?php echo $sub7;?></td>
			<td><?php echo $sub8;?></td>
			<td><?php echo $remark;?></td>
	</tr>
    </tbody>		
	
</table>
</center>
</body>
</html>
