<?php
$dbname="elearn";
$con=mysql_connect("localhost","root","")or die("not connected");
if(!mysql_select_db($dbname,$con))
{
echo "database is not selected";
}
?>