<!DOCTYPE html>
<?php
session_start();
include ("top.php");
include ("conn.php");
?>

<div class="container">
    <div class="row">
        <?php
        if(!isset($_GET["sh"])) {
            ?>
            <div class="col-sm-12 blog-main">
                <div class="text-center"><h1>ค้นหาอพาร์ทเม้นท์ในเมืองจังหวัดสุราษฎร์ธานี</h1></div>
                <br><br><br>
            </div>
            <div class="col-sm-12 blog-main">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="footer_dv">
                            <h4>ค้นหาจากสถานศึกษา</h4>
                            <ul>
                                <?php
                                $query = "SELECT * FROM  nearby_places WHERE ne_main='สถานศึกษา'";
                                $result = mysql_query($query, $link);
                                while ($row = mysql_fetch_array($result)) {
                                    ?>
                                    <div class="col-sm-6 blog-main">
                                        <li><a href="?sh=<?=$row["ne_id"]?>&name=<?=$row["ne_name"]?>"><?=$row["ne_name"]?></a></li>
                                    </div>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }else {
            ?>
            <div class="col-sm-12 blog-main">
                <div class="text-center"><h1>อพาร์ทเม้นท์ใกล้<?=$_GET["name"]?></h1></div>
                <br><br><br>
            </div>
            <div class="col-sm-8 blog-main">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="list-group">
                            <?php
//                            $query = "SELECT * FROM apartment WHERE nearby='".$_GET["sh"]."'";
                            $query = "SELECT *,AVG(review.`re_ score`) AS rating FROM apartment LEFT JOIN review ON apartment.ap_id = review.re_id_ap WHERE apartment.ap_status='อนุมัติแล้ว' AND nearby='".$_GET["sh"]."' GROUP BY apartment.ap_id ORDER BY rating DESC";
                            $result = mysql_query($query, $link);
                            if(mysql_fetch_row($result)==0){
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
include ("footer.php");
?>
