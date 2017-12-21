
<?php
$host="localhost";
$user="root";
$password="";
$dbname="project";
$link=mysql_connect($host,$user,$password);
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname) or die ("เลือกฐานข้อมูลไม่ได้");
?>