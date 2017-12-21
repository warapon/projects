<!DOCTYPE html>
<?php
session_start();
include ("top.php");
include ("conn.php");
?>

<div class="container">
    <div class="row">
        <?php
        if(!isset($_POST['num']) and !isset($_POST['price'])) {
            ?>
            <div class="col-sm-12 blog-main">
                <div class="text-center"><h1>ค้นหาอพาร์ทเม้นท์ในเมืองจังหวัดสุราษฎร์ธานี</h1></div>
                <br><br><br>
            </div>
            <div class="col-sm-12 blog-main">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="footer_dv">
                            <form method="post" action="" >
                                <h4>ค้นหาจากประมาณราคา <small class="text-primary">(ใส่ราคาที่ท่านต้องการค้นหาโดยประมาณ เช่น 2500)</small></h4>
                                <div class="col-sm-4 blog-main">

                                    <label for="usr">ราคาที่ต้องการค้นหา</label>
                                    <div class="input-group">
<!--                                        <input type="text" name="price" class="form-control" autofocus>-->
                                        <input type="text" name="price" class="form-control" autofocus aria-describedby="basic-addon2">
                                        <span class="input-group-addon" id="basic-addon2"> บาท</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 blog-main">
                                <h4>ค้นหาจากสิ่งอำนวยความสะดวก</h4>
                                </div>
                                <ul>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[1]" value="1" >เครื่อปรับอากาศ</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[2]" value="1" >คีย์การ์ด</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[3]" value="1" >ห้องน้ำรวม</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[4]" value="1" >เครื่องซักผ้าหยอดเหรียญ</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[5]" value="1" >ห้องพัดลม</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[6]" value="1" >WI-FI</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[7]" value="1" >ห้องน้ำส่วนตัว</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[8]" value="1" >เครื่องกดน้ำหยอดเหรียญ</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[9]" value="1" >ตู้เติมเงินโทรศัพท์</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[10]" value="1" >ตู้เย็น</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[11]" value="1" >ทีวี</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[12]" value="1" >ตู้เสื้อผ้า</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[13]" value="1" >ที่จอดรถ</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-4 blog-main">
                                        <li>
                                            <div class="checkbox text-info">
                                                <label><input type="checkbox" name="num[14]" value="1" >เตียงนอน</label>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-sm-12 blog-main">
                                        <center><button type="submit" class="btn btn-primary btn-md"><i class="fa fa-search" aria-hidden="true"></i> ค้นหา</button></center>
                                    </div>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }elseif (isset($_POST['num']) or isset($_POST['price'])){

            if(count(@$_POST['num'])!=0 or $_POST['price']!=""){
//                $query = "SELECT * FROM apartment WHERE ";
                $query = "SELECT *,AVG(review.`re_ score`) AS rating FROM apartment LEFT JOIN review ON apartment.ap_id = review.re_id_ap WHERE apartment.ap_status='อนุมัติแล้ว' ";
            }else{
//                $query = "SELECT * FROM apartment";
                $query = "SELECT *,AVG(review.`re_ score`) AS rating FROM apartment LEFT JOIN review ON apartment.ap_id = review.re_id_ap WHERE apartment.ap_status='อนุมัติแล้ว' ";
            }
            ?>
            <div class="col-sm-12 blog-main">
                <div class="text-center"><h1>ค้นหาอพาร์ทเม้นท์จากสิ่งอำนวยความสะดวก</h1></div>
                <br><br><br>
            </div>
            <div class="col-sm-8 blog-main">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="list-group">
                            <?php
                            for($i=1;$i<=14;$i++){
                                if(isset($_POST['num'][$i]) and $_POST['num'][$i]==1){
                                        $query.="AND fac".$i."='".$_POST['num'][$i]."'";
                                }
                            }
                            if($_POST['price']!="" and @$_POST['num']!=""){
                                $query.=" AND pricestart<=".$_POST['price']." AND priceend>=".$_POST['price']."";
                            }elseif($_POST['price']!="" and @$_POST['num']=="") {
                                $query .= "AND pricestart<=" . $_POST['price'] . " AND priceend>=" . $_POST['price'] . "";
                            }
                            $query .=" GROUP BY apartment.ap_id";
                            $result2 = mysql_query($query, $link);
                            $result = mysql_query($query, $link);
                            if(mysql_fetch_row($result2)==0){
                                echo "<center><label class=\"col-form-label text-danger\" for=\"inputDefault\">ไม่มีข้อมูลจากการค้นหา</label></center>";
                            }else {
                                $n=100;
                                while ($row = mysql_fetch_array($result)) {
                                    ?>
                                    <a href="apartment.php?id=<?=$row["ap_id"]?>">
                                        <button type="button" class="list-group-item">
                                            <div class="row">
                                                <div class="col-sm-4 blog-main">
                                                    <img src="user/img/img_apatman/<?=$row["img"]?>" width="209px" height="130px" style="border:5px ridge  #fff; padding:10;">
                                                </div>
                                                <div class="col-sm-8 blog-main">
                                                    <p><h4><?= $row["apname"] ?></h4></p>
                                                    <p><?= $row["addass"] ?></p>
                                                    <p>
                                                    <div class="pull-left">
                                                        <?= $row["pricestart"] ?> - <?= $row["priceend"] ?> บาท/เดือน
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="star-rating">
                                                            <?php
                                                            for($s=$n-4,$m=5;$n>=$s;$n--,$m--) {
                                                                if ($m == round($row["rating"])) {
                                                                    ?>
                                                                    <input id="star-<?= $n ?>" type="radio" name="rating<?= $n ?>" checked disabled>
                                                                    <label for="star-<?= $n ?>" title="<?= $n ?> stars">
                                                                        <i class="active fa fa-star" aria-hidden="true" style="font-size:small"></i>
                                                                    </label>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <input id="star-<?= $n ?>" type="radio" name="rating<?= $n ?>" disabled>
                                                                    <label for="star-<?= $n ?>" title="<?= $n ?> stars">
                                                                        <i class="active fa fa-star" aria-hidden="true" style="font-size:small"></i>
                                                                    </label>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                        <input type="button" class="btn btn-default btn-sm"
                                                               value="ดูรายละเอียด">
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </button>
                                    </a>

                                    <?php
                                }
                            }
                            ?>
                        </div>
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
            <?php
        }
        ?>
    </div>
</div>


<?php
//if (isset($_POST['num']) or isset($_POST['price']))
//    $query = "SELECT * FROM apartment WHERE ";
//{
//
//    $numrow=1;
//    for($i=1;$i<=14;$i++){
//        if(isset($_POST['num'][$i]) and $_POST['num'][$i]==1){
//            if($numrow==count($_POST['num'])){
//                $query.="fac".$i."='".$_POST['num'][$i]."'";
//            }else {
//                $query.= "fac" . $i . "='" . $_POST['num'][$i] . "' AND ";
//            }
//            $numrow++;
//        }
//    }
//    if(isset($_POST['price']) and $_POST['price']!=""){
//        $query.=" AND pricestart=".$_POST['price']." AND priceend=".$_POST['price']."";
//    }
// echo $query;
//
////    $result = mysql_query($query, $link);
//}
include ("footer.php");

?>
