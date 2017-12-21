<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SURAT APARTMENT ONLINE | เข้าสู่ระบบ/สมัครสมาชิก</title>
        <meta name="description" content="kamonrat">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
<body>
<?php 
$host="localhost";
$dbuser="root";
$password="";
$dbname="project";
$tname="user";
mysql_connect($host,$dbuser,$password) or die ("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname) or die ("เลือกฐานข้อมูลไม่ได้");
$user=$_POST['username'];
$pw=$_POST['password'];
$repw=$_POST['repassword'];
$name=$_POST['nameu'];
$email=$_POST['emailu'];
mysql_query("SET NAMES UTF8");
if(trim($_POST ['username']) == "")
{
echo "<center><b><font size='+4' color='red'>กรุณากรอกข้อมูลให้ถูกต้องและครบถ้วน!</font></b></center>";     
echo "<meta http-equiv=refresh content=3;URL=register.php>";
exit();
}
else if(trim($_POST ['nameu']) == "")
{
echo "<center><b><font size='+4' color='red'>กรุณากรอกข้อมูลให้ถูกต้องและครบถ้วน!</font></b></center>";     
echo "<meta http-equiv=refresh content=3;URL=register.php>";
exit();
}
else if(trim($_POST ['password']) == "<8")
{
echo "<center><b><font size='+4' color='red'>กรุณากรอกข้อมูลให้ถูกต้องและครบถ้วน!</font></b></center>";     
echo "<meta http-equiv=refresh content=3;URL=register.php>";
exit();
}
else if(trim($pw!= $repw))
{
echo "<center><b><font size='+4' color='red'>ยืนยันรหัสผ่านไม่ตรงกัน!</font></b></center>";     
echo "<meta http-equiv=refresh content=3;URL=register.php>";
exit();
}
else if(trim($_POST ['emailu']) == "")
{
echo "<center><b><font size='+4' color='red'>กรุณากรอกข้อมูลให้ถูกต้องและครบถ้วน!</font></b></center>";     
echo "<meta http-equiv=refresh content=3;URL=register.php>";
exit();
}
$cSQL = "SELECT * FROM user WHERE username = '".$user."' ";
$Check = mysql_query($cSQL) or die ("Error Query [".$cSQL."]");
$Result = mysql_fetch_array($Check);
		if($Result)
		{
        echo "<center><b><font size='+4' color='red'>ชื่อผู้ใช้นี้มีอยู่ในระบบแล้ว</font></b></center>";     
		echo "<meta http-equiv=refresh content=3;URL=register.php>";
		exit();
		}
$sql_add="insert into user set
nameu='$name', username='$user' , password='$pw' , emailu='$email', status='user'";
mysql_query($sql_add) or die (mysql_error());	
echo "<center><b><font size='+4' color='red'>เพิ่มผู้ใช้เรียบร้อยแล้ว </font></b></center>";     
echo "<meta http-equiv=refresh content=3;URL=register.php>";
exit();
?>
</body>
</html>
