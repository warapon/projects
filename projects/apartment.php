<!DOCTYPE html>
<?php
session_start();
include ("top.php");
include ("conn.php");
$query = "UPDATE visit  SET vi_num = vi_num + 1  WHERE vi_id_pa =".$_GET["id"]." ";
$result = mysql_query($query, $link);

$query = "SELECT * FROM apartment WHERE ap_id=".$_GET["id"]." ";
$result = mysql_query($query, $link);
$row = mysql_fetch_array($result);
$result2 = mysql_query($query, $link);
if(mysql_fetch_row($result2)==0){
    echo"<script>alert('ไม่มีข้อมูลอพาร์ทเม้นท์นี้ กรุณาตรวจสอบอีกครั้ง หรือ ติดต่อผู้ดูแลเว็ปนี้');window.location.href='home.php';</script>";
}
$ch01="151118700893580";
?>
<br>

<!------------------ loginfacebook ------------------>
<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        document.getElementById("button").style.display='none';
        document.getElementById("star").style.display='none';

        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            testAPI();
        } else {
            // The person is not logged into your app or we are unable to tell.

            document.getElementById("star").style.display='none';
            document.getElementById("button").style.display='block';
            document.getElementById('status').innerHTML = '<center>กรุณา Login ' +
                'เพื่อเข้าให้คะแนน</center>';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '129827954472345',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.8' // use graph api version 2.8
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('id').value = response.id;
            document.getElementById('name').value = response.name;
            document.getElementById("button").style.display = 'none';
            document.getElementById("star").style.display = 'block';
        });
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-12 blog-main">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="col-sm-8 blog-main">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <p><h3><i class="fa fa-bed" aria-hidden="true"></i> <?=$row["apname"]?></h3></p>
                                <p><?=$row["addass"]?></p>
                                <div class="col-sm-6 blog-main">
                                    <div class="panel panel-warning">
                                        <div class="panel-body">
                                            <p>ติดต่อ</p>
                                            <p>โทร : <?=$row["tel"]?></p>
                                            <p>อีเมล์ : <?=$row["email"]?></p>
                                            <div class="star-rating">
                                                <?php
                                                $queryrating = "SELECT AVG(`re_ score`) AS rating FROM review WHERE re_id_ap=".$_GET["id"].";";
                                                $resultrating = mysql_query($queryrating, $link);
                                                $rowrating = mysql_fetch_array($resultrating);
                                                $rating= round($rowrating["rating"]);
                                                for($n=10,$m=5;$n>=6;$n--,$m--) {
                                                    if ($m == $rating) {
                                                        ?>
                                                        <input id="star-<?= $n ?>" type="radio" name="rating2" checked disabled>
                                                        <label for="star-<?= $n ?>" title="<?= $n ?> stars">
                                                            <i class="active fa fa-star" aria-hidden="true"></i>
                                                        </label>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <input id="star-<?= $n ?>" type="radio" name="rating2" disabled>
                                                        <label for="star-<?= $n ?>" title="<?= $n ?> stars">
                                                            <i class="active fa fa-star" aria-hidden="true"></i>
                                                        </label>
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <div class="panel panel-warning">
                                        <div class="panel-body">
                                            <p>ค่าเช่า</p>
                                            <p> <?=number_format($row["pricestart"])?> -  <?=number_format($row["priceend"])?> บาท/เดือน</p>
                                            <?php
                                            if($row["ap_status"]=="อนุมัติแล้ว"){
                                                echo "<h4><span class=\"label label-success\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> ลงทะเบียนอพาร์เม้นท์แล้ว</span></h4>";

                                            }elseif($row["ap_status"]=="รออนุมัติ"){
                                                echo "<h4><span class=\"label label-warning\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> รออนุมัติ</span></h4>";
                                            }else{
                                                echo "<h4><span class=\"label label-danger\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> ไม่อนุมัติ</span></h4>";
                                            }

                                            ?>
                                            <p>ผู้เข้าชม
                                                <?php
                                                $queryvisit = "SELECT * FROM visit WHERE vi_id_pa=".$_GET["id"].";";
                                                $resultvisit = mysql_query($queryvisit, $link);
                                                $rowrvisit = mysql_fetch_array($resultvisit);
                                                echo $rowrvisit["vi_num"];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12 blog-main">
                                    <ul class="nav nav-pills nav-justified default">
                                        <li><a data-toggle="tab" href="#home">รูปภาพ</a></li>
                                        <li  class="active"><a data-toggle="tab" href="#menu1">แผนที่</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="home"  class="tab-pane fade" >
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                                        <!-- Indicators -->
                                                        <ol class="carousel-indicators">

                                                            <?php
                                                            $queryimg = "SELECT * FROM img_apatment WHERE img_id_ap=".$_GET["id"].";";
                                                            $resultimg = mysql_query($queryimg, $link);
                                                            $resultimg1 = mysql_query($queryimg, $link);
                                                            $numimg=0;
                                                            while ($rowimg = mysql_fetch_array($resultimg)){
                                                                if($numimg==0){
                                                                    echo "<li data-target=\"#myCarousel\" data-slide-to=\"<?=$numimg?>\" class=\"active\"></li>";
                                                                }else {
                                                                    echo "<li data-target=\"#myCarousel\" data-slide-to=\"<?=$numimg?>\" class=\"active\"></li>";
                                                                }
                                                                $numimg++;

                                                            }
                                                            ?>
                                                        </ol>

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner">
                                                            <?php
                                                            $numimg=0;
                                                            while ($rowimg = mysql_fetch_array($resultimg1)){
                                                                if($numimg==0){
                                                                    ?>
                                                                    <div class="item active">
                                                                        <img src="user/img/img_manyapatment/<?=$rowimg["img_name"]?>">
                                                                    </div>
                                                                    <?php
                                                                }else {
                                                                    ?>
                                                                    <div class="item">
                                                                        <img src="user/img/img_manyapatment/<?= $rowimg["img_name"] ?>">
                                                                    </div>
                                                                    <?php
                                                                }
                                                                $numimg++;
                                                            }
                                                            ?>

                                                        </div>

                                                        <!-- Left and right controls -->
                                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>

                                                    <!--                                                    <img src="2f757a9953032fac45f22982576b6c80.jpg" class="img-thumbnail" alt="Cinque Terre">-->
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade in active">
                                            <div id="home" class="tab-pane fade in active">
                                                <div class="panel panel-primary">
                                                    <div class="panel-body">
                                                        <div id="map" style="width:100%;height:300px"></div><br>
                                                        <center><a href="https://www.google.com/maps/search/?api=1&query=<?=$row["latti"]?>,<?=$row["longti"]?>">
                                                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-location-arrow" aria-hidden="true"></i> นำทาง</button>
                                                            </a></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">รายละเอียด</div>
                            <div class="panel-body">
                                <?=$row["des"]?>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">สิ่งอำนวยความสะดวก</div>
                            <div class="panel-body">
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac1"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> เครื่อปรับอากาศ</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> เครื่อปรับอากาศ</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac2"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> คีย์การ์ด</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> คีย์การ์ด</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac3"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ห้องน้ำรวม</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ห้องน้ำรวม</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac4"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> เครื่องซักผ้าหยอดเหรียญ</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> เครื่องซักผ้าหยอดเหรียญ</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac5"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ห้องพัดลม</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ห้องพัดลม</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac6"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> WI-FI</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> WI-FI</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac7"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ห้องน้ำส่วนตัว</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ห้องน้ำส่วนตัว</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac8"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> เครื่องกดน้ำหยอดเหรียญ</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> เครื่องกดน้ำหยอดเหรียญ</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac9"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ตู้เติมเงินโทรศัพท์</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ตู้เติมเงินโทรศัพท์</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac10"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ตู้เย็น</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ตู้เย็น</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac11"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ทีวี</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ทีวี</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac12"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i>	ตู้เสื้อผ้า</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ตู้เสื้อผ้า</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac13"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> ที่จอดรถ</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> ที่จอดรถ</label>
                                    <?php }?>
                                </div>
                                <div class="col-sm-6 blog-main">
                                    <?php if($row["fac14"]==1){?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-check-circle" aria-hidden="true" style="color: green"></i> เตียงนอน</label>
                                    <?php }else{?>
                                        <label class="col-form-label" for="inputDefault"><i class="fa fa-times-circle" aria-hidden="true" style="color: red"></i> เตียงนอน</label>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">ให้คะแนน</div>
                            <form method="post" action="">
                                <div class="panel-body">
                                    <div class="col-sm-6 blog-main">
                                        <br>
                                        <div class="star-rating">
                                            <input id="star-5" type="radio" name="r" value="5">
                                            <label for="star-5" title="5 stars">
                                                <i class="active fa fa-star" aria-hidden="true" style="font-size: 30px"></i>
                                            </label>
                                            <input id="star-4" type="radio" name="r" value="4" >
                                            <label for="star-4" title="4 stars">
                                                <i class="active fa fa-star" aria-hidden="true" style="font-size: 30px"></i>
                                            </label>
                                            <input id="star-3" type="radio" name="r" value="3">
                                            <label for="star-3" title="3 stars">
                                                <i class="active fa fa-star" aria-hidden="true" style="font-size: 30px"></i>
                                            </label>
                                            <input id="star-2" type="radio" name="r" value="2">
                                            <label for="star-2" title="2 stars">
                                                <i class="active fa fa-star" aria-hidden="true" style="font-size: 30px"></i>
                                            </label>
                                            <input id="star-1" type="radio" name="r" value="1" >
                                            <label for="star-1" title="1 star">
                                                <i class="active fa fa-star" aria-hidden="true" style="font-size: 30px"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 blog-main"><br>
                                        <input type="hidden" id="id" name="idfb">
                                        <input type="hidden" id="name" name="namefb">
                                        <button type="submit" id="star" class="btn btn-success btn-sm"><i class="fa fa-cloud-download" aria-hidden="true"></i> ส่งคะแนน</button>

                                        <div class="fb-login-button"  id="button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" ></div>
                                        <div id="status"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">ความคิดเห็น</div>
                            <div class="panel-body">
                                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#www.suratapartment.com?id=<?=$_GET["id"]?>" data-numposts="10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-main">
                        <div class="panel panel-default">
                            <div class="panel-heading">อพาร์ทเม้นแนะนำ</div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php
                                    include ("recommend.php");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$la=$row["latti"];
$log=$row["longti"];
?>
<!----------- commant --------------->
<script>
    function initMap() {
        var uluru = {lat: <?=$la?>, lng: <?=$log?>};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            animation: google.maps.Animation.BOUNCE
        });
    }
    window.loaded=initMap;
