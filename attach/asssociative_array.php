<?php
$ass=Array("Apple"=>"Red","Grape"=>"Green","Pineapple"=>"Yellow","Watermelon"=>"black");

echo ("Showing the list: "."<br>");
echo ($ass["Apple"]."<br>");
echo ($ass["Grape"]."<br>");
echo ($ass["Pineapple"]."<br>");

echo ("Showing the list using foreach loop: "."<br>");
foreach($ass as $val)
{
	echo ($val."<br>");
}
?>