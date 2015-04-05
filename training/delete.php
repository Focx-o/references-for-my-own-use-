<?php
include('include.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM regis_stu WHERE ID=$id");

header("Location: view.php");
}
else

{
header("Location: view.php");
}
?>