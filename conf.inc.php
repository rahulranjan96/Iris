<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_database='a_database';
$conn_error='not connected';
 if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_database))
	 die($conn_error);
?>