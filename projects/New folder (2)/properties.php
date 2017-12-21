<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SURAT APARTMENT ONLINE | ค้นหาอพาร์ทเมนต์</title>
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
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> 090-4944767</span>
                                <span><i class="pe-7s-mail"></i> tongchompoo42@hotmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
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
     <td><center><font size="-1"><?=@$rs['nameu']?></h5></font></center></td>
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


        <?=include ("menu.php")?>
        
        
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title"><font face="Bangna New">ค้นหาอพาร์ทเมนต์ของคุณ</font></h1>               
                    </div>
                </div>
            </div>
        </div>
       
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                     
                <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container"> 
                <div class="row  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 padding-bottom-40 large-search"> 
                        <div class="search-form wow pulse">
  
                            <form action="" class=" form-inline">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="สถานที่ใกล้เคียง">
                                    </div>
                                    <div class="col-md-4">                                   
                                       <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="กรุณาเลือกราคา">
                                        <option>1000-1500 </option>
                                        <option>2000-2500</option>
                                        <option>3000-3500</option>
                                        <option>4000-4500</option>
                                        <option>5000-6000</option>
                                    </select>
                                    </div>
                                    <div class="col-md-4">                                     
                                         <select id="basic" class="selectpicker show-tick form-control">
                                        <option> -กรุณาเลือกเขต- </option>
                                        <option>ตำบลตลาด </option>
                                        <option>ตำบลมะขามเตี้ย</option>
                                    </select>
                  
                                    </div>
                                </div>
                                    </div>
                                    
                                 <br><br>
                                 <div align="center">
                                 <h3><font face="Bangna New">กรุณาเลือกสิ่งอำนวยความสะดวกที่ต้องการ</font></h3>
                                 </div>
                                 
                                    <div class="search-row">  

                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ห้องเครื่องปรับอากาศ
                                                </font></label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> คีย์การ์ด
                                                </font></label>
                                            </div>
                                        </div> 

                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ห้องน้ำรวม
                                                </font></label>
                                            </div>
                                        </div>  

                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> เครื่องซักผ้าหยอดเหรียญ
                                                </font></label>
                                            </div>
                                        </div>  

                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ห้องพัดลม 
                                                </font></label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> WI-FI
                                                </font></label>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ห้องน้ำส่วนตัว
                                                </font></label>
                                            </div>
                                        </div>
                                       
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> เครื่องกดน้ำหยอดเหรียญ
                                                </font></label>
                                            </div>
                                        </div>
                                     
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ตู้เติมเงินโทรศัพท์
                                                </font></label>
                                            </div>
                                        </div>
                                       

                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ตู้เย็น
                                                </font></label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ทีวี
                                                </font></label>
                                            </div>
                                        </div>
                                         
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> ตู้เสื้อผ้า
                                                </font></label>
                                            </div>
                                        </div>
                                        
                                       <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><font face="Bangna New"> เตียงนอน
                                                </font></label>
                                            </div>
                                        </div>
                                   
                                    </div>   
                                </div>                     
                            </form>
                           
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
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
		color: #fff;
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
		<a class="button" href="#">ค้นหา</a>
        
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