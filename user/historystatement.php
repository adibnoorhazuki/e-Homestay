			<?php
				include "../conn.php";
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
				<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<a class="navbar-brand" href="index.php" aria-hidden="true"><img src="../img/download.jpg"></a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="history.php">HISTORY</a>
							</li>
							<li>
								<a data-toggle="dropdown">PROFILE
								<span class="caret"></span>
									<ul class="dropdown-menu">
										<li>
											<a href="UserProfile.php">VIEW PROFILE</a>
										</li>
										<li>
											<a href="../logout.php" class="w3-bar-item w3-button">
												<i aria-hidden="true"></i>SIGN OUT
											</a>
										</li>
									</ul>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<br/>
			<br/>
				<div class="container">	
					<header>
						<h1>RESERVATION STATEMENT</h1>
					</header>       
					<div class="form">
						<form action="" method="GET"> 
							<?php
								$sql1 = mysql_query("select * from reserve JOIN homestay ON reserve.homestay_reserve_id=homestay.homestay_id JOIN agent ON homestay.homestay_agent_id=agent.agent_id where reserve_id='".$_GET['reserve_id']."'") or die(mysql_error());
								$data=mysql_fetch_assoc($sql1)
							?>
							<?php
								$sql2 = mysql_query("select * from reserve JOIN userinfo ON reserve.homestay_user_id=userinfo.user_id where reserve_id='".$_GET['reserve_id']."'") or die(mysql_error());
								$data1=mysql_fetch_assoc($sql2)
							?>
							<?php/*
								$sql3 = mysql_query("select * from  reserve JOIN agent where reserve_id ='".$_GET['reserve_id']."'") or die(mysql_error());
								$data2=mysql_fetch_assoc($sql3)*/
							?>
							
							<p class="PaypalStatement">
							<h4><b>Payment Successful<b/></h4>
							</p> <br>
							<p class="PaypalStatement">
							<label for="name">
							Name :<?php echo $data1['name']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="phone">
							Phone :<?php echo $data1['phone']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="email">
							Email :<?php echo $data1['email']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="homestay_name">
							Homestay Booked :<?php echo $data['homestay_name']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="datefrom">
							Date From :<?php echo $data['datepicker']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="dateto">
							Date To :<?php echo $data['datepicker1']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="pax">
							Pax :<?php echo $data['pax']; ?>
							</label>
							</p> <br>
							
							<p class="PaypalStatement">
							<h4><b>Agent Contact<b/></h4>
							</p> <br>
							<p class="PaypalStatement">
							<label for="agent_name">
							Name :<?php echo $data['agent_name']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="agent_phone">
							Phone :<?php echo $data['agent_phone']; ?>
							</label>
							</p> <br>
							<p class="PaypalStatement">
							<label for="agent_email">
							Email :<?php echo $data['agent_email']; ?>
							</label>
							</p><br>
							<input type="hidden" name="reserve_id" value="<?php echo $_GET['reserve_id']; ?>"> 
							<button onclick="myFunction()" align="right" name="Payment" id="Payment" tabindex="5" value="PRINT" type="submit">PRINT</button><br><br> 	 
						</form> 
					</div>
					<script>
					function myFunction() 
						{
							var printButton = document.getElementById("Payment");
							//get the print button 'visible' to 'hidden'
							printButton.style.visibility = 'hidden';
							//Print the page content
							window.print()
							//set the print button to 'visible' again
							//[Delete this]line if you want it to stay hidden after printing}
							printButton.style.visibility = 'visible';
						}
					</script>
				</body>
			</html>