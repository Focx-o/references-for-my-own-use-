<?php
$con=mysql_connect( "localhost","root","");
mysql_select_db ("ABC",$con);

if (isset($_GET['id']))
{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM tbl_image WHERE id=$id")
or die(mysql_error());

header("Location: table.php");
}
else

{
header("Location: table.php");
}
?>