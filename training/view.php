
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>view record</title>
</head>
<body>
<?php

include('include.php');

$result = mysql_query("SELECT * FROM regis_stu")
or die(mysql_error());

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>marks</font></th>
<th><font color='Red'>Edit</font></th>
<th><font color='Red'>Delete</font></th>
</tr>";

while($row = mysql_fetch_array( $result ))
{

echo "<tr>";
echo '<td><b><font color="#663300">' . $row['sname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['smarks'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['ID'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['ID'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<p><a href="marks.php">Insert new record</a></p>
<a href="logout.php">logout</a>
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
