<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SURAT APARTMENT ONLINE | ลงประกาศอพาร์ทเมนต์</title>
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
        <link rel="stylesheet" href="assets/css/wizard.css">
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
<?
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
                        <button class="navbar-btn nav-button wow bounceInRight login" onClick=" window.location.href =('<?php
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
                        <h1 class="page-title"><font face="Bangna New">ลงทะเบียนอพาร์ทเมนต์ของคุณที่นี่</font></h1>               
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form action="sproperty.php" method="post">                        
                                <div class="wizard-header">
                                    <h3>
                                        <font face="Bangna New"><b>กรุณากรอกข้อมูลอพาร์ทเมนต์ของคุณให้ครบถ้วน</b></font><br>
                                    </h3>
                                </div>

                                <ul>
                                    <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                                    <li><a href="#step3" data-toggle="tab">Step 3 </a></li>
                                    <li><a href="#step4" data-toggle="tab">Finished </a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"><font face="Bangna New"> ข้อมูลส่วนตัว</font></h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input type="file" name="perimage" id="wizard-picture">
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><font face="Bangna New">ชื่อ-สกุล</font></label>
                                                    <input name="pername" type="text" class="form-control" placeholder="" value="<?=@$_GET["1"];?>">
                                                </div>

                                                <div class="form-group">
                                                    <label><font face="Bangna New">หมายเลขบัตรประชาชน</font></label>
                                                    <input  name="peridg" type="text" class="form-control" placeholder="" value="<?=@$_GET["3"];?>">
                                                </div> 
                                                <div class="form-group">
                                                    <label><font face="Bangna New">เบอร์โทรศัพท์</font></label>
                                                    <input  name="pertel" type="text" class="form-control" placeholder="" value="<?=@$_GET["5"];?>">
                                                </div>

<style>
fieldset {
	width: 100%;
	text-align: center;
}

