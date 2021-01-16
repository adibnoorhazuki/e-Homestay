<?php
    include '../conn.php';	// include db connection from conn.php
	error_reporting(0);

	$name=$_POST['name'];	
    $icno=$_POST['icno'];				//post email value from register form
    $phone=$_POST['phone'];			//post email value from register form
	$email=$_POST['email'];					//post email value from register form
    $password=$_POST['password'];					//post email value from register form
	$usertype=$_POST['usertype'];					

$sql="INSERT INTO userinfo(name,icno,phone,email,password,usertype) VALUES ('$name','$icno','$phone','$email','$password','customer')";	//insert to user table
$sql1=mysql_query($sql) or die("sql error".$sql);	//run $sql query


?>

<script>
	alert('Registered successfully. Please Log In to use the system now');
	location.href="../test.php";
</script>