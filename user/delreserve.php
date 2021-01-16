<?php
	include '../conn.php';	// include db connection from conn.php
	$reserve =$_REQUEST['reserve_id'];
	mysql_query("DELETE FROM reserve WHERE reserve_id='$reserve'") or die(mysql_error());
	header("location:index.php");
?>