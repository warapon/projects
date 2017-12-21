<div class="block-header">
    <h2>
        ข้อมูลสมาชิก
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ข้อมูลสมาชิกทั้งหมด
                    <small>*หากท่านต้องการแสดงข้อมูลทรายละเอียดั้งหมดของอพาร์ทเมนต์ ให้คลิกในช่องอาพาร์ทเม้นนั้นๆ</small>
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="5%" class="text-center">ลำดับ</th>
                        <th width="30%" class="text-center">ชื่อ-สกุล</th>
                        <th width="20%" class="text-center">อีเมล์</th>
                        <th width="25%" class="text-center">สิทธ์ใช้งาน</th>
                        <th width="20%" class="text-center">สถานะ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num=1;
                    $query="SELECT * FROM user WHERE level!='รออนุมัติ' ORDER BY date DESC";
                    $result = mysql_query($query,$link);
                    while($row = mysql_fetch_array($result)) {
                        ?>
                        <tr onclick="window.open('../apartment.php?id=<?=$row["userid"]?>')">
                            <th class="text-center"><?=$num?></th>
                            <td><?=$row["nameu"]?></td>
                            <td class="text-center"><?=$row["emailu"]?></td>
                            <td class="text-center"><?=$row["status"]?></td>
                            <td class="text-center"><?=$row["level"]?></td>
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