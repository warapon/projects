<div class="block-header">
    <h2>
        ข้อมูลที่พัก
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ข้อมูลที่พักทั้งหมด
                    <small>*หากท่านต้องการแสดงข้อมูลทรายละเอียดั้งหมดของอพาร์ทเมนต์ ให้คลิกในช่องอาพาร์ทเม้นนั้นๆ</small>
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="5%" class="text-center">ลำดับ</th>
                        <th width="50%" class="text-center">ชื่อที่พัก</th>
                        <th width="20%" class="text-center">ผู้เข้าชม</th>
                        <th width="25%" class="text-center">สถานะ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num=1;
                    $query="SELECT ap_id,apname,ap_status FROM apartment WHERE ap_status!='รออนุมัติ' ORDER BY ap_date DESC";
                    $result = mysql_query($query,$link);
                    while($row = mysql_fetch_array($result)) {
                        ?>
                        <tr onclick="window.open('../apartment.php?id=<?=$row["ap_id"]?>')">
                            <th class="text-center"><?=$num?></th>
                            <td><?=$row["apname"]?></td>
                            <td class="text-center"></td>
                            <td class="text-center"><?=$row["ap_status"]?></td>
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