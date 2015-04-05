<?php

include "connection.php";

$err[]="";
///////////////////// display data ////////////
//if(!$_REQUEST['Submit'])
	//{
		//echo "select * from student where roll=$_GET[roll]";
		$sql_qry=mysql_query("select * from student where roll=$_GET[roll]");
		$row_val=mysql_fetch_array($sql_qry);
		
		$_POST['roll']=$row_val[Roll];
		$_POST['name']=$row_val[Name];
		
		$_POST['marks']=$row_val[Marks];
	//}

////////////////////////////////////////////
if($_REQUEST["Submit"])
{
$roll=$_REQUEST["roll"];
$name=$_REQUEST["name"];

$marks=$_REQUEST["marks"];

if($roll>0)
{
mysql_query("update student set Roll='$roll',Name='$name',Marks='$marks' where Roll=$_GET[roll]");

header("location:display.php?m=3");
}
else
{
$err[]="Please specify Roll.";
}

}

if($_REQUEST["refresh"])
{
//roll="";




}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<form method="post">
<table width="267" border="1" align="center">
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td colspan="2"><div align="center"><strong>Input Data</strong></div></td>
    </tr>
	<tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td colspan="2"><div align="right"><?php foreach($err as $val) echo $val."<br>"; ?></div></td>
    </tr>
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td width="92">Enter Roll </td>
    <td width="159">
      <input type="text" name="roll" value="<?php echo $_POST['roll']; ?>"/>
      <span class="style1">*</span>    </td>
  </tr>
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td>Enter Name </td>
    <td><input name="name" type="text" value="<?php echo $_POST['name']; ?>"/></td>
  </tr>

    
    
  
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td>Enter Marks </td>
    <td><input name="marks" type="text" value="<?php echo $_POST['marks']; ?>" /></td>
  </tr>
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td colspan="2"><div align="center">
      <input name="Submit" type="submit" value="Submit" />
	  <input name="refresh" type="submit" value="Clear" />
    </div></td>
    </tr>
</table>

</form>
</body>
</html>
