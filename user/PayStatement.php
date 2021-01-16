		<?php
			include "../conn.php";
			session_start();
			$email=$_SESSION['email'];
			$name=$_SESSION['name'];
			$usertype=$_SESSION['usertype'];
			$user_id=$_SESSION['user_id'];
		?>	
		<!DOCTYPE html>
		<html>
		<head>
		<title>e-Homestay</title>
			<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
			<link rel="stylesheet" type="text/css" href="style.css" media="all" />
			<link rel="stylesheet" type="text/css" href="demo.css" media="all" />
			<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
			<script type="text/javascript" src="script/feedback.js"></script>

		<style>
			  body {
				  font: 400 15px Lato, sans-serif;
				  line-height: 1.8;
				  color: #000000;
			  }
			  .bg-grey {
				  background-color: #f4511e;
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
				  color: #000000 !important;
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
		</style>
		</head>

		<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" aria-hidden="true"><img src="../img/download.jpg"></a>
				</div>
			</div>
		</nav>
		<br><br>
		<br><br>
		<br><br>
		<div class="container">      
			<div class="form">
				<form id="PayStatement" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"> 
					<p class="PayStatement" align="center">
						<b>ATTENTION DEAR GUEST<b/><br><br>This payment is not REFUNDABLE<br>
						due to cancellation for<br>further inquiries kindly<br>contact our customer<br>service<br>Thank You !!!
					</p><br><br> 
					<p align="center"> 
						Proceed to pay 
						<br><br>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="6YU42FHLK7D52">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							
					</p> 
					<input type="hidden" name="reserve_id" value="<?php echo $_GET['reserve_id'];?>"> 
				</form> 
			</div>      
		</div>
<!--
https://www.paypal.com/cgi-bin/webscr
-->
		</body>
		</html>