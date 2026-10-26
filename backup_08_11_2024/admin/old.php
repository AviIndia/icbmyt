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
$folder="1ST_YEAR_MARKSHEET_EXCEL/";
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
			$sql="SELECT * FROM one_year where REG='".$xls->val($row,1)."'";
				
			 $num_rows=mysql_num_rows(mysql_query($sql));
			
		echo "Reading & inserting Marksheet details now......<br/>";
				
				
				if($num_rows==0)
				{
					
				
				$strsql="insert into one_year(reg,roll,no,name,gname,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,remark,year) values (";			
				
						$strsql=$strsql."'".mysql_real_escape_string($xls->val($row,1))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,2))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,3))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,4))."'";
						
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,5))."'";
						
						$strsql=$strsql."'".mysql_real_escape_string($xls->val($row,6))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,7))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,8))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,9))."'";
						
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,10))."'";
						
						$strsql=$strsql."'".mysql_real_escape_string($xls->val($row,11))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,12))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,13))."'";
					
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,14))."'";
						
						$strsql=$strsql.",'".mysql_real_escape_string($xls->val($row,15))."'";
					
					
					
				
			$strsql=$strsql.")";
		   
			mysql_query($strsql)or die('Error1: '.mysql_error());
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