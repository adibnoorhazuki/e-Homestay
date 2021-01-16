<?php
	include '../conn.php';	// include db connection from conn.php
	session_start();
	$datepicker=$_POST['datepicker'];
	$datepicker1=$_POST['datepicker1'];
	$pax=$_POST['pax'];	
	$days=$_POST['days'];
	$homestay_reserve_id=$_POST['homestay_reserve_id'];	
	$homestay_user_id=$_POST['homestay_user_id'];
	
	$insert=mysql_query("INSERT INTO reserve (datepicker,datepicker1,pax,days,homestay_reserve_id,homestay_user_id) VALUES ('$datepicker','$datepicker1','$pax','$days','$homestay_reserve_id','$homestay_user_id')") or die(mysql_error());
	$reserve = mysql_query("select reserve_id FROM reserve WHERE datepicker='".$datepicker."' AND datepicker1='".$datepicker1."' AND pax='".$pax."' AND days='".$days."' AND homestay_reserve_id='".$homestay_reserve_id."' AND homestay_user_id='".$homestay_user_id."'") or die(mysql_error());
	$reserve=mysql_fetch_assoc($reserve);
	header("location:PayStatement.php?reserve_id=".$reserve['reserve_id']);
	$_SESSION['reserve_id']=$reserve['reserve_id'];
?>