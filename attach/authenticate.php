<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FORM</title>
<?php
$name="";
$pass="";
if(isset($_REQUEST['submit']))
{
	$name=$_GET['name'];
	$pass=$_GET['pass'];
	echo ("Your user name is ".$name."<br>");
	echo ("Your password is: ".$pass);
}
?>
</head>

<body bgcolor="#00CCFF">
<table width="80%" border="2" cellpadding="1" cellspacing="1">



<tr>
<td width="15"><br></td>
<td width="85"><br></td>
</tr>



<body bgcolor="#00CCFF">
<table width="80%" border="2" cellpadding="1" cellspacing="1">

<tr>
<td width="15"><br></td>
<td width="85"><br></td>
</tr>

first Name:
<input name="name" type="text" size="50" />

<br /> <br /> 
last name:
<input name="name" type="text" size="50" />
<br><br><br>
Password:
<input name="pass" type="password" size="50" />
<br /> <br />
email id:
<input name="name" type="email id" size="50" />
<br><br><br> 
<td>select option</td>
<td>
<p> 
<lebel>
<input name="checkbox" type="checkbox" value="cricket player" cricket</lebel><br>
<input name="checkbox" type="checkbox" value="avg" avg</lebel>
<from action "method"="post" >
<select name="test[]">
<option value="45">45</optoin>
<option value="45">46</optoin>
<option value="45">47</optoin>
<option value="45">48</optoin>
<option value="45">49</optoin>
<option value="45">50</optoin>

<br>

<input name="checkbox" type="checkbox" value="total score" tital scoret</lebel><br>
<select name="test[]">
<option value="10000">10000</optoin>
<option value="11000">11000</optoin>
<option value="12000">12000</optoin>
<option value="13000">13000</optoin>
<option value="14000">14000</optoin>
<option value="15000">15000</optoin>
<input name="checkbox" type="checkbox" value="higst score" higst score</lebel><br>
<select name="test[]">
<option value="181">181</optoin>
<option value="182">182</optoin>
<option value="183">183</optoin>
<option value="184">184</optoin>
<option value="185">185</optoin>
<option value="186">186</optoin>
<input name="checkbox" type="checkbox" value="cricket player" cricket</lebel><br>
<input name="checkbox" type="checkbox" value="cricket player" cricket</lebel><br>
<input name="radio" type="radio" value="cricket player" cricket</lebel><br>
<input name="radio" type="radio" value="cricket player" cricket</lebel><br>

<center>
<form action="" method="get" name="form1">
<h1> WELCOME TO REGISTRATION PAGE </h1>
<br /> <br /> <br /> <br /> 
<hr color="#330000" size="3" />
<br /> <br /> <br /> <br /> 


<input name="submit" type="submit" value="Log In" />
<input name="reset" type="reset" value="Reset" />
</form>
</center>
</body>
</html>