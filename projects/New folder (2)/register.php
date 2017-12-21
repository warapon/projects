<?php
session_start();
?>
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
                        <button class="navbar-btn nav-button wow bounceInRight login" onClick=" window.location.href = ('<?php
                        if(@$_SESSION['user']=="")
	{
	echo "register.php";
	}
	else
	{
	echo "logout.php";
	}
	?>
    ')" data-wow-delay="0.4s">
                        <?php
                        if(@$_SESSION['user']=="")
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
       

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Sign up / Sign in </h1>               
                    </div>
                </div>
            </div>
        </div>
      
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Sign up/สมัครสมาชิก : </h2> 
                            <form action="saveuser.php" method="post" >
                                <div class="form-group">
                                    <label for="nameu">Name</label>
                                    <input type="text" name="nameu" class="form-control" id="nameu">
                                </div>
                                <div class="form-group">
                                    <label for="emailu">Email</label>
                                    <input type="text" name="emailu" class="form-control" id="emailu">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="password">Re Password</label>
                                    <input type="password" name="repassword" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Sign in/เข้าสู่ระบบ : </h2> 
                            <form action="checklogin.php" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Sign in</button>
                                </div>
                            </form>
                            <br>
                            
                            <h2>Social login :  </h2> 
                            
                            <p>
                            <a class="login-social" href="http://www.facebook.com"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="http://www.gmail.com"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                              
                            </p> 
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      

          <!-- Footer area-->
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