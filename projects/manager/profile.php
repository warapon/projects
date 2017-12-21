<div class="block-header">
    <h2>
        ข้อมูลส่วนตัว
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>

                    แก้ไขข้อมูลส่วนตัวของฉัน
                    <small>*สำเนาบัตรที่ใช้ลงทะเบียน ไม่สามารถเปลียนแปลงและแก้ไขได้</small>
                </h2>
            </div>
            <div class="body table-responsive">
                <?php
                $query = "SELECT * FROM user WHERE userid='" . $_GET["id"] . "'";
                $result = mysql_query($query, $link);
                $row = mysql_fetch_array($result);
                ?>
                <form method="POST" action="">
                    <input type="hidden" name="ch" value="edit">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name"
                                       value="<?= $row["nameu"] ?>" <?php if (@$_GET["change"] != "edit") echo "readonly"; ?>
                                       autofocus required>
                                <label class="form-label">ชื่อ-นามสกุล</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email"
                                       value="<?= $row["emailu"] ?>" <?php if (@$_GET["change"] != "edit") echo "readonly"; ?>
                                       required>
                                <label class="form-label">อีเมล์</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="level" value="<?= $row["tel"] ?>" readonly required>
                                <label class="form-label">เบอร์โทรศัพท์</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="level" value="<?= $row["level"] ?>" readonly required>
                                <label class="form-label">สถานะ</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">สำเนาบัตรที่ใช้ลงทะเบียน</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="../img/img_idcard/<?=$row["img"]?>" data-sub-html="Demo Description">
                            <img class="img-responsive thumbnail" src="../img/img_idcard/<?=$row["img"]?>">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
