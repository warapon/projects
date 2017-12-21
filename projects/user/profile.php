<div class="block-header">
    <h2>
        ข้อมูลส่วนตัว
    </h2>
</div>
<?php
if(@$_GET["change"]!="pwd") {
    ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <?php
                        if (@$_GET["change"] != "edit") {
                            ?>
                            ข้อมูลส่วนตัวของฉัน
                            <small>*หากท่านต้องการแก้ไขข้อมูลของท่าน ให้คลิกที่ปุ่มแก้ไขข้อมูล</small>
                            <?php
                        } else {
                            ?>
                            แก้ไขข้อมูลส่วนตัวของฉัน
                            <small>*สำเนาบัตรที่ใช้ลงทะเบียน ไม่สามารถเปลียนแปลงและแก้ไขได้</small>
                            <?php
                        }
                        ?>
                    </h2>
                </div>
                <div class="body table-responsive">
                    <?php
                    $query = "SELECT * FROM user WHERE userid='" . $_SESSION['id'] . "'";
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
                        <div class="col-sm-12">
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
                        <?php
                        if (@$_GET["change"] == "edit") {
                        ?>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary waves-effect">
                                <i class="material-icons">get_app</i>
                                <span>ยืนยัน</span>
                            </button>
                    </form>
                    <a href="?url=profile.php">
                        <button type="button" class="btn btn-danger waves-effect">
                            <i class="material-icons">highlight_off</i>
                            <span>ยกเลิก</span>
                        </button>
                    </a>
                </div>
                <?php
                } else {
                    ?>
                    <div class="col-sm-12 text-center">
                        <a href="?url=profile.php&change=edit">
                            <button type="button" class="btn bg-pink waves-effect">
                                <i class="material-icons">build</i>
                                <span>แก้ไขข้อมูล</span>
                            </button>
                        </a>
                        <a href="?url=profile.php&change=pwd">
                            <button type="button" class="btn bg-orange waves-effect">
                                <i class="material-icons">vpn_key</i>
                                <span>เปลี่ยนรหัสผ่าน</span>
                            </button>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}else {
    ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        เปลี่ยนรหัสผ่านใหม่
                    </h2>
                </div>
                <div class="body table-responsive">
                    <?php
                    $query = "SELECT * FROM user WHERE userid='" . $_SESSION['id'] . "'";
                    $result = mysql_query($query, $link);
                    $row = mysql_fetch_array($result);
                    ?>
                    <form name="form1" method="POST" action="" OnSubmit="return fncSubmit();">
                        <input type="hidden" name="ch" value="pass">
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" id="txtPassword" autofocus required>
                                    <label class="form-label">รหัสผ่านใหม่</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirm" id="txtConPassword" required>
                                    <label class="form-label">อีกครั้ง</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <label class="col-form-label text-danger" id="Show2" for="inputDefault"></label>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary waves-effect">
                                <i class="material-icons">get_app</i>
                                <span>ยืนยัน</span>
                            </button>
                    </form>
                    <a href="?url=profile.php">
                        <button type="button" class="btn btn-danger waves-effect">
                            <i class="material-icons">highlight_off</i>
                            <span>ยกเลิก</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>
<script language="javascript">
    function fncSubmit()
    {
        if(document.form1.txtPassword.value != document.form1.txtConPassword.value)
        {
            //                            alert('รหัสผ่านใหม่ขท่านไม่ตรงกัน กรุณาตรวจสอบใหม่อีกครั้ง');
            document.getElementById('Show2').innerHTML = 'รหัสผ่านใหม่ของท่านไม่ตรงกัน กรุณาตรวจสอบใหม่อีกครั้ง';
            document.form1.txtConPassword.focus();
            return false;
        }
        document.form1.submit();
    }
</script>

<?php
if(@$_POST["ch"]=="edit"){
    $query="UPDATE user SET nameu='".$_POST["name"]."', emailu='".$_POST["email"]."' WHERE userid='".$_SESSION["id"]."';";
    mysql_query($query,$link);
    echo "<meta http-equiv='refresh' content='0;url=?url=profile.php'>";

}elseif(@$_POST["ch"]=="pass"){
    $query="UPDATE user SET password='".$_POST["password"]."' WHERE userid='".$_SESSION["id"]."';";
    mysql_query($query,$link);
    echo "<meta http-equiv='refresh' content='0;url=../logout.php'>";
}
?>
