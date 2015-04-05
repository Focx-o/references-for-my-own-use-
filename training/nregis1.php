<?php
include('include.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form method="post" action="">
Registration  form<br>
email:<input type="text" name="mail"/><br>
password:<input type="password" name="pass"/><br>
<input name="submit" type="submit" value="register" />
</form>


</body>
</html>
<?php

if(isset($_POST['submit']))
{

$email=$_POST['mail'];
$pass=$_POST['pass'];
$a="INSERT INTO regis_user(mail,password) VALUES('$email','$pass')";
header("Location: login.php");
}
?>