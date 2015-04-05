
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>view record</title>
</head>
<body>
<?php

$con=mysql_connect( "localhost","root","");
mysql_select_db ("ABC",$con);

$result = mysql_query("SELECT * FROM tbl_image")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>Image</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>
</tr>";

while($row = mysql_fetch_array( $result ))
{
$image=$row ['photo'];
echo "<tr>";
echo '<td><b><font color="#663300">' . $row['uname'] . '</font></b></td>';
echo '<td><b><font color="#663300"><img src="image/'.$image.' " width="150" height="150"> </font></b></td>';
echo '<td><b><font color="#663300"><a href="edit2.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="delete2.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<a href="http://localhost/training/form10.php">INSERT NEW RECORDS</a>
</body>
</html>