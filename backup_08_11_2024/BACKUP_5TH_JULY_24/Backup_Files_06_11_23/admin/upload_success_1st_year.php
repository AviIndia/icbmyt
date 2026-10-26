<html>
<head> 
<title> Reading and Insering</title>
</head>
</html>



<?php 
include("config.php");
if(isset($_FILES['file']))
{
$name=$_FILES['file']['name'];
$name=date("h_i_s__d_m_Y_").$name;
$tmp_name=$_FILES['file']['tmp_name'];
$folder="excel_upload/";
$path=$folder.$name;
$type_ar=explode('/',$_FILES['file']['type']);
$type=$type_ar[1];
if($type=='vnd.ms-excel')
{
if(move_uploaded_file($tmp_name,$path))
{
require_once 'excel_reader2.php';
$xls = new Spreadsheet_Excel_Reader($path);
echo '<br/><h1>Excel file reading starting.......</h1><br/>';
 echo "Row 1 is escaped as it contains titles<br/>";     
	for($row=2;$row<=$xls->rowcount();$row++)
	{
		echo "<br/><b>READING ROW ".$row." Now......</b><br/>";
	  			
		if(($xls->val($row,1) != ""))
		{
			$sql="SELECT * FROM students where reg='".$xls->val($row,1)."'";
				
			 $num_rows=mysqli_num_rows(mysql_query($con,$sql));
			
		echo "Reading & inserting patient details now......<br/>";
				
				
				if($num_rows==0)
				{
					
				
				$strsql="insert into students(reg,roll,no,name,gname,sub1) values (";			
				
						$strsql=$strsql."'".mysqli_real_escape_string($con,$xls->val($row,1))."'";
					
						$strsql=$strsql.",'".mysqli_real_escape_string($con,$xls->val($row,2))."'";
					
						$strsql=$strsql.",'".mysqli_real_escape_string($con,$xls->val($row,3))."'";
					
						$strsql=$strsql.",'".mysqli_real_escape_string($con,$xls->val($row,4))."'";
						
						$strsql=$strsql.",'".mysqli_real_escape_string($con,$xls->val($row,5))."'";
						
						$strsql=$strsql."'".mysqli_real_escape_string($con,$xls->val($row,6))."'";
					
						
				
			$strsql=$strsql.")";
		   
			mysqli_query($con,$strsql)or die('Error1: '.mysqli_error());
			echo "Patient Details Successfully Inserted..................<br/>";
			}
			
			}
			}
			}
			}
			}
			
			
			
			
			
			
			
	
		
				
			


?>
<button id='btn' onclick="clicked_then()">Go back to previous page</button>
<script type='text/javascript'>
function clicked_then()
{
	window.location.href='upload_excel.php';
}
</script>