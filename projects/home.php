<!DOCTYPE html>
<?php
session_start();
include ("top.php");
include ("conn.php");
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 blog-main">
            <div class="text-center"><h1>รวมอพาร์ทเม้นท์ในเมืองจังหวัดสุราษฎร์ธานี</h1></div>
            <br><br><br>
        </div>
        <div class="col-sm-8 blog-main">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#home">อพาร์ทเม้นท์แนะนำ</a></li>
                <li><a data-toggle="tab" href="#menu1">อพาร์ทเม้นใหม่</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
                                $query = "SELECT * ,AVG(review.`re_ score`) AS rating FROM review LEFT JOIN apartment ON review.re_id_ap =apartment.ap_id WHERE apartment.ap_status='อนุมัติแล้ว' GROUP BY apartment.ap_id ORDER BY rating DESC";
                                $result = mysql_query($query, $link);
                                $n=1000;
                                while ($row = mysql_fetch_array($result)) {
                                    ?>
                                    <a href="apartment.php?id=<?=$row["ap_id"]?>"><button type="button" class="list-group-item">
                                            <div class="row">
                                                <div class="col-sm-4 blog-main">
                                                    <img src="user/img/img_apatman/<?=$row["img"]?>" width="209px" height="130px" style="border:5px ridge  #fff; padding:10;">
                                                    <!--                                                <img src="user/img/img_apatman/--><!--" class="img-thumbnail" alt="Cinque Terre">-->
                                                </div>
                                                <div class="col-sm-8 blog-main">
                                                    <p><h4><?=$row["apname"]?></h4></p>
                                                    <p><?=$row["addass"]?></p>
                                                    <p><div class="pull-left">
                                                        <?=number_format($row["pricestart"])?> - <?=number_format($row["priceend"])?> บาท/เดือน
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
                                                        <input type="button" class="btn btn-default btn-sm" value="ดูรายละเอียด">
                                                    </div></p>
                                                </div>
                                            </div>
                                        </button></a>

                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="list-group">
                                <div class="list-group">
                                    <?php
                                    $query = "SELECT *,AVG(review.`re_ score`) AS rating FROM apartment LEFT JOIN review ON apartment.ap_id = review.re_id_ap WHERE apartment.ap_status='อนุมัติแล้ว' GROUP BY apartment.ap_id ORDER BY apartment.ap_date DESC";
                                    $result = mysql_query($query, $link);
                                    while ($row = mysql_fetch_array($result)) {
                                        ?>
                                        <a href="apartment.php?id=<?=$row["ap_id"]?>"><button type="button" class="list-group-item">
                                                <div class="row">
                                                    <div class="col-sm-4 blog-main">
                                                        <img src="user/img/img_apatman/<?=$row["img"]?>" width="209px" height="130px" style="border:5px ridge  #fff; padding:10;">
                                                        <!--                                                <img src="user/img/img_apatman/--><?//=$row["img"]?><!--" class="img-thumbnail" alt="Cinque Terre">-->
                                                    </div>
                                                    <div class="col-sm-8 blog-main">
                                                        <p><h4><?=$row["apname"]?></h4></p>
                                                        <p><?=$row["addass"]?></p>
                                                        <p><div class="pull-left">
                                                            <?=number_format($row["pricestart"])?> - <?=number_format($row["priceend"])?> บาท/เดือน
                                                        </div>
                                                        <div class="pull-right">
                                                            <img src="img/new_icon.gif" width="30px" height="auto">
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
                                                            <input type="button" class="btn btn-default btn-sm" value="ดูรายละเอียด">
                                                        </div></p>
                                                    </div>
                                                </div>
                                            </button></a>

                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 blog-main">
            <div class="panel panel-default">
                <div class="panel-heading">สถานที่ท่องเที่ยวแนะนำ</div>
                <div class="panel-body">
                    <div class="list-group">
                        <button type="button" class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4 blog-main">
                                    <img src="img/20.jpg" width="100px" height="62px" style="border:5px ridge  #fff; padding:10;">
                                </div>
                                <div class="col-sm-8 blog-main">
                                    <p> &nbsp;&nbsp;ศาลหลักเมือง</p>

                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include ("footer.php");
?>
