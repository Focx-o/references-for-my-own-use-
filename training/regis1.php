
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
?>
<form method="post" action="">
Registration form<br>
fname:<input type="text" name="fname" /><br>
lname:<input type="text" name="lname" /><br>
age:<input type="text" name="age"/><br>
email:<input type="text" name="mail"/><br>
password:<input type="text" name="pass"/><br>
<input name="submit" type="submit" value="registration" />
</form>


</body>
</html>
<?php
if(isset($_POST['registration']))
{
$name=$_POST['fname'];
echo $lname;
$age=$_POST['age'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$a=mysql_query("INSERT INTO as(fname,lname,age,email,password) VALUES('$fname','$lname','$age','$email','$pass');");
header("Location: view.php");
}
?>