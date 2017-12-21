<div class="block-header">
    <h2>
        ข้อมูลทคำขอลงทะเบียน
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    คำขอลงทะเบียน
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="5%" class="text-center">ลำดับ</th>
                        <th width="50%" class="text-center">ชื่อ-สกุล</th>
                        <th width="20%" class="text-center">ดูข้อมูล</th>
                        <th width="25%" class="text-center">จัดการ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num=1;
                    $query="SELECT * FROM user WHERE level='รออนุมัติ' ORDER BY date DESC";
                    $result = mysql_query($query,$link);
                    while($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
                            <th class="text-center"><?=$num?></th>
                            <td class="text-center"><?=$row["nameu"]?></td>
                            <td class="text-center"><a href="?url=profile.php&id=<?=$row["userid"]?>""><button class="btn btn-success waves-effect" type="button">ดูข้อมูล</button></a></td>
                            <td class="text-center"><a href="?url=datauser.php&ar=<?=$row["userid"]?>"><button class="btn btn-primary waves-effect" type="button" Onclick="return Confirm();">อนุมัติ</button></a> <a href="?url=datauser.php&nar=<?=$row["userid"]?>"><button class="btn btn-danger waves-effect" type="button" Onclick="return NoConfirm();">ไม่อนุมัติ</button></a></td>
                        </tr>
                        <?php
                        $num++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function Confirm()
    {
        var x = confirm("ท่านต้องการอนุมัติบุคคลนี้ เป็นสมชิกใช่หรือไม่!!");
        if (x)
            return true;
        else
            return false;
    }
    function NoConfirm()
    {
        var x = confirm("ท่านไม่ต้องการอนุมัติบุคคลนี้ เป็นสมชิกใช่หรือไม่!!");
        if (x)
            return true;
        else
            return false;
    }
</script>

<?php
if(isset($_GET["ar"])){
    $query = "UPDATE user  SET level = 'อนุมัติแล้ว'  WHERE userid =".$_GET["ar"]." ";
    $result = mysql_query($query, $link);
    echo "<script>alert('ท่านได้ทำรายการอนุมัติ สำเร็จ');window.location.href='?url=datauser.php';</script>";
}
elseif (isset($_GET["nar"])){
    $query = "UPDATE user  SET level = 'ไม่อนุมัติ'  WHERE userid =".$_GET["nar"]." ";
    $result = mysql_query($query, $link);
    echo "<script>alert('ท่านได้ทำรายการไม่อนุมัติ สำเร็จ');window.location.href='?url=datauser.php';</script>";
}
?>