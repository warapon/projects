<?php
session_start();			
?>
<!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SURAT APARTMENT ONLINE | Admincheck</title>
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
                           
                </div>
            </div>
        </nav>
        
                            
        <?
		include 'connect.php'; $result=mysql_query ("SELECT * FROM apartment
LEFT JOIN personal ON apartment.apid = personal.per_id
LEFT JOIN furniture ON personal.per_id = furniture.fur_id
where apartment.apid='".$_GET["id"]."'
");
       

	
while($rs=mysql_fetch_array($result))
	{
	?>
                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><font face="Bangna New">ชื่อ-สกุล : <?=$rs['pername'];?></font></label><br>
                                                    <label><font face="Bangna New">หมายเลขบัตรประชาชน : <?=$rs['peridg'];?></font></label><br>
                                                    <label><font face="Bangna New">เบอร์โทรศัพท์ : <?=$rs['pertel'];?></font></label><br>
                                                    <label><font face="Bangna New">ชื่ออพาร์ทเมนต์ : <?=$rs['apname'];?></font></label><br>
                                                    <label><font face="Bangna New">ที่อยู่อพาร์ทเมนต์ : <?=$rs['apadd'];?></font></label><br>
                                                    <label><font face="Bangna New">สถานที่ใกล้เคียง : <?=$rs['applace'];?></font></label><br>
                                                    <label><font face="Bangna New">ราคา : <?=$rs['apprice'];?></font></label><br>
                                                    <label><font face="Bangna New">เบอร์โทรศัพท์อพาร์ทเมนต์ : <?=$rs['aptel'];?></font></label><br>
                                                    <label><font face="Bangna New">อีเมล : <?=$rs['apmail'];?></font></label><br>
                                                    <label><font face="Bangna New">ข้อมูลเพิ่มเติม : <?=$rs['fur_more'];?></font></label><br>
                                                    <label><font face="Bangna New">รูปภาพอพาร์ทเมนต์ : <?=$rs['apimage'];?></font></label><br>   
                                                    <?
                                                        if (($rs['apstatus']!='รออนุมัติ'))
														{
														echo "สถานะ : ".$rs['apstatus'];
														}
													    
														?>
                                                        
                                                </div>
                                                </div>
                                                
                                              
                                              <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font face="Bangna New">สิ่งอำนวยความสะดวก </font></label><br>       
                                              <label><font face="Bangna New">ห้องเครื่องปรับอากาศ : <?=$rs['fur_condi'];?></font></label><br>
                                                        <label><font face="Bangna New">ห้องพัดลม : <?=$rs['fur_fan'];?></font></label><br>
                                                        <label><font face="Bangna New">ตู้เติมเงินโทรศัพท์ : <?=$rs['fur_cash'];?></font></label><br>
                                                        <label><font face="Bangna New">ที่จอดรถ : <?=$rs['fur_park'];?></font></label><br>
                                                        <label><font face="Bangna New">คีย์การ์ด : <?=$rs['fur_keycard'];?></font></label><br>
                                                        <label><font face="Bangna New">Wi-Fi : <?=$rs['fur_wifi'];?></font></label><br>
                                                        <label><font face="Bangna New">เตียงนอน : <?=$rs['fur_bed'];?></font></label><br> 
                                                        <label><font face="Bangna New">ห้องน้ำรวม : <?=$rs['fur_toilet'];?></font></label><br>
                                                        <label><font face="Bangna New">ห้องน้ำส่วนตัว : <?=$rs['fur_toilets'];?></font></label><br>
                                                        <label><font face="Bangna New">ทีวี : <?=$rs['fur_tele'];?></font></label><br>
                                                        <label><font face="Bangna New">เครื่องซักผ้าหยอดเหรียญ : <?=$rs['fur_washing'];?></font></label><br>
                                                        <label><font face="Bangna New">เครื่องกดน้ำหยอดเหรียญ : <?=$rs['fur_water'];?></font></label><br>
                                                        <label><font face="Bangna New">ตู้เสื้อผ้า : <?=$rs['fur_closet'];?></font></label>   
                                                       
                                             </div>
                                                       </div>
                                                       

                                                     <style>
.round a {
		color: crimson;
}

.round .button {
		display: inline-block;
		width: 130px;
		height: 40px;
		line-height: 40px;
		margin: 20px;
		position: relative;
		overflow: hidden;
		border: 2px solid crimson;
		transition: color .5s;
		text-align: center;
		font-family: Bangna New;
		font-size: 20px;
}

.round .button:before {
		content: "";
		position: absolute;
		z-index: -1;
		background: crimson;
		height: 150px;
		width: 200px;
		border-radius: 50%;
}

.round .button:hover {
		color: #FFFFFF;
}

.round .button:nth-child(1):before {
		top: 100%;
		left: 100%;
		transition: all .7s;
}

.round .button:nth-child(1):hover:before {
		top: -30px;
		left: -30px;
}

</style>
<body>

<div class="round" align="center">
<?
if($rs['apstatus']=='รออนุมัติ'){
?>

		<a class="button" href="status.php?id=<?=$rs['apid'];?>"><input type="button" name="submit" value="อนุมัติ"/></a>
        <a class="button" href="status.php?ids=<?=$rs['apid'];?>" onClick="return confirm('คุณต้องการที่จะไม่อนุมัติข้อมูลนี้จริงหรือไม่')" ><input type="button"  value="ไม่อนุมัติ"/></a>
 <?
 }
 else{
 echo "."; 
 }

 ?>       
</div> 
                                                                                      
<?
	}
mysql_close($connect);
?>     
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
        