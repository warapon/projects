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
    echo "<meta http-equiv=refresh content=0;URL=login.php?err=err1001>";
}
else
{
	$_SESSION["id"] = $Check["userid"];
    $_SESSION["status"] = $Check["status"];
    $_SESSION["name"] = $Check["nameu"];
    $_SESSION["level"] = $Check["level"];

    if($Check["status"] == "user")
    {
        header("location:user/index.php");
    }
    elseif ($Check["status"] == "admin"){
        header("location:manager/index.php");
    }
    else
    {
        header("location:login.php?err=err1001");
    }
}
mysql_close();
?>
</body>
</html>
