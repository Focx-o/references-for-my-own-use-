<?php

$str="madam";
$flag=0;

for($i=0,$j=(strlen($str)-1);$i<=$j;
$i++,$j--)
{
	if($str[$i]!=$str[$j])
	{
		$flag=1;
		break;
	}
}
if($flag)
{
	echo ($str."  is not a pallindrom");
}
else
{
	echo ($str."  is a pallindrom");
}
?>