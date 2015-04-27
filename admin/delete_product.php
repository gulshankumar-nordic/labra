<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_product'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM product where id='$id[$i]'");
}
header("location: product_list_dashboard.php");
}
?>