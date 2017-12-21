<? 
include 'connect.php';

if(!empty($_GET["id"])){
 mysql_query("UPDATE apartment SET apstatus = 'อนุมัติ' WHERE apid='".$_GET["id"]."'",$connect);
 echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
}
else if(!empty($_GET["ids"])){
mysql_query("UPDATE apartment SET apstatus = 'ไม่อนุมัติ' WHERE apid='".$_GET["ids"]."'",$connect);
echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
}
?>