input[type="radio"] {
	display: none;
	+label {
		color: white;
		font-weight: bold;
		font-size: 1rem;
		cursor: pointer;
		user-select: none;
		padding-left: 20px;
		padding-right: 20px;
		&::before {
			transition: all 250ms cubic-bezier(.4,.25,.3,1);
			content: "";
			width: 30px;
			height: 30px;
			border-radius: 50%;
			background-color: white;
			border: 0px solid white;
			font-size: 0;
			position: absolute;
			bottom: 275%;
			left: 50%;
			transform: translate(-50%, 50%);
		}
		
		&::after {
			transition: all 250ms cubic-bezier(.4,.25,.3,1);
			content: "";
			width: 0;
			height: 0;
			border-radius: 50%;
			background-color: white;
			position: absolute;
			bottom: 275%;
			left: 50%;
			transform: translate(-50%, 50%);
		}

	&:checked + label{
		&::before {
			background-color: transparent;
			width: 40px;
			height: 40px;
			border-width: 2px;
		}
		
		&::after {
			width: 30px;
			height: 30px;
		}

section.input-container {
	label {
		position: relative;
		display: block;
		input {
			display: block;
			padding: 20px;
			width: 300px;
		  margin-bottom: 10px;
		  outline: none;
			transition: all 0.2s ease-in-out;
			background-color: white;
			font-weight: bold;
			color: #FF7975;
			&::placeholder {
				transition: all 0.2s ease-in-out;
				color: #D3D3D3;
				font-weight: bold;
			}
			&:focus, &.populated {
				padding-top: 28px;
				padding-bottom: 12px;
				&::placeholder {
					color: transparent;
				}
				& + span {
				   opacity: 1;
				    top: 10px;
				}

		span {
			font-size: .8rem;
			color: #A9A9A9;
			position: absolute;
			top: 0px;
			left: 20px;
			opacity: 0;
			transition: all 0.2s ease-in-out;
		}
</style>
<body>                                                	
	<fieldset>
		<input type="radio" name="persta" id="radio-1" value="เจ้าของอพาร์ทเมนต์" checked=""</>
		<label for="radio-1">เจ้าของอพาร์ทเมนต์</label>

		<input type="radio" name="persta" id="radio-2" value="ผู้ลงประกาศทั่วไป" checked="checked"/>
		<label for="radio-2">ผู้ลงประกาศทั่วไป</label>
		
	</fieldset>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="step2">
                                        <h4 class="info-text"><font face="Bangna New"> ข้อมูลอพาร์ทเมนต์</font></h4>
                                        <div class="row">
                                            <div class="col-sm-5"> 
                                                <div class="col-sm-12"> 
                                                    <div class="form-group">
                                                    <label><font face="Bangna New">ชื่ออพาร์ทเมนต์</font></label>
                                                    <input  name="apname" type="text" class="form-control" placeholder="" value="<?=@$_GET["6"];?>">
                                                </div>
                                                </div> 
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label><font face="Bangna New">ที่อยู่อพาร์ทเมนต์</font></label>
                                                        <input name="apadd" type="text" class="form-control" placeholder="" value="<?=@$_GET["7"];?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label><font face="Bangna New">สถานที่ใกล้เคียง</font></label>
                                                       <input  name="applace"type="text" class="form-control" placeholder="" value="<?=@$_GET["8"];?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label><font face="Bangna New">ราคา</font></label>
                                                                                            
                                         <select id="basic" name="apprice" class="selectpicker show-tick form-control" value="<?=@$_GET["9"];?>">
                                        <option> -กรุณาเลือกราคา- </option>
                                        <option>1000-1500 </option>
                                        <option>2000-2500</option>
                                        <option>3000-3500</option>
                                        <option>4000-4500</option>
                                        <option>5000-6000</option>
                                    </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                            <div class="col-sm-12 padding-top-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_condi" <?php if(@$_GET["11"]=="")
													{echo "";} 
													else if(@$_GET["11"]=="no")
													{echo "";}
													else if(@$_GET["11"]=="yes")
													{echo "checked";}?>> ห้องเครื่องปรับอากาศ
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_keycard" <?php if(@$_GET["15"]=="")
													{echo "";} 
													else if(@$_GET["15"]=="no")
													{echo "";}
													else if(@$_GET["15"]=="yes")
													{echo "checked";}?>> คีย์การ์ด
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_toilet" <?php if(@$_GET["18"]=="")
													{echo "";} 
													else if(@$_GET["18"]=="no")
													{echo "";}
													else if(@$_GET["18"]=="yes")
													{echo "checked";}?>> ห้องน้ำรวม
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_wasching" <?php if(@$_GET["21"]=="")
													{echo "";} 
													else if(@$_GET["21"]=="no")
													{echo "";}
													else if(@$_GET["21"]=="yes")
													{echo "checked";}?>> เครื่องซักผ้าหยอดเหรียญ
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="col-sm-12 padding-bottom-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_fan" <?php if(@$_GET["12"]=="")
													{echo "";} 
													else if(@$_GET["12"]=="no")
													{echo "";}
													else if(@$_GET["12"]=="yes")
													{echo "checked";}?>> ห้องพัดลม 
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_wifi" <?php if(@$_GET["16"]=="")
													{echo "";} 
													else if(@$_GET["16"]=="no")
													{echo "";}
													else if(@$_GET["16"]=="yes")
													{echo "checked";}?>> WI-FI
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_toilets" <?php if(@$_GET["19"]=="")
													{echo "";} 
													else if(@$_GET["19"]=="no")
													{echo "";}
													else if(@$_GET["19"]=="yes")
													{echo "checked";}?>> ห้องน้ำส่วนตัว
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_water" <?php if(@$_GET["22"]=="")
													{echo "";} 
													else if(@$_GET["22"]=="no")
													{echo "";}
													else if(@$_GET["22"]=="yes")
													{echo "checked";}?>> เครื่องกดน้ำหยอดเหรียญ
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_cash" <?php if(@$_GET["13"]=="")
													{echo "";} 
													else if(@$_GET["13"]=="no")
													{echo "";}
													else if(@$_GET["13"]=="yes")
													{echo "checked";}?>> ตู้เติมเงินโทรศัพท์
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_refis" <?php if(@$_GET["17"]=="")
													{echo "";} 
													else if(@$_GET["17"]=="no")
													{echo "";}
													else if(@$_GET["17"]=="yes")
													{echo "checked";}?>> ตู้เย็น
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div> 
                                             <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_tele" <?php if(@$_GET["20"]=="")
													{echo "";} 
													else if(@$_GET["20"]=="no")
													{echo "";}
													else if(@$_GET["20"]=="yes")
													{echo "checked";}?>> ทีวี
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_closet" <?php if(@$_GET["23"]=="")
													{echo "";} 
													else if(@$_GET["23"]=="no")
													{echo "";}
													else if(@$_GET["23"]=="yes")
													{echo "checked";}?>> ตู้เสื้อผ้า
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_park" <?php if(@$_GET["24"]=="")
													{echo "";} 
													else if(@$_GET["24"]=="no")
													{echo "";}
													else if(@$_GET["24"]=="yes")
													{echo "checked";}?>> ที่จอดรถ
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="fur_bed" <?php if(@$_GET["14"]=="")
													{echo "";} 
													else if(@$_GET["14"]=="no")
													{echo "";}
													else if(@$_GET["14"]=="yes")
													{echo "checked";}?>> เตียงนอน
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                             <label><font face="Bangna New">
                                                    <input type="checkbox" name="all"> เลือกทั้งหมด
                                                </font></label>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label><font face="Bangna New">เบอร์โทรศัพท์</font></label>
                                                        <input   name="aptel" type="text" class="form-control" placeholder="" value="<?=@$_GET["25"];?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label><font face="Bangna New">E-mail/G-mail</font></label>
                                                        <input   name="apmail" type="text" class="form-control" placeholder="" value="<?=@$_GET["26"];?>">
                                                    </div>
                                                </div>
                                                
                                            <div class="col-sm-5"> 
                                            <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="message"><font face="Bangna New">ข้อมูลเพิ่มเติม</font></label>
                                            <textarea id="message" name="fur_more" class="form-control"></textarea>
                                        </div>
                                    </div>    
                                    </div>     
                                            <br>
                                        </div>
                                    </div>
                                
                                    <div class="tab-pane" id="step3">                                        
                                        
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><font face="Bangna New"><font size="5">รูปภาพอพาร์ทเมนต์ของคุณ :</font></font></label>
                                                    <input class="form-control" name="apimage" type="file" id="property-images" value="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
            
                                    <div class="tab-pane" id="step4">                                        
                                        <h4 class="info-text"><font face="Bangna New"> การลงทะเบียนใกล้เสร็จแล้ว </font></h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p><font face="Bangna New">
                                                      ยอมรับเงื่อนไขว่าข้อมูลของท่านทั้งหมดเป็นความจริงทุกประการ 
                                                      หากมีการตรวจสอบแล้วพบว่ามีข้อมูลไม่เป็นความจริง หรือละเมิดสิทธิของผู้อื่น 
                                                      ทางผู้ดูแลเว็บไซต์จะทำการลบข้อมูลของท่านทั้งหมดโดยไม่ต้องแจ้งให้ทราบล่วงหน้า
                                                    </font></p>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="check"/> <strong><font face="Bangna New">ยอมรับเงื่อนไข</font></strong>
                                                        </label>
                                                    </div> 

                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                   

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                                        <input type='submit' class='btn btn-finish btn-primary ' name='finish' value='Finish' formaction='?up=upda' /> 
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>	
                            </form>
                        </div>
                        
                    </div> 
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
        

        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/wizard.js"></script>
        <script src="assets/js/main.js"></script>
        
 <?php
 date_default_timezone_set('Asia/Bangkok');
$host="localhost";
$user="root";
$password="";
$dbname="project";
@$pname=$_POST['pername'];
@$pid=$_POST['peridg'];
@$pim=$_POST['perimage'];
@$psta=$_POST['persta'];
@$ptel=$_POST['pertel'];
@$apn=$_POST['apname'];
@$apad=$_POST['apadd'];
@$appl=$_POST['applace'];
@$appr=$_POST['apprice'];
@$apim=$_POST['apimage'];
@$furmo=$_POST['fur_more'];
$date = date("Y-m-d");
$time = date("H:i:s");
@$atel=$_POST['aptel'];
@$amail=$_POST['apmail'];
@$furcon=$_POST['fur_condi'];
if(trim(@$_POST ['fur_condi']) == "")
{
$furcon="no";
}
else {$furcon="yes";}

@$furf=$_POST['fur_fan'];
if(trim(@$_POST ['fur_fan']) == "")
{
$furf="no";
}
else {$furf="yes";}

@$furc=$_POST['fur_cash'];
if(trim(@$_POST ['fur_cash']) == "")
{
$furc="no";
}
else {$furc="yes";}

@$furb=$_POST['fur_bed'];
if(trim(@$_POST ['fur_bed']) == "")
{
$furb="no";
}
else {$furb="yes";}

@$furkey=$_POST['fur_keycard'];
if(trim(@$_POST ['fur_keycard']) == "")
{
$furkey="no";
}
else {$furkey="yes";}

@$furwf=$_POST['fur_wifi'];
if(trim(@$_POST ['fur_wifi']) == "")
{
$furwf="no";
}
else {$furwf="yes";}

@$furre=$_POST['fur_refis'];
if(trim(@$_POST ['fur_refis']) == "")
{
$furre="no";
}
else {$furre="yes";}

@$furto=$_POST['fur_toilet'];
if(trim(@$_POST ['fur_toilet']) == "")
{
$furto="no";
}
else {$furto="yes";}

@$furtos=$_POST['fur_toilets'];
if(trim(@$_POST ['fur_toilets']) == "")
{
$furtos="no";
}
else {$furtos="yes";}

@$furte=$_POST['fur_tele'];
if(trim(@$_POST ['fur_tele']) == "")
{
$furte="no";
}
else {$furte="yes";}

@$furwas=$_POST['fur_washing'];
if(trim(@$_POST ['fur_washing']) == "")
{
$furwas="no";
}
else {$furwas="yes";}

@$furwa=$_POST['fur_water'];
if(trim(@$_POST ['fur_water']) == "")
{
$furwa="no";
}
else {$furwa="yes";}

@$furclo=$_POST['fur_closet'];
if(trim(@$_POST ['fur_closet']) == "")
{
$furclo="no";
}
else {$furclo="yes";}

@$furpa=$_POST['fur_park'];
if(trim(@$_POST ['fur_park']) == "")
{
$furpa="no";
}
else {$furpa="yes";}

if
(trim(@$_POST ['fur_condi']) != "" && trim($_POST ['fur_fan']) != "" && trim($_POST ['fur_cash']) != "" && trim($_POST ['fur_bed']) != "" && trim($_POST ['fur_keycard']) != "" && trim($_POST ['fur_wifi']) != "" && trim($_POST ['fur_refis']) != "" && trim($_POST ['fur_toilet']) != "" && trim($_POST ['fur_toilets']) != "" && trim($_POST ['fur_tele']) != "" && trim($_POST ['fur_washing']) != "" && trim($_POST ['fur_water']) != "" && trim($_POST ['fur_closet']) != "" && trim($_POST ['fur_park']) != "")
{
$furcon="yes";
$furf="yes";
$furc="yes";
$furb="yes";
$furkey="yes";
$furwf="yes";
$furre="yes";
$furto="yes";
$furtos="yes";
$furte="yes";
$furwas="yes";
$furwa="yes";
$furclo="yes";
$furpa="yes";
}
if
(trim(@$_POST ['all']) != "")
{
$furcon="yes";
$furf="yes";
$furc="yes";
$furb="yes";
$furkey="yes";
$furwf="yes";
$furre="yes";
$furto="yes";
$furtos="yes";
$furte="yes";
$furwas="yes";
$furwa="yes";
$furclo="yes";
$furpa="yes";
} 

/*&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&10=$apim&11=$furcon
&12=$furf&13=$furc&14=$furb&15=$furkey&16=$furwf&17=$furre&18=$furto&19=$furtos&20=$furte&21=$furwas&22=$furwa&23=$furclo&24=$furpa*/
$connect=mysql_connect($host,$user,$password);
mysql_query("SET NAMES UTF8");
mysql_select_db($dbname) or die ("เลือกฐานข้อมูลไม่ได้");

if(@$_GET['up'] == "upda")
   {
if(trim($_POST ['check']) == "")
{
echo"<script>
alert('กรุณายอมรับเงื่อนไขก่อนทำการบันทึก');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}  
if(trim($_POST ['pername']) == "")
{
echo"<script>alert('กรุณากรอกชื่อ-นามสกุล');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['peridg']) == "")
{
echo"<script>alert('กรุณากรอกหมายเลขบัตรประชาชนของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['perimage']) == "")
{
echo"<script>alert('กรุณาใส่รูปประจำตัวของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['persta']) == "")
{
echo"<script>alert('กรุณาเลือกสถานะของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['pertel']) == "")
{
echo"<script>alert('กรุณากรอกเบอร์โทรศัพท์ของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon&12=$furf&13=$furc'; </script>";
exit();
}
if(trim($_POST ['apname']) == "")
{
echo"<script>alert('กรุณากรอกชื่ออพาร์ทเมนต์');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['apadd']) == "")
{
echo"<script>alert('กรุณากรอกที่อยู่อพาร์ทเมนต์ของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['applace']) == "")
{
echo"<script>alert('กรุณากรอกสถานที่ใกล้เคียงของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['apprice']) == "")
{
echo"<script>alert('กรุณากรอกราคาของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['apimage']) == "")
{
echo"<script>alert('กรุณาใส่รูปภาพอพาร์ทเมนต์');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon'; </script>";
exit();
}
if(trim($_POST ['aptel']) == "")
{
echo"<script>alert('กรุณากรอกเบอร์โทรศัพท์อพาร์ทเมนต์ของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon&12=$furf&13=$furc'; </script>";
exit();
}
if(trim($_POST ['apmail']) == "")
{
echo"<script>alert('กรุณากรอก E-mail/G-mail ของคุณ');window.location='sproperty.php?1=$pname&2=$pim&3=$pid&4=$psta&5=$ptel&6=$apn&7=$apad&8=$appl&9=$appr&11=$furcon&12=$furf&13=$furc'; </script>";
exit();
}

	
$sql_add1="insert into personal set
pername='$pname',peridg='$pid',perimage='$pim', persta='$psta', pertel='$ptel'";
mysql_query($sql_add1) or die (mysql_error());
	
$sql_add2="insert into furniture set
apmname='$apn',apmprice='$appr',fur_condi='$furcon',fur_fan='$furf',fur_cash='$furc',fur_bed='$furb',fur_keycard='$furkey',fur_wifi='$furwf',fur_refis='$furre',fur_toilet='$furto',fur_toilets='$furtos',fur_tele='$furte',fur_washing='$furwas',fur_water='$furwa',fur_closet='$furclo',fur_park='$furp',fur_more='$furmo'";
mysql_query($sql_add2) or die (mysql_error());

$sql_add3="insert into apartment set
apname='$apn',apadd='$apad',applace='$appl',apprice='$appr',apimage='$apim',dateadd='$date',timeadd='$time',aptel='$atel',apmail='$amail'";
mysql_query($sql_add3) or die (mysql_error());
echo"<script>alert('ส่งข้อมูลของคุณเรียบร้อยแล้ว');window.location='sproperty.php';</script>";
exit();
	}
?>

    </body>
</html>