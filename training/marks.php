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
enter info<br>
sname:<input type="text" name="sname"/><br>
smarks:<input type="smarks" name="smarks"/><br>
<input name="submit" type="submit" value="submit" /><br>
</form>
<a href="http://localhost/training/view.php">View results</a>

</body>
</html>
<?php

if(isset($_POST['submit']))
{

$sname=$_POST['sname'];
$smarks=$_POST['smarks'];
$a=mysql_query("INSERT INTO regis_stu(sname,smarks) VALUES('$sname','$smarks');");
header("Location: marks.php");
}
?>