</script>

<!----------------- map --------------------->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkTkEh91_PtVee8qaMUzqVzrET2Lc2Br8&callback=initMap">
</script>


<?php
include ("footer.php");

if(isset($_POST["idfb"])){
    if(!isset($_POST["r"])){
        echo "<script>alert('การทำงานผิดพลาด : กรุณาเลือกคะแนนก่อนการคลิกปุ่มส่งคะแนนคะ!!');window.location.href='apartment.php?id=" . $_GET["id"] . "';</script>";
    }else{
        $query = "SELECT * FROM review WHERE re_id_ap=".$_GET["id"]." AND re_id_fb='".$_POST["idfb"]."'";
        $result = mysql_query($query, $link);
        if(mysql_fetch_array($result)==0) {
            $query = "INSERT INTO `review`(`re_id_ap`, `re_id_fb`, `re_name_fb`, `re_ score`, `re_date`)  VALUES ('" . $_GET["id"] . "','" . $_POST["idfb"] . "','" . $_POST["namefb"] . "','" . $_POST["r"] . "',NOW())";
            $result = mysql_query($query, $link);
            echo $query;
            echo "<script>alert('ท่านได้ส่งคะแนนเรียบร้อยแล้ว ขอบคุณที่ใช้บริการคะ');window.location.href='apartment.php?id=" . $_GET["id"] . "';</script>";
        }else{
            echo "<script>alert('ท่านได้ส่งคะแนนอพาร์ทเม้นนี้แล้ว ไม่สามารถทำรายการซ้ำได้คะ ขอบคุณที่ใช้บริการคะ');window.location.href='apartment.php?id=" . $_GET["id"] . "';</script>";
        }
    }
}
?>