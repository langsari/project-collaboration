<?php
$sql = mysql_connect("localhost","root","");
if(!$sql)
{
	echo "Connection Not Created";
}
$con = mysql_select_db("itpromo_track");
if(!$sql)
{
	echo "Database Not Connected";
}

?>