<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<?php require('include1.php');?>
<title>Edit Records</title>
</head>
<body>
<?php  
if (isset($_POST['submit']))
{
$id=$_POST['hidid'];
$sname = $_POST['sname'];
$smarks = $_POST['smarks'];
mysql_query("UPDATE regis_stu SET sname='$sname', smarks='$smarks' where ID='$id'")
or die(mysql_error());
header("Location: view.php");
}
$a=mysql_query("SELECT * FROM regis_stu where ID='$_GET[id]'");
$ra=mysql_fetch_array($a);
?>
<form action="" method="post">

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="sname" value="<?php echo $ra['sname']; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>marks<em>*</em></font></b></td>
<td><label>
<input type="text" name="smarks" value="<?php echo $ra['smarks']; ?>" />
<input type="hidden" name="hidid" value="<?php echo $_GET['id'];?>">
</label></td>
</tr>
<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>