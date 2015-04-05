<?php
include "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="938" border="1" align="center">
  <tr>
    <td colspan="12"><div align="center"><strong>Display Data</strong></div></td>
  </tr>
  <tr>
    <td colspan="5"> <a href="data_entry.php">Add New</a> </td>
    <td colspan="7" >
	<?php
	$flag=$_GET['m'];
	
	if($flag==1)
	{
	echo "Data inserted successfully.";
	}
	
	?>
	
	</td>
  </tr>
  <tr>
    <td width="39"><div align="center"><strong>Roll</strong></div></td>
    <td width="174"><div align="center"><strong>Name</strong></div></td>
    <td width="82"><div align="center"><strong>Address</strong></div></td>
    <td width="48"><div align="center"><strong>Age</strong></div></td>
    <td width="67"><div align="center"><strong>Phone No.</strong></div></td>
    <td width="54"><div align="center"><strong>sex</strong></div></td>
    <td width="58"><div align="center"><strong>D_O_b</strong></div></td>
    <td width="85"><div align="center"><strong>Qualification</strong></div></td>
    <td width="72"><div align="center"><strong>Cricket</strong></div></td>
    <td width="62"><div align="center"><strong>Net</strong></div></td>
    <td width="67"><div align="center"><strong>Computer</strong></div></td>
    <td width="54"><div align="center"><strong>Book</strong></div></td>
  </tr>
  <?php
  $sql="select * from stu_data";
  $sql_query=mysql_query($sql);
  while($row=mysql_fetch_array($sql_query))
  {
  
  ?>
  <tr>
    <td><div align="center"><?php echo $row['roll'];?></div></td>
    <td><div align="center"><?php echo $row['name'];?></div></td>
    <td><div align="center"><?php echo $row['address'];?></div></td>
    <td><div align="center"><?php echo $row['age'];?></div></td>
    <td><div align="center"><?php echo $row['phno'];?></div></td>
	
    <td><div align="center">
	<?php 
	if($row['sex']=='m')
	{
	echo "Male";
	}
	else
	{
	echo "Female";
	}
		?>
	</div>
	</td>
	
    <td><div align="center"><?php echo $row['d_o_b'];?></div></td>
    <td><div align="center"><?php echo $row['quali'];?></div></td>
    <td><div align="center"><?php echo $row['cricket'];?></div></td>
    <td><div align="center"><?php echo $row['net'];?></div></td>
    <td><div align="center"><?php echo $row['computer'];?></div></td>
    <td><div align="center"><?php echo $row['book'];?></div></td>
  </tr>
  <?php
  }
  ?>
</table>

</body>
</html>
