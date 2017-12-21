<?php
session_start();
?>
<?php
$host="localhost";
$dbuser="root";
$password="";
$dbname="project";
$tname="user";
$user=$_POST['username'];
$pword=$_POST['password'];
mysql_connect($host,$dbuser,$password) or die ("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname) or die ("เลือกฐานข้อมูลไม่ได้");
$sql="select * from ".$tname." where username='".$user."' and password='".$pword."'";
$dbquery = mysql_db_query($dbname,$sql);
$Check= mysql_fetch_array($dbquery);

if(!$Check)
{
    echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    echo "<meta http-equiv=refresh content=3;URL=register.php>";
}
else
{
    $_SESSION["status"] = $Check["status"];
    $_SESSION["name"] = $Check["nameu"];
    $_SESSION["status"] = $Check["status"];

    if($Check["status"] == "user")
    {
        header("location:user/index.php");
    }
    elseif ($Check["status"] == "admin"){
        header("location:admin/index.php");
    }
    else
    {
        header("location:index.php");
    }
}
mysql_close();
?>
</body>
</html>
