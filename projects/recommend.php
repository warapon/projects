<?php
$query02 = "SELECT * ,AVG(review.`re_ score`) AS rating FROM review LEFT JOIN apartment ON review.re_id_ap =apartment.ap_id WHERE apartment.ap_status='อนุมัติแล้ว' GROUP BY apartment.ap_id ORDER BY rating DESC LIMIT 7";
$result02 = mysql_query($query02, $link);
$n02=1000;
while ($row02 = mysql_fetch_array($result02)) {
?>
<a href="apartment.php?id=<?=$row02["ap_id"]?>"><button type="button" class="list-group-item">
        <div class="row">
            <div class="col-sm-4 blog-main">
                <img src="user/img/img_apatman/<?=$row02["img"]?>" width="100px" height="62px" style="border:5px ridge  #fff; padding:10;">
                <!--                                                <img src="user/img/img_apatman/--><!--" class="img-thumbnail" alt="Cinque Terre">-->
            </div>
            <div class="col-sm-8 blog-main">
                <p> &nbsp;&nbsp;<?=$row02["apname"]?></p>
                <p><div class="pull-left">
                    &nbsp;&nbsp;<?=number_format($row02["pricestart"])?> - <?=number_format($row02["priceend"])?> บาท/เดือน
                </div>
                <div class="pull-right">
                    <div class="star-rating">
                        <?php
                        for($s02=$n02-4,$m02=5;$n02>=$s02;$n02--,$m02--) {
                            if ($m02 == round($row02["rating"])) {
                                ?>
                                <input id="star-<?= $n02 ?>" type="radio" name="rating<?= $n02 ?>" checked disabled>
                                <label for="star-<?= $n02 ?>" title="<?= $n02 ?> stars">
                                    <i class="active fa fa-star" aria-hidden="true" style="font-size:small"></i>
                                </label>
                                <?php
                            } else {
                                ?>
                                <input id="star-<?= $n02 ?>" type="radio" name="rating<?= $n02 ?>" disabled>
                                <label for="star-<?= $n02 ?>" title="<?= $n02 ?> stars">
                                    <i class="active fa fa-star" aria-hidden="true" style="font-size:small"></i>
                                </label>
                                <?php
                            }
                        }
                        ?>

                    </div>
                </div></p>
            </div>
        </div>
    </button></a>

<?php
}
?>