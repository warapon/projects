<?php
include ("conn.php");
$query="select * from user where emailu='".$_POST['mail']."'";
$echk=mysql_query($query, $link);
$ecount=mysql_num_rows($echk);
if($ecount>0)
{
    echo "1";
}else{
    echo "0";
}

?>