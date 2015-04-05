
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
<h>student form</h><br>
<input name="submit" type="submit" value="registration" /><br>
<input name="submit" type="submit" value="Log In" />

</form>


</body>
</html>
<?php
if(isset($_POST['resistration']))
{
$registration=$_POST['regis'];
echo $regis;
$login=$_POST['login'];
$registration=$_POST['regis'];
header("Location: view.php");
}
?>