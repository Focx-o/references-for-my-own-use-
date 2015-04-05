<?php
////////////////////////////// database Connectivity ///////////////////////////////

$link=mysql_connect('localhost','root','');

if(!$link)
{
	die('Error Connecting to Server. '.mysql_error());
}

$select_db=mysql_select_db('demo',$link);

if(!$select_db)
{
	die('Error Connecting to Database'.mysql_error());
}


?>