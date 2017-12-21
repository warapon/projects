
<div class="container-fluid">
    <div class="block-header">
        <h2>
            เพิ่มข้อมูลที่พัก
        </h2>
    </div>

    <!-- Advanced Form Example With Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>กรุณากรอกข้อมูลอพาร์ทเมนต์ของคุณให้ครบถ้วน</h2>
                </div>
                <div class="body">
                    <form id="wizard_with_validation" enctype="multipart/form-data" method="POST" action="">
                        <h3>ขั้นตอนที่ 1 >></h3>
                        <fieldset>
                            <div class="col-sm-7">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">ชื่ออพาร์ทเมนต์</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="pricestart" required>
                                        <label class="form-label">ราคาเริ่ม</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <label class="form-label">ถึง</label>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="priceend" required>
                                        <label class="form-label">ราคาสิ้นสุด</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">อีเมลล์</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="tel" class="form-control" name="tel" required>
                                        <label class="form-label">เบอร์โทรศัพท์</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="add" class="form-control no-resize" placeholder="ที่อยู่" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label class="form-label"><h3>ที่ตั้งอพาร์ทเมนต์</h3></label>
                            </div>
                            <div class="col-sm-12">
                                <div id="map_canvas" class="gmap"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="lat_value" name="lat" readonly>
                                        <label class="form-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="lon_value" name="long" readonly>
                                        <label class="form-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="zoom_value" name="zoom" readonly>
                                        <label class="form-label"></label>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <!--                        ------- ขั้นตอนที่ 2 --------->

                        <h3>ขั้นตอนที่ 2 >></h3>
                        <fieldset>
                            <div class="col-sm-12">
                                <label class="form-label"><h3>สิ่งอำนวยความสะดวก</h3></label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac1" id="md_checkbox_1" class="chk-col-green" value="1" />
                                <label for="md_checkbox_1">เครื่อปรับอากาศ</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac2" id="md_checkbox_2" class="chk-col-green" value="1" />
                                <label for="md_checkbox_2">คีย์การ์ด</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac3" id="md_checkbox_3" class="chk-col-green" value="1" />
                                <label for="md_checkbox_3">ห้องน้ำรวม</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac4" id="md_checkbox_4" class="chk-col-green" value="1" />
                                <label for="md_checkbox_4">เครื่องซักผ้าหยอดเหรียญ</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac5" id="md_checkbox_5" class="chk-col-green" value="1" />
                                <label for="md_checkbox_5">ห้องพัดลม</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox"  name="fac6" id="md_checkbox_6" class="chk-col-green" value="1" />
                                <label for="md_checkbox_6">WI-FI</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac7" id="md_checkbox_7" class="chk-col-green" value="1" />
                                <label for="md_checkbox_7">ห้องน้ำส่วนตัว</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac8" id="md_checkbox_8" class="chk-col-green" value="1" />
                                <label for="md_checkbox_8">เครื่องกดน้ำหยอดเหรียญ</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac9" id="md_checkbox_9" class="chk-col-green" value="1" />
                                <label for="md_checkbox_9">ตู้เติมเงินโทรศัพท์</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac10" id="md_checkbox_10" class="chk-col-green" value="1" />
                                <label for="md_checkbox_10">ตู้เย็น</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac11" id="md_checkbox_11" class="chk-col-green" value="1" />
                                <label for="md_checkbox_11">ทีวี</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac12" id="md_checkbox_12" class="chk-col-green" value="1" />
                                <label for="md_checkbox_12">ตู้เสื้อผ้า</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac13" id="md_checkbox_13" class="chk-col-green" value="1" />
                                <label for="md_checkbox_13">ที่จอดรถ</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac14" id="md_checkbox_14" class="chk-col-green" value="1" />
                                <label for="md_checkbox_14">เตียงนอน</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="fac15" id="md_checkbox_15" class="chk-col-green" value="1" />
                                <label for="md_checkbox_15">เลือกทั้งหมด</label>
                            </div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label"><h3>รายละเอียด/ข้อมูลเพิ่มเติม</h3></label>
                                <div class="body">
                                    <textarea id="ckeditor" name="des"></textarea>
                                </div>
                            </div>

                        </fieldset>

                        <h3>ขั้นตอนที่ 3 >></h3>
                        <fieldset>
                            <div class="col-sm-12">
                                <label class="form-label"><h3>สถานที่ใกล้เคียง</h3></label>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label"><h4>สถานศึกษา</h4></label>
                            </div>
                            <?php
                            $num=1;
                            $query="SELECT * FROM nearby_places WHERE ne_main='สถานศึกษา'";
                            $result = mysql_query($query,$link);
                            while($row = mysql_fetch_array($result)){
                                ?>
                                <div class="col-sm-3">
                                    <input name="nearby" type="radio" id="radio_<?=$num?>" class="with-gap radio-col-red" value="<?=$row["ne_id"]?>" required />
                                    <label for="radio_<?=$num?>"><?=$row["ne_name"]?></label>
                                </div>
                                <?php
                                $num++;
                            }
                            ?>
                            <div class="col-sm-12">
                                <label class="form-label"><h4>โรงพยาบาล</h4></label>
                            </div>
                            <?php
                            $query="SELECT * FROM nearby_places WHERE ne_main='โรงพยาบาล'";
                            $result = mysql_query($query,$link);
                            while($row = mysql_fetch_array($result)){
                                ?>
                                <div class="col-sm-3">
                                    <input name="nearby" type="radio" id="radio_<?=$num?>" class="with-gap radio-col-red" value="<?=$row["ne_id"]?>" required />
                                    <label for="radio_<?=$num?>"><?=$row["ne_name"]?></label>
                                </div>
                                <?php
                                $num++;
                            }
                            ?>
                            <div class="col-sm-12">
                                <label class="form-label"><h4>สถานที่เด่น</h4></label>
                            </div>
                            <?php
                            $query="SELECT * FROM nearby_places WHERE ne_main='สถานที่เด่น'";
                            $result = mysql_query($query,$link);
                            while($row = mysql_fetch_array($result)){
                                ?>
                                <div class="col-sm-3">
                                    <input name="nearby" type="radio" id="radio_<?=$num?>" class="with-gap radio-col-red" value="<?=$row["ne_id"]?>" required />
                                    <label for="radio_<?=$num?>"><?=$row["ne_name"]?></label>
                                </div>
                                <?php
                                $num++;
                            }
                            ?>
                            <div class="col-sm-12">
                                <label class="form-label"><h3>รูปหน้าหลักอพาร์ทเมนต์</h3></label>
                                <em>(เพื่อให้รูปภาพออกมาสวยงาน กรุณาเลื่อกรูปที่มีขาด 624px x 378px)</em>
                            </div>
                            <div class="col-sm-12">
                                <input type="file" accept="image/*" name="fileupload" onchange="loadFile(event)" required>
                                <img id="output"/>
                                <script>
                                    var loadFile = function(event) {
                                        var reader = new FileReader();
                                        reader.onload = function(){
                                            var output = document.getElementById('output');
                                            output.src = reader.result;
                                        };
                                        reader.readAsDataURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                            <div class="col-sm-12">
                                <div class="dz-message">
                                    <h3>รูปที่ต้องการโชว์หน้าประกาศ</h3>
                                    <em>(สามารถเลือกรูปได้หลายรูป)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file[]" type="file" multiple />
                                </div>
                            </div>
                        </fieldset>

                        <h3>ขั้นตอนสุดท้าย</h3>
                        <fieldset>
                            <label for="acceptTerms-2">ยอมรับเงื่อนไขว่าข้อมูลของท่านทั้งหมดเป็นความจริงทุกประการ หากมีการตรวจสอบแล้วพบว่ามีข้อมูลไม่เป็นความจริง
                                หรือละเมิดสิทธิของผู้อื่น ทางผู้ดูแลเว็บไซต์จะทำการลบข้อมูลของท่านทั้งหมดโดยไม่ต้องแจ้งให้ทราบล่วงหน้า.</label>

                            <div class="col-sm-12">
                                <input id="acceptTerms-2" name="chack" type="checkbox" value="chack" required>
                                <label for="acceptTerms-2">ยอมรับเงื่อนไข</label>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Advanced Form Example With Validation -->
</div>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    var geocoder; // กำหนดตัวแปรสำหรับ เก็บ Geocoder Object ใช้แปลงชื่อสถานที่เป็นพิกัด
    var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
    var my_Marker; // กำหนดตัวแปรสำหรับเก็บตัว marker
    var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
    window.onload = getLocation;
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
            navigator.geolocation.getCurrentPosition(initialize);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        //                x.innerHTML = "Latitude: " + position.coords.latitude +
        //                    "<br>Longitude: " + position.coords.longitude;
        $("#lat_value").val(position.coords.latitude);
        $("#lon_value").val(position.coords.longitude);
        $("#zoom_value").val("17");

    }

    function initialize(position) { // ฟังก์ชันแสดงแผนที่
        GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
        geocoder = new GGM.Geocoder(); // เก็บตัวแปร google.maps.Geocoder Object
        // กำหนดจุดเริ่มต้นของแผนที่
        var my_Latlng  = new GGM.LatLng(position.coords.latitude,position.coords.longitude);
        var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
        // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
        var my_DivObj=$("#map_canvas")[0];
        // กำหนด Option ของแผนที่
        var myOptions = {
            zoom: 17, // กำหนดขนาดการ zoom
            center: my_Latlng , // กำหนดจุดกึ่งกลาง จากตัวแปร my_Latlng
            mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่ จากตัวแปร my_mapTypeId
        };
        map = new GGM.Map(my_DivObj,myOptions); // สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map

        my_Marker = new GGM.Marker({ // สร้างตัว marker ไว้ในตัวแปร my_Marker
            position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
            map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
            draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้
            title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
        });

        // กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
        GGM.event.addListener(my_Marker, 'dragend', function() {
            var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
            map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker
            $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
            $("#lon_value").val(my_Point.lng());  // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value
            $("#zoom_value").val(map.getZoom());  // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_valu
        });

        // กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
        GGM.event.addListener(map, 'zoom_changed', function() {
            $("#zoom_value").val(map.getZoom());   // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
        });

    }
    $(function(){
        // ส่วนของฟังก์ชันค้นหาชื่อสถานที่ในแผนที่
        var searchPlace=function(){ // ฟังก์ชัน สำหรับคันหาสถานที่ ชื่อ searchPlace
            var AddressSearch=$("#namePlace").val();// เอาค่าจาก textbox ที่กรอกมาไว้ในตัวแปร
            if(geocoder){ // ตรวจสอบว่าถ้ามี Geocoder Object
                geocoder.geocode({
                    address: AddressSearch // ให้ส่งชื่อสถานที่ไปค้นหา
                },function(results, status){ // ส่งกลับการค้นหาเป็นผลลัพธ์ และสถานะ
                    if(status == GGM.GeocoderStatus.OK) { // ตรวจสอบสถานะ ถ้าหากเจอ
                        var my_Point=results[0].geometry.location; // เอาผลลัพธ์ของพิกัด มาเก็บไว้ที่ตัวแปร
                        map.setCenter(my_Point); // กำหนดจุดกลางของแผนที่ไปที่ พิกัดผลลัพธ์
                        my_Marker.setMap(map); // กำหนดตัว marker ให้ใช้กับแผนที่ชื่อ map
                        my_Marker.setPosition(my_Point); // กำหนดตำแหน่งของตัว marker เท่ากับ พิกัดผลลัพธ์
                        $("#lat_value").val(my_Point.lat());  // เอาค่า latitude พิกัดผลลัพธ์ แสดงใน textbox id=lat_value
                        $("#lon_value").val(my_Point.lng());  // เอาค่า longitude พิกัดผลลัพธ์ แสดงใน textbox id=lon_value
                        $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_valu
                    }else{
                        // ค้นหาไม่พบแสดงข้อความแจ้ง
                        alert("Geocode was not successful for the following reason: " + status);
                        $("#namePlace").val("");// กำหนดค่า textbox id=namePlace ให้ว่างสำหรับค้นหาใหม่
                    }
                });
            }
        }
        $("#SearchPlace").click(function(){ // เมื่อคลิกที่ปุ่ม id=SearchPlace ให้ทำงานฟังก์ฃันค้นหาสถานที่
            searchPlace();  // ฟังก์ฃันค้นหาสถานที่
        });
        $("#namePlace").keyup(function(event){ // เมื่อพิมพ์คำค้นหาในกล่องค้นหา
            if(event.keyCode==13){  //  ตรวจสอบปุ่มถ้ากด ถ้าเป็นปุ่ม Enter ให้เรียกฟังก์ชันค้นหาสถานที่
                searchPlace();      // ฟังก์ฃันค้นหาสถานที่
            }
        });

    });
    $(function(){
        // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
        // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
        // v=3.2&sensor=false&language=th&callback=initialize
        //  v เวอร์ชัน่ 3.2
        //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
        //  language ภาษา th ,en เป็นต้น
        //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
        $("<script/>", {
            "type": "text/javascript",
            src: "https://maps.google.com/maps/api/js?key=AIzaSyDkTkEh91_PtVee8qaMUzqVzrET2Lc2Br8&v=3.2&sensor=false&language=th&callback=initialize"
        }).appendTo("body");
    });
