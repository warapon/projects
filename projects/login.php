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

        <div class="col-sm-6 blog-main">
            <div class="panel panel-default">
                <div class="panel-heading">สมัครสมาชิกฟรี</div>
                <div class="panel-body">
                    <form name="form1" method="post" autocomplete="off" action="" enctype="multipart/form-data"  OnSubmit="return fncSubmit();">
                        <input type="hidden" name="adduser"value="adduser">
                        <div class="form-group">
                            <label for="usr">ชื่อ <small class="text-primary">(ไม่ต้องใส่คำนำหน้านาม)</small></label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">สกุล</label>
                            <input type="text" name="lname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">อีเมล์</label>
                            <input type="email" name="email" id="email" onkeyup="chmail(this.value)" class="form-control" required>
                            <label class="col-form-label text-danger" id="Showmail" for="inputDefault"></label>
                            <input type="hidden" name="checkmail" id="msg">
                        </div>
                        <div class="form-group">
                            <label for="usr">เบอร์โทรศัพท์</label>
                            <input type="text" name="tel" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">รูปสำเนาบัตรประชาชน</label>
                            <input type="file" name="fileupload" class="form-control" required>
                            <label class="col-form-label text-danger" id="Show" for="inputDefault"></label>
                        </div>
                        <div class="form-group">
                            <label for="usr">ผู้ใช้</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">รหัสผ่าน</label>
                            <input type="password" name="password" id="txtPassword" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="usr">รหัสผ่านอีกครั้ง</label>
                            <input type="password" name="confirm" id="txtConPassword" class="form-control" required>
                            <label class="col-form-label text-danger" id="Show2" for="inputDefault"></label>
                        </div>
                        <center><button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-user-plus" aria-hidden="true"></i> ลงทะเบียน</button></center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 blog-main">
            <div class="panel panel-default">
                <div class="panel-heading">Login เข้าสู่ระบบ</div>
                <div class="panel-body">
                    <form method="post" action="checklogin.php">
                        <div class="form-group">
                            <label for="usr">ผู้ใช้</label>
                            <input type="text" name="username" class="form-control" id="usr" <?php if(@$_GET['err']) echo "style='border-color:red' autofocus";?> required>
                        </div>
                        <div class="form-group">
                            <label for="usr">รหัสผ่าน</label>
                            <input type="password" name="password" class="form-control" id="pwd" <?php if(@$_GET['err']) echo "style='border-color:red'";?> required>
                        </div>
                        <?php
                        if (@$_GET['err']){
                            echo "<center>";
                            echo "<center><font color='red'>*ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</font></center>";

                        }
                        ?>
                        <center><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ</button></center>
                        <a href="forgot.php">[ ลืมรหัสผ่าน ]</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    function chmail(val)
    {
        $.ajax({
            type:'post',
            url:'checkMail.php',// put your real file name
            data:'mail='+val,
            success:function(data){
                document.getElementById('msg').value = data;
            }
        });
    }
    function fncSubmit()
    {
        document.getElementById('Showmail').innerHTML = '';
        document.getElementById('Show').innerHTML = '';
        document.getElementById('Show2').innerHTML = '';

        if(document.form1.msg.value > 0){
            document.getElementById('Showmail').innerHTML = 'อีเมล์นี้มีผู้ใช้แล้ว กรุณาตรวจสอบใหม่อีกครั้ง';
            document.form1.email.focus();
            return false;
        }

        var extall="jpg,jpeg,gif,png";

        file = document.form1.fileupload.value;
        ext = file.split('.').pop().toLowerCase();
        if(parseInt(extall.indexOf(ext)) < 0)
        {
            document.getElementById('Show').innerHTML = 'กรุณาเลือกไฟล์ที่มีสกุลเป็น : '+ extall+' เท่านั้น';
            return false;
        }
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
include ("footer.php");

if(isset($_POST["adduser"]) and $_POST["adduser"]=="adduser"){
    $file = substr(@$_FILES['fileupload']['name'],-4);
    $tempfile = "img/img_idcard/".date("YmdHis").$file;
    $tempfile2 = date("YmdHis").$file;

    $query="INSERT INTO user (nameu, emailu, tel, username, password, status, level, img, date) VALUES (
  '".$_POST["name"]."  ".$_POST["lname"]."'
  ,'".$_POST["email"]."'
  ,'".$_POST["tel"]."'
  ,'".$_POST["user"]."'
  ,'".$_POST["password"]."'
  ,'user'
  ,'รออนุมัติ'
  ,'".$tempfile2."'
  ,NOW()

)";
    mysql_query($query,$link);
    copy(@$_FILES["fileupload"]["tmp_name"], $tempfile);

    move_uploaded_file(@$_FILES["fileupload"]["tmp_name"], $tempfile);
    ?>
    <script>alert('ท่านได้ทำการสมัครสมาชิกสำเร็จแล้ว!')</script>
<?php
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}
?>
