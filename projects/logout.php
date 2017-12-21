
<?php
session_start();
session_destroy();
echo"<script>alert('ออกจากระบบเรียบร้อยแล้ว');window.location.href='home.php';</script>";
exit();
?>
