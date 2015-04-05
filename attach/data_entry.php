<?php
include "connection.php";

if($_REQUEST['cmclick'])
{
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$phno=$_REQUEST['phno'];
$age=$_REQUEST['age'];

$day=$_REQUEST['day'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];

$sex=$_REQUEST['sex'];
$quali=$_REQUEST['quali'];

$cricket=$_REQUEST['cricket'];
$net=$_REQUEST['net'];
$computer=$_REQUEST['computer'];
$book=$_REQUEST['book'];

$d_o_b=$day."/".$month."/".$year;

if($cricket=="")
{
$cricket="N";
}


mysql_query("insert into Stu_data(name,address,phno,age,d_o_b,sex,quali,cricket,net,computer,book) values('$name','$address','$phno','$age','$d_o_b','$sex','$quali','$cricket','$net','$computer','$book')");

header("location:data_display.php?m=1");
}
?>
<html>
<head>
<title>Data Entry Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="40%" border="1" align="center">
  <form method="post">
    <tr bgcolor="#FF99FF"> 
      
      <td colspan="2"><div align="center"><strong>Data Entry Form</strong></div></td>
    </tr>
	 <?php
	if($err!="")
	{
	?>
    <?php
	}
	?>
    <tr> 
      <td width="29%">Enter Name</td>
      <td width="71%"><input type="text" name="name" ></td>
    </tr>
    <tr> 
      <td>Address</td>
      <td><textarea name="address" cols="40" rows="4" id="address"></textarea></td>
    </tr>
    <tr> 
      <td>Phone no</td>
      <td><input type="text" name="phno" ></td>
    </tr>
    <tr> 
      <td>Age</td>
      <td><input type="text" name="age" ></td>
    </tr>
    <tr> 
      <td>Data of Birth</td>
      <td><select name="day">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
		  <option value="11">11</option>
		  <option value="12">12</option>
        </select>
        / 
        <select name="month">
          <option value="jan">jan</option>
          <option value="feb">feb</option>
          <option value="march">march</option>
          <option value="april">april</option>
          <option value="may">may</option>
          <option value="june">june</option>
          <option value="july">july</option>
          <option value="august">august</option>
        </select>
        / 
        <select name="year">
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
        </select></td>
    </tr>
    <tr> 
      <td>Sex</td>
      <td>Boy 
        <input type="radio" name="sex" value="m">
        Girl 
        <input type="radio" name="sex" value="f"></td>
    </tr>
    <tr> 
      <td>Heighest Qualification</td>
      <td><select name="quali">
          <option value="mp">MP</option>
          <option value="hs">HS</option>
          <option value="bsc">BSc</option>
          <option value="msc">MSC</option>
        </select></td>
    </tr>
    <tr> 
      <td>Hobbies</td>
      <td>cricket 
	  
        <input type="checkbox" name="cricket" value="y">
        net 
        <input type="checkbox" name="net" value="y">
        computer 
        <input type="checkbox" name="computer" value="y">
        book 
        <input type="checkbox" name="book" value="y"></td>
    </tr>
	<tr> 
      <td>Upload CV </td>
      <td>&nbsp;</td>
	</tr>
    <tr> 
      <td>&nbsp;</td>
      <td> <input type="submit" name="cmclick" value="OK"> </td>
    </tr>
  </form>
</table>

</body>
</html>
