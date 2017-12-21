<?php
session_start();			
?>
<!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SURAT APARTMENT ONLINE | Admin</title>
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

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-5">
                        <div class="header-half header-call">
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12" align="right">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                 <div class="social pull-right"> 
                               
                                    <ul>
                                    <li>
                                    <?
									 if($_SESSION['user']=="")
	{
	echo "กรุณาเข้าสู่ระบบ";
	}
	else
	{
	echo "ยินดีต้อนรับ";
	}
									$connect=mysql_connect("localhost","root","1234");    
									
									mysql_query("SET NAMES UTF8");
						mysql_select_db("project");
						$result=mysql_query("SELECT * FROM user WHERE username = '".$_SESSION['user']."' ");
						
while($rs=mysql_fetch_array($result))
	{
	?>
     <td><center><font size="-1"><?=$rs['nameu']?></h5></font></center></td>                             
    <? }
	
mysql_close($connect);
?>
</li>
                                    </ul> 
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
       

        <nav class="navbar navbar-default ">
            <div class="container">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">SURAT APARTMENT ONLINE</a>
                </div>

                
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onClick=" window.open('<?
                        if($_SESSION['user']=="")
	{
	echo "register.php";
	}
	else
	{
	echo "logout.php";
	}
	?>
    ')" data-wow-delay="0.4s">
                        <?
                        if($_SESSION['user']=="")
	{
	echo "login";
	}
	else
	{
	echo "logout";
	}
	?>
    </button>
                        
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                         <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="index.php">หน้าแรก</a></li>
                         <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="properties.php">ค้นหาอพาร์ทเมนต์</a></li>  
                         <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="sproperty.php">ลงประกาศอพาร์ทเมนต์</a></li>
                         <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contactt.php">ติดต่อเรา</a></li>
                    </ul>
                            </ul>
                            
                </div>
            </div>
        </nav>
        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>ลำดับที่</th>
                  <th>วันที่</th>
                  <th>เวลา</th>
                  <th>ชื่อผู้ประกาศ</th>
                  <th>ชื่ออพาร์ทเเมนต์</th>
                  <th>สถานะ</th>
                </tr>
              </thead>
              <?
              include 'connect.php';
			  $thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_month_arr=array(
    "0"=>"",
    "1"=>"มกราคม",
    "2"=>"กุมภาพันธ์",
    "3"=>"มีนาคม",
    "4"=>"เมษายน",
    "5"=>"พฤษภาคม",
    "6"=>"มิถุนายน", 
    "7"=>"กรกฎาคม",
    "8"=>"สิงหาคม",
    "9"=>"กันยายน",
    "10"=>"ตุลาคม",
    "11"=>"พฤศจิกายน",
    "12"=>"ธันวาคม"                 
);
function thai_date($time){
    global $thai_day_arr,$thai_month_arr;
    $thai_date_return="วัน".$thai_day_arr[date("w",$time)];
    $thai_date_return.= "ที่ ".date("j",$time);
    $thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];
    $thai_date_return.= " พ.ศ.".(date("Yํ",$time)+543);
    return $thai_date_return;
}

$result=mysql_query ("SELECT *
FROM apartment INNER JOIN personal ON apartment.apid = personal.per_id");
	
while($rs=mysql_fetch_array($result))
	{
	
?>	
<form action="admincheck.php" method="get">
     <tbody>
                <tr>
                  <td><?=$rs['apid'];?></td>
                  <td><? 
				  $date=$rs['dateadd'];
				  $eng_date=strtotime("$date"); 
echo thai_date($eng_date);?></td>
                  <td><?=$rs['timeadd'];?></td>
                  <td><?=$rs['pername'];?></td>
                  <td><?=$rs['apname'];?></td>
                  <td><?=$rs['apstatus'];?></td>
                  <td><a href="admincheck.php?id=<?=$rs['apid'];?>"><input type="button" name="submit" value="ดูข้อมูล"/></a></td>
                </tr>
              </tbody> 
              </form>   
                    <?
	}
mysql_close($connect);
?>
            </table>  
              </div>
              </div>
              </div>  

      <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-center">
                            <span>This website is developed by <b><u>Students of the Faculty of Science and Technology in Tapee University  </u></b></span> 
                        </div> 
                       
                    </div>
                </div>
            </div>

        </div>         
       
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>   
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/main.js"></script>
       
    </body>
</html>