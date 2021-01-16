<?php
	include("../conn.php");
	//to retrieve delete id
	$id_delete = $_GET['id_delete'];
	echo $id_delete;
	//to delete
	if($id_delete !=""){
		$a = "delete from homestay where homestay_id='$id_delete'";
		$b = mysql_query($a) or die (mysql_error().$a);
		// $b = $conn->query($a) or die (mysql_error().$a) PDO WAY;
	}
	header ("location:homestay_list.php");
?>
