<!DOCTYPE html>
<?php
session_start();
include ("top.php");
include ("conn.php");
?>
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
    function fncSubmit() {
        document.getElementById('Showmail').innerHTML = '';
        if (document.form1.msg.value < 1) {
            document.getElementById('Showmail').innerHTML = 'ไม่มีอีเมล์นี้ในระบบ กรุณาตรวจสอบใหม่อีกครั้ง';
            document.form1.email.focus();
            return false;
        }
    };
</script>
<div class="container">
    <div class="row">
        <div class="col-sm-12 blog-main">
            <div class="text-center"><h1>ลืมรหัสผ่าน?</h1></div>
            <br><br><br>
        </div>
        <div class="col-sm-12 blog-main">
            <div class="col-sm-4 blog-main">
            </div>
            <form name="form1" method="post" autocomplete="off" action="sendmail.php"  OnSubmit="return fncSubmit();">
            <div class="col-sm-4 blog-main">
                <div class="text-center">
                    <div class="form-group">
                        <label for="usr">กรอกอีเมล์ของคุณ</label>
                        <input type="email" name="email" onkeyup="chmail(this.value)" placeholder="อีเมล์" class="form-control" required><br>
                        <label class="col-form-label text-danger" id="Showmail" for="inputDefault"></label>
                        <input type="hidden" name="checkmail" id="msg">
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-check-square-o" aria-hidden="true"></i> ส่งข้อมูล</button>
                </div>
            </div>
            </form>
            <div class="col-sm-4 blog-main">
            </div>
        </div>
    </div>
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>


<?php
include ("footer.php");
?>
