
<?php
$host="localhost";
$user="root";
$password="1234";
$dbname="project";
$connect=mysql_connect($host,$user,$password);
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname) or die ("เลือกฐานข้อมูลไม่ได้");
?>
