<?php
    include '../conn.php';	// include db connection from conn.php

	$image1=$_POST['image1'];	
    $image2=$_POST['image2'];				//post email value from register form
    $image3=$_POST['image3'];			//post email value from register form					

$sql="INSERT INTO promotion (image1,image2,image3) VALUES ('$image1','$image2','$image3')";	//insert to user table
$sql1=mysql_query($sql) or die("sql error".$sql);	//run $sql query


?>

<script>
	alert('Upload successfully. You are able to see the promotion now');
	location.href="viewpromotion.php";
</script>