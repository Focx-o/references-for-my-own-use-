<?php

$num=8;
$flag=0;
for($i=2;$i<=$num/2;$i++)
{
	if($num%$i==0)
	{
		$flag=1;
		break;
	}
}
if($flag==1)
{
	echo ($num." is not prime");
}
else
{
	echo ($num." is prime");
}
?>
