<?php
    include '../conn.php';	// include db connection from conn.php

	$homestay_name=$_POST['homestay_name'];	
    $address=$_POST['address'];				//post email value from register form
	$area=$_POST['area'];					//post email value from register form
    $price=$_POST['price'];					//post email value from register form
	$description=$_POST['description'];	
	$image=$_POST['image'];					
	$homestay_agent_id=$_POST['homestay_agent_id'];					

$sql="INSERT INTO homestay (homestay_name,address,area,price,description,image,homestay_agent_id) VALUES ('$homestay_name','$address','$area','$price','$description','$image','$homestay_agent_id')";	//insert to user table
$sql1=mysql_query($sql) or die("sql error".$sql);	//run $sql query


?>

<script>
	alert('Record Successfully Insert !');
	location.href="homestay_list.php";
</script>