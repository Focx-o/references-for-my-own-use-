<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>view record</title>
</head>
<body>
<?php 
$con=mysql_connect( "localhost","root","");
mysql_select_db ("ABC",$con);
if($_POST ['submit'])
{
$id=$_POST['hidid'];
$uname=$_POST['nname'];
$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'image/'.$name1))//image is a folder in which you will save image
{
$query="UPDATE tbl_image set uname='$uname',photo='$name1' where id='$id'";
mysql_query ($query) or die ('could not updated:'.mysql_error());
header('location:table.php');
}
}
$a=mysql_query("SELECT * FROM tbl_image where id='$_GET[id]'");
$ra=mysql_fetch_array($a);
}
?>
<form name="form" action="" method="post" enctype="multipart/form-data">
NAME: <input type="text" name="nname" id="nname" value="<?php echo $ra['uname']; ?>"/>
<input type="hidden" name="hidid" value="<?php echo $_GET['id'];?>">
PHOTO:<input type="file" name="file" />
<input type="submit" name="submit" value="submit" /> 
</form>
</body>
</html>
