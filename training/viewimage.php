<?php   
$con=mysql_connect ("localhost","root","");
mysql_select_db("abc",$con);
@$sql="select * from tbl_image where id='1' and status='0'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
 @$image=$row ['photo'];
 ?>
<img src="image/<?php echo $image; ?>" width="250" height="275">
<?php
}
echo "<a href='http://localhost/training/image.php'>BACK</a>";

?>