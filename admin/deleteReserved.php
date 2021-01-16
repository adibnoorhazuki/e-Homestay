<?php
	include("../conn.php");
	//to retrieve delete id
	$id_delete2 = $_GET['id_delete2'];
	echo $id_delete2;
	//to delete
	if($id_delete2 !=""){
		$a = "delete from reserve where reserve_id='$id_delete2'";
		$b = mysql_query($a) or die (mysql_error().$a);
	}
	header ("location:AdminReserved.php");
?>
