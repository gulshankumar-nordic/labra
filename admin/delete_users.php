<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM users where id='$id[$i]'");
}
header("location: user_list_dashboard.php");
}
?>