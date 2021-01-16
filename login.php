<?php
session_start();
include 'conn.php';
if(isset($_POST['button1'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * FROM userinfo WHERE email='$email' AND password='$password'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==true){
		$row=mysql_fetch_assoc($result);
		$_SESSION['email']=$row['email'];
		$_SESSION['password']=$row['password'];
		$_SESSION['usertype']=$row['usertype'];
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['name']=$row['name'];	
		if($_SESSION['usertype']=='admin'){
			header("location: admin/index.php");
		}elseif($_SESSION['usertype']=='customer'){
			header("location: user/index.php");
		}
		mysql_close();
	}else{
		?>
			<script>
				alert('email or password is invalid');
				location.href="test.php?msg=failed";
			</script>
		<?php
	}
}else{
	?>
		<script>
			alert('email or password is invalid');
			location.href="test.php?msg=failed";
		</script>
	<?php
}
?>
