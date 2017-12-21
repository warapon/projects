<?php
include ("conn.php");
$query="select * from user where emailu='".$_POST['email']."'";
$echk=mysql_query($query, $link);
$ecount=mysql_num_rows($echk);
if($ecount>0)
{
    $gen=50; //กำหนดจำนวนหลักในการสุ่ม
    $char_pass = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"; //รูปแบบข้อความที่จะให้ทำการสุ่ม อาจจะเปลี่ยนเป็น A-Z, a-z, 0-9
    $password = ""; //กำหนดค่าเริ่มต้นให้กับตัวแปล password ที่ใช้ในการเก็บข้อมูล

    while(strlen($password)<$gen) {
        $password .= $char_pass[rand()%strlen($char_pass)]; //ทำการสุ่มพร้อมกับเก็บค่าลง password ใช้ (.) มาช่วยในการรวมข้อความที่ถูกสุ่ม
    }
    $query="INSERT INTO forgot (fo_email, fo_code, fo_datestart,fo_datestop) VALUES ('".$_POST['email']."', '".$password."', NOW(),now() + interval 35 minute);";
    mysql_query($query,$link);

    require_once 'PhpMail/mailerClass/PHPMailerAutoload.php';


    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

//Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "suratapartmentonline@gmail.com";

//Password to use for SMTP authentication
    $mail->Password = "suratapartmentonline01";

//Set who the message is to be sent from
    $mail->setFrom('suratapartmentonline@gmail.com', 'suratapartment.com');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
    $mail->addAddress($_POST['email']);

//Set the subject line
    $mail->Subject = '[suratapartment]ได้รับการร้องขอการแก้ไขรหัสผ่าน';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

    $mail->Body = "โปรดเข้า  URL เพื่อแก้ไขรหัสผ่าน <br>
URL จะมีอายุใช้งานประมาณ  30 นาทีหลังจากอีเมลถูกจัดส่ง<br>
--------------------------------------------<br>
URL:https://www.suratapartment.com/change?code=".$password."<br>
--------------------------------------------<br>
<br>
ขอแสดงความนับถือ<br>
https://www.suratapartment.com";

//Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
    $mail->isHTML(true);
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        //echo "<script>alert('ทำรายการไม่สำเร็จ กรุณาลองใหม่อีกครั้ง');window.location.href='login.php';</script>";
    } else{
        echo "<script>alert('อีเมล์ในการยืนยันถูกส่งไปหาคุณแล้วกรุณาปฏิบัติตามคำแนะนำเพื่อยืนยันและเปลี่ยนรหัสผ่าน');window.location.href='login.php';</script>";
    }



}else{
    echo "<script>alert('ไม่มีอีเมล์นี้ในระบบ กรุณาตรวจสอบใหม่อีกครั้ง');window.location.href='forgot.php';</script>";
}

?>