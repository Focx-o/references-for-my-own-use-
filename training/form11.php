<?php 
$con=mysql_connect( "localhost","root","");
mysql_select_db ("ABC",$con);
if(@$_POST ['submit'])
{
$uname=$_POST['nname'];
$address=$_file['text']
$file '];= $_file ['file
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath,address, 'image/'.$name1))//image is a folder in which you will save image
{
$query="insert into tbl_image(uname,photo,address) values('$uname','$name1')";
mysql_query ($query) or die ('could not updated:'.mysql_error());

}
}
}
?>

<html>
<body>
<form name="form" action="" method="post" enctype="multipart/form-data">
NAME: <input type="text" name="nname" id="nname"/>
PHOTO:<input type="file" name="file" />
ADDRESS:<input type="text" name="name" />

<input type="submit" name="submit" value="submit" /> 
</form>
<a href="http://localhost/training/table.php">VIEW RECORDS</a>
</body>
</html>