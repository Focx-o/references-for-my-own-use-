<?php

include "connection.php";

$err[]="";

if($_REQUEST["Submit"])
{
$roll=$_REQUEST["roll"];
$name=$_REQUEST["name"];
$age=$_REQUEST["age"];
$marks=$_REQUEST["marks"];

if($roll>0)
{
mysql_query("insert into student(Roll,Name,Age,Marks) values('$roll','$name','$age','$marks')");

header("location:display.php?m=1");
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
      <input type="text" name="roll" />
      <span class="style1">*</span>    </td>
  </tr>
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td>Enter Name </td>
    <td><input name="name" type="text" /></td>
  </tr>
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td>Enter Age </td>
    <td><input name="age" type="text" /></td>
  </tr>
  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
    <td>Enter Marks </td>
    <td><input name="marks" type="text" /></td>
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
