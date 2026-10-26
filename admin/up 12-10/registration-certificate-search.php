<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRATION CERTIFICATE</title>
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
	  <table class="table table-bordered table-hover table-striped" border="2"  style="font-family:Verdana; width:950px; font-size:13px; text-align:justify; ">
	 
	  <tr>
	  <img src="assets/img/reg.jpg" />
	  </tr>
	   <h1></h1>
	
	  <?php
	  include'config.php';
	 
	  $rno=$_POST['txt11'];
	  $year=$_POST['txt12'];
	  $sql=mysql_query("select * from registration where reg='".$rno."'  ");
	  $rs=mysql_fetch_array($sql);
	
	  $reg1=$rs['reg'];
	 
	  $name=$rs['name'];
	  
	  $degree=$rs['degree'];
	  $pos=$rs['position'];
	  $year=$rs['year'];
	  
	  
	  
	  ?>
	  
	  
	  <tr> <h4> Registration No : <?php echo $reg1;?>  </h4></tr>
	 
	   
	   
		
   <thead>
			<tr>
				<th>NAME</th>
				<th>DEGREE </th>
				<th>POSITION</th>
				<th>YEAR</th>
				
				            </tr>
                                            </thead>
<tbody>
			<tr>
		
			<td><?php echo $name;?></td>
			<td><?php echo $degree;?></td>
			<td><?php echo $pos;?></td>
			<td><?php echo $year;?></td>
			
	</tr>
    </tbody>		
	
</table>
</center>
</body>
</html>
