<div class="block-header">
    <h2>
        ข้อมูลที่พักขอลงประกาศ
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    คำขอประกาศ
                    <small>*หากท่านต้องการแสดงข้อมูลทรายละเอียดั้งหมดของอพาร์ทเมนต์ ให้คลิกในช่องอาพาร์ทเม้นนั้นๆ</small>
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="5%" class="text-center">ลำดับ</th>
                        <th width="50%" class="text-center">ชื่อที่พัก</th>
                        <th width="25%" class="text-center">สถานะ</th>
                        <th width="20%" class="text-center">จัดการ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num=1;
                    $query="SELECT ap_id,apname,ap_status FROM apartment WHERE ap_status='รออนุมัติ' ORDER BY ap_date DESC";
                    $result = mysql_query($query,$link);
                    while($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
                            <th class="text-center"><?=$num?></th>
                            <td ><?=$row["apname"]?></td>
                            <td class="text-center"><?=$row["ap_status"]?></td>
                            <td class="text-center"><a href="?url=apartment.php&ar=<?=$row["ap_id"]?>"><button class="btn btn-primary waves-effect" type="button"  Onclick="return firm();">อนุมัติ</button></a> <a href="?url=apartment.php&nar=<?=$row["ap_id"]?>"><button class="btn btn-danger waves-effect" type="button" Onclick="return NoConfirm();">ไม่อนุมัติ</button></a></td>
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
    function firm()
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
    $query = "UPDATE apartment  SET ap_status = 'อนุมัติแล้ว'  WHERE ap_id =".$_GET["ar"]." ";
    $result = mysql_query($query, $link);
    echo "<script>alert('ท่านได้ทำรายการอนุมัติ สำเร็จ');window.location.href='?url=apartment.php';</script>";
}
elseif (isset($_GET["nar"])){
    $query = "UPDATE apartment  SET ap_status = 'ไม่อนุมัติ'  WHERE ap_id =".$_GET["nar"]." ";
    $result = mysql_query($query, $link);
    echo "<script>alert('ท่านได้ทำรายการไม่อนุมัติ สำเร็จ');window.location.href='?url=apartment.php';</script>";
}
?>