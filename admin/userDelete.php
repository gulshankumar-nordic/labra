<?php
error_reporting(0);
include('../admin/lib/dbcon.php');
dbcon(); 
mysql_query("UPDATE users SET status='0' where id='$_GET[id]'") or die(mysql_error());
header("Location:user_list_dashboard.php");
?>