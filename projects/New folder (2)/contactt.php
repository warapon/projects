<?php
session_start();
?>
<!DOCTYPE html> 
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SURAT APARTMENT ONLINE | ติดต่อเรา</title>
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
                        <h1 class="page-title"><font face="Bangna NEW">ติดต่อเรา</font></h1>               
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <div class="container">
      <div class="row">
        <div class="col-md-4">

             <h3><font face="Bangna New">ข้อมูลติดต่อ</font></h3>
             <p><b><font face="Bangna New">เบอร์โทรศัพท์</font></b> : 090-4944767</p>
             <i class="pe-7s-mail strong">   :  <a href="http://www.hotmail.com">  kamonrattongchompoo</a></i>
             <br><i class="fa fa-facebook"> :  <a href="http://www.facebook.com">  kamonrattongchompoo</a></i>
             <br><i class="fa fa-instagram"> :  <a href="http://www.instagram.com"> funnyrain_</a></i>   
            
        </div>  
        </div>
        </div>
        <hr>
        <div class="container">
      <div class="row">
        <div class="col-md-6">
                            <h3><font face="Bangna New">แบบฟอร์มติดต่อ</font></h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name"><font face="Bangna New">ชื่อ-สกุล</font></label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email"><font face="Bangna New">Email</font></label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject"><font face="Bangna New">เรื่อง</font></label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="message"><font face="Bangna New">ข้อความ</font></label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ส่งข้อความ</button>
                                    </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        </div>
        </div>
        </div><br>

  
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