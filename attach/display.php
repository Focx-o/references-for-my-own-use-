<?php
include "connection.php";


if($_REQUEST['mode']=="del")
{
mysql_query("delete from student where roll=$_GET[roll]");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form action="" method="post">
<table width="658" border="1" align="center">
  <tr bordercolor="#0000FF">
    <td colspan="7"><div align="center" class="style1">Display Data</div></td>
    </tr>
  <tr bordercolor="#0000FF">
    <td colspan="2"><a href="input.php">Add new</a></td>
    <td colspan="5"><font color="#FF0000">
	<?php
	$flag=$_GET['m'];
	
	if($flag==1)
	{
	echo "Data inserted successfully.";
	}
	if($flag==2)
	{
	echo "Data Deleted successfully.";
	}
	if($flag==3)
	{
	echo "Data Updated successfully.";
	}
	?>
	
	</font>
	</td>
    </tr>
  <tr bordercolor="#0000FF">
  <td width="52"> Sl No.</td>
    <td width="95"><div align="center">Roll</div></td>
    <td width="204"><div align="center">Name</div></td>
    <td width="62"><div align="center">Age</div></td>
    <td width="74"><div align="center">Marks</div></td>
    <td width="53"><div align="center">Del</div></td>
    <td width="72"><div align="center">Edit</div></td>
  </tr>
   <?php
   $x=1;
  $sql="select * from student";
  $sql_query=mysql_query($sql);
  while($row=mysql_fetch_array($sql_query))
  {
  ?>
  <tr bordercolor="#0000FF" align="center">
  <td> <?php echo $x++;?> </td>
    <td><?php echo $row['Roll'];?></td>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Age'];?></td>
    <td><?php echo $row['Marks'];?></td>
    <td><a href="display.php?mode=del&roll=<?php echo $row[0];?>&m=2"><img src="image/b_drop.png" border="0" alt="Delete" title="Delete"></a></td>
    <td><a href="edit.php?roll=<?php echo $row[0];?>"><img src="image/b_edit.png"  border="0" alt="Edit" title="Edit"/></a></td>
  </tr>
  <?php
  }
  ?>
</table>





</form>
</body>
</html>