</script>



<!-- Waves Effect Plugin Js -->
<script src="js/pages/forms/form-wizard.js"></script>

<!-- GMaps PLugin Js -->
<script src="plugins/gmaps/gmaps.js"></script>
<script src="js/pages/maps/google.js"></script>



<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Ckeditor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="js/pages/forms/editors.js"></script>





<!----------------------------------------- เพิ่มลงฐานข้อมูล -------------------------------------------------------->
<?php
if(isset($_POST["chack"]) and $_POST["chack"]=="chack") {
    if(isset($_POST["fac15"]) and $_POST["fac15"]=="1") {
        $_POST["fac1"]=1;
        $_POST["fac2"]=1;
        $_POST["fac3"]=1;
        $_POST["fac4"]=1;
        $_POST["fac5"]=1;
        $_POST["fac6"]=1;
        $_POST["fac7"]=1;
        $_POST["fac8"]=1;
        $_POST["fac9"]=1;
        $_POST["fac10"]=1;
        $_POST["fac11"]=1;
        $_POST["fac12"]=1;
        $_POST["fac13"]=1;
        $_POST["fac14"]=1;
    }

    $query="SELECT MAX(ap_id) AS maxid FROM apartment";
    $result=mysql_query($query,$link);
    $row = $row = mysql_fetch_array($result);
    $nummax=$row["maxid"];
    $nummax=$nummax+1;

    $file = strtolower($_FILES["fileupload"]["name"]);
    $file = substr(@$_FILES['fileupload']['name'],-4);
    $tempfile = "img/img_apatman/".date("YmdHis").$file;
    $tempfile2 = date("YmdHis").$file;


    $query="INSERT INTO apartment (ap_id, ap_iduser, apname, pricestart, priceend, email, tel, addass, latti, longti, nearby, fac1, fac2, fac3, fac4, fac5, fac6, fac7, fac8, fac9, fac10, fac11, fac12, fac13, fac14, des, img, ap_status,ap_date) VALUES
    (
      '".$nummax."'
        ,'".$_SESSION['id']."'
        ,'".$_POST['name']."'
        ,'".$_POST['pricestart']."'
        ,'".$_POST['priceend']."'
        ,'".$_POST['email']."'
        ,'".$_POST['tel']."'
        ,'".$_POST['add']."'
        ,'".$_POST['lat']."'
        ,'".$_POST['long']."'
        ,'".$_POST['nearby']."'
        ,'".$_POST['fac1']."'
        ,'".$_POST['fac2']."'
        ,'".$_POST['fac3']."'
        ,'".$_POST['fac4']."'
        ,'".$_POST['fac5']."'
        ,'".$_POST['fac6']."'
        ,'".$_POST['fac7']."'
        ,'".$_POST['fac8']."'
        ,'".$_POST['fac9']."'
        ,'".$_POST['fac10']."'
        ,'".$_POST['fac11']."'
        ,'".$_POST['fac12']."'
        ,'".$_POST['fac13']."'
        ,'".$_POST['fac14']."'
        ,'".$_POST['des']."'
        ,'".$tempfile2."'
        ,'รออนุมัติ'
        ,NOW()
    )";
    mysql_query($query,$link);



    copy(@$_FILES["fileupload"]["tmp_name"], $tempfile);

    move_uploaded_file(@$_FILES["fileupload"]["tmp_name"], $tempfile);




    $count = count($_FILES['file']['name']);
    for($i=0;$i<$count;$i++)
    {
        $gen=10; //กำหนดจำนวนหลักในการสุ่ม
        $char_pass = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
        $password = ""; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล

        while(strlen($password)<$gen) {
            $password .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
        }

        $file = strtolower($_FILES["file"]["name"][$i]);
        $file = substr($_FILES["file"]["name"][$i],-4);
        $tempfile = "img/img_manyapatment/".$password.$file;
        $tempfile2 = $password.$file;

        $query="INSERT INTO img_apatment(img_id_ap, img_name) VALUES ('".$nummax."','".$tempfile2."')";
        mysql_query($query,$link);

        copy(@$_FILES["file"]["tmp_name"][$i], $tempfile);

        move_uploaded_file(@$_FILES["file"]["tmp_name"][$i], $tempfile);
    }
    $query = "INSERT INTO visit (vi_id_pa) VALUES ('".$nummax."')";
    $result = mysql_query($query, $link);

    echo "<script>alert('เพิ่มข้อมูลที่พักเรียบร้อยแล้ว ระบบทำตรวจสอบข้อมูลของท่านภายใน 24 ชม.');window.location.href='?dataroom.php';</script>";
}
?>