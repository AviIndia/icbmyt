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
	  <table class="table table-bordered table-hover table-striped" border="2"  style="font-family:Verdana; width:950px; font-size:13px; text-align:justify; ">
	 
	  <tr>
	  <img src="assets/img/reg.jpg" />
	  </tr>
	   <h1></h1>
	
	  <?php
	  include'config.php';
	 
	  $rno=$_POST['txt15'];
	  $year=$_POST['txt16'];
	  $sql=mysql_query("select * from CERTIFICATE where reg='".$rno."' and year='".$year."'  ");
	  $rs=mysql_fetch_array($sql);
	
	  $reg=$rs['reg'];
	 
	  $name=$rs['name'];
	   $yr=$rs['year'];
	 
	  
	  
	  
	  
	  ?>
	  
	  
	
	 
	   
	   
		
   
<tbody>
			<tr>
		
			<td style="font-size:25px; font-family:Lucida Calligraphy; color: #000">Shri/Smt___________<strong><?php echo $name; ?></strong>___________having complted the curriculam of theoretical study and obtained the diploma of bio chemic medicine in this council having
			benn sucessful at the final / compermental examination held in the yer of ____<strong><?php echo $yr; ?>____</strong>.He / She Upon whoom the diploma has been duly conferred is hereby declared 
			competent and authorised to practise Bio Chemic Medicine.<br /><br />
			Certificate No.- <strong><?php echo $reg; ?></strong>
			 </td>
			
			
	</tr>
    </tbody>		
	
</table>
</center>
</body>
</html>
