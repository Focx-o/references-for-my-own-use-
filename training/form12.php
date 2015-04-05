<?php 
$con=mysql_connect( "localhost","root","");
mysql_select_db ("goll",$con);
if(@$_POST ['submit'])
{
$name=$_POST['nname'];
$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath,mail,address, 'image/'.$name1))//image is a folder in which you will save image
{
$query="insert into tbl_image(uname,photo) values('$uname','$name1')";
mysql_query ($query) or die ('could not updated:'.mysql_error());

}
}
}
?>

<html>
<body>
<form name="form" action="" method="post" enctype="multipart/form-data">
NAME: <input type="text" name="nname" id="nname"/>
MAIL: <input type="text" name="email"/>
ADD: <input type="text" name="address"/>
PHOTO:<input type="file" name="file" />
<input type="submit" name="submit" value="submit" /> 
</form>
<a href="http://localhost/training/goll.php">VIEW RECORDS</a>
</body>
</html>