
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
                <?php
                if(@$_SESSION['user']=="admin") {
                    ?>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="sproperty.php">ลงประกาศอพาร์ทเมนต์</a></li>
                    <?php
                }
                ?>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contactt.php">ติดต่อเรา</a></li>
            </ul>
            </ul>

        </div>
    </div>
</nav>