<?php
	include "../conn.php";
	session_start();
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
	$usertype=$_SESSION['usertype'];
	$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>e-Homestay</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="script/feedback.js"></script>
		<style type="text/css">
		  	body {
		      	font: 400 15px Lato, sans-serif;
		      	line-height: 1.8;
		      	color: #000000;
		  	}
		  	h2 {
		    	font-size: 24px;
		      	text-transform: uppercase;
		      	color: #303030;
		      	font-weight: 600;
		      	margin-bottom: 30px;
		  	}
		  	h4 {
		      	font-size: 19px;
		      	line-height: 1.375em;
		      	color: #303030;
		      	font-weight: 400;
		      	margin-bottom: 30px;
		  	}  
		  	.jumbotron {
		      	background-color: #ffffff;
		      	color: #fff;
		      	padding: 200px 50px;
		      	font-family: Montserrat, sans-serif;
			  	color: black;
		  	}
		  	.container-fluid {
		      	padding: 60px 50px;
		  	}
		  	.bg-grey {
		     	background-color: #f6f6f6;
		  	}
		  	.item h4 {
		      	font-size: 19px;
		      	line-height: 1.375em;
		      	font-weight: 400;
		      	font-style: italic;
		      	margin: 70px 0;
		  	}
		  	.item span {
		      	font-style: normal;
		  	}
		  	.panel {
		      	border: 1px solid #f4511e; 
		      	border-radius:0 !important;
		      	transition: box-shadow 0.5s;
		  	}
		  	.panel:hover {
		      	box-shadow: 5px 0px 40px rgba(0,0,0, .2);
		  	}
		  	.panel-footer .btn:hover {
		      	border: 1px solid #f4511e;
		      	background-color: #fff !important;
		      	color: #f4511e;
		  	}
		  	.panel-heading {
		      	color: #fff !important;
		      	background-color: #f4511e !important;
		      	padding: 25px;
		      	border-bottom: 1px solid transparent;
		      	border-top-left-radius: 0px;
		      	border-top-right-radius: 0px;
		      	border-bottom-left-radius: 0px;
		      	border-bottom-right-radius: 0px;
		  	}
		  	.panel-footer {
		      	background-color: white !important;
		  	}
		  	.panel-footer h3 {
		      	font-size: 32px;
		  	}
		  	.panel-footer h4 {
		      	color: #aaa;
		      	font-size: 14px;
		  	}
		  	.panel-footer .btn {
		      	margin: 15px 0;
		      	background-color: #f4511e;
		      	color: #fff;
		  	}
		  	.navbar {
		      	margin-bottom: 0;
		      	background-color: #ffffff;
		      	z-index: 9999;
		      	border: 0;
		      	font-size: 12px !important;
		      	line-height: 1.42857143 !important;
		      	letter-spacing: 4px;
		      	border-radius: 0;
		      	font-family: Montserrat, sans-serif;
			  	height: 90px;
		  	}
		  	.navbar li a, .navbar .navbar-brand {
		      	color: #f4511e !important;
		  	}
		  	.navbar-nav li a:hover, .navbar-nav li.active a {
		      	color: #000000 !important;
		      	background-color: #f4511e !important;
		  	}
		  	.navbar-default .navbar-toggle {
		      	border-color: transparent;
		      	color: #f4511e !important;
		  	}
		  	footer .glyphicon {
		      	font-size: 20px;
		      	margin-bottom: 20px;
		      	color: #f4511e;
		  	}
		  	.slideanim {visibility:hidden;}
		  	.slide {
		      	animation-name: slide;
		      	-webkit-animation-name: slide;
		      	animation-duration: 1s;
		      	-webkit-animation-duration: 1s;
		      	visibility: visible;
		  	}
		  	@keyframes slide {
		    	0% {
		      		opacity: 0;
		      		transform: translateY(70%);
		    	} 
		    	100% {
		      		opacity: 1;
		      		transform: translateY(0%);
		    	}
		  	}
		  	@-webkit-keyframes slide {
		    	0% {
		      		opacity: 0;
		      		-webkit-transform: translateY(70%);
		    	} 
		    	100% {
		      		opacity: 1;
		      		-webkit-transform: translateY(0%);
		    	}
		  	}
		  	@media screen and (max-width: 768px) {
		    	.col-sm-4 {
		      		text-align: center;
		      		margin: 25px 0;
		    	}
		    	.btn-lg {
			        width: 100%;
			        margin-bottom: 35px;
			    }
		  	}
		  	@media screen and (max-width: 480px) {
		    	.logo {
		        	font-size: 150px;
		    	}
		  	}
		  	.navbar-brand img {
				margin-top: 0px;
				height: 70px;
				width:220px;
				left: 200px;
				vertical-align: middle;
			}
			table, th, td {
			    border: 1px solid black;
			    border-collapse: collapse;
			}
		</style>
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="index.php" aria-hidden="true"><img src="../img/download.jpg"></a>
    			</div>
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav navbar-right">
	       				<li>
	       					<a href="../logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out" aria-hidden="true"></i>SIGN OUT</a>
	       				</li>
		      		</ul>
  				</div>
  			</div>
		</nav>
		<div class="jumbotron text-center">
			<form method="POST" align="center" >
				<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#cce6ff">
					<?php 
						$id = $_GET['id_edit1'];
						$sql=mysql_query("select * from agent where agent_id='$id'") or die(mysql_error()); 
						$no=1;
						while($data=mysql_fetch_array($sql)){
						/* PDO WAY
						$sql = $conn->query("select * from homestay where homestay_id='$id'") or die(mysql_error());
						$no = 1;
						foreach($sql as $data){
						*/
					?>
					<tr>
						<td align="center" bgcolor="#3366ff">
							<strong> NO </strong>
						</td>
						<td style="padding-left:10px">
							<?php echo $no++; ?> 
						</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#3366ff">
							<strong> Name </strong>
						</td>
						<td>
							<input type="text" name="agent_name" id="name" value="<?php echo $data['agent_name']; ?>" size="50" style="padding-left:10px">
						</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#3366ff">
							<strong>Agent Phone </strong>
						</td>
						<td>
							<input type="text" name="agent_phone" id="name" value="<?php echo $data['agent_phone']; ?>" size="50" style="padding-left:10px"/>
						</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#3366ff">
							<strong> Email </strong>
						</td>
						<td>
							<input type="text" name="agent_email" id="name" value="<?php echo $data['agent_email']; ?>" size="50" style="padding-left:10px"/>
						</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#3366ff">
							<strong> Profile Pic </strong>
						</td>
						<td>
							<img src="../img/<?php echo $data['agent_profilepic']; ?>" style="width:100px; height:130px;" style="padding-left:10px"/>
							<input name="agent_profilepic" type="file" multiple="multiple" />
						</td>
					</tr>
				</table>
				<center>
					<input type="submit" name="submit" id="submit" value="Submit" />
				</center>
			</form>
			<?php
				}
				$submit = @$_POST['submit'];
				if($submit){
					$agent_name = $_POST['agent_name'];
					$agent_phone = $_POST['agent_phone'];
					$agent_email = $_POST['agent_email'];
					$agent_profilepic = $_POST['agent_profilepic'];
					
					if( $agent_name == "" || $agent_phone == ""  || $agent_email == "" || $agent_profilepic == "" ){
			?>
							<script type="text/javascript">
								alert("Make sure to insert data all the field");
							</script>
			<?php
					}else{
						mysql_query("UPDATE agent SET agent_name='$agent_name',agent_phone='$agent_phone',agent_profilepic='$agent_profilepic',agent_email='$agent_email' WHERE agent_id='$id'") or die(mysql_error());
						// $conn->query("UPDATE homestay SET name='$name',address='$address',owner='$owner',area='$area',phone='$phone' WHERE homestay_id='$id'") or die(mysql_error()); PDO WAY
			?>
						<script type="text/javascript">
							alert("success update data");
							window.location.href="agent_list.php";
						</script>
			<?php
					} 
				}
			?>
		</div>
	</body>
</html>