<?php
	include("../conn.php");
	//to retrieve delete id
	$id_delete1 = $_GET['id_delete1'];
	echo $id_delete1;
	//to delete
	if($id_delete1 !=""){
		$a = "delete from agent where agent_id='$id_delete1'";
		$b = mysql_query($a) or die (mysql_error().$a);
		// $b = $conn->query($a) or die (mysql_error().$a) PDO WAY;
	}
	header ("location:agent_list.php");
?>