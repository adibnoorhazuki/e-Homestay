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
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
			<script type="text/javascript" src="script/feedback.js"></script>
		</head>

		<style>
			body, html {
				height: 100%;
				line-height: 1.8;
			}
			/* Full height image header */
			.bgimg-1 {
				background-position: center;
				background-size: cover;
				background-image: url("../img/img.png");
				min-height: 100%;
			}
			.w3-bar .w3-button {
				padding: 16px;
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
			  .navbar-brand img {
				  margin-top: 0px;
				  height: 70px;
				  width:220px;
				  left: 200px;
				  vertical-align: middle;
			}

		</style>

		<body>
			<nav class="navbar navbar-default navbar-fixed-top">
	  		<div class="container">
	    		<div class="navbar-header">
	      			<a class="navbar-brand" href="index.php" aria-hidden="true"><img src="../img/download.jpg"></a>
	    		</div>
	    		<div class="collapse navbar-collapse" id="myNavbar">
	      			<ul class="nav navbar-nav navbar-right">
	       				<li>
	       					<a href="../logout.php"><i aria-hidden="true"></i>SIGN OUT</a>
	       				</li>
	      			</ul>
	  			</div>
	  		</div>
		</nav>
			<br/><br/>
			<br/><br/>
			<div class="container">
				<header>
					<h1><center>BOOKING STATEMENT</center></h1>
				</header>       
				<div class="form">
					<form id="bookStatus" action="#" method="GET">
					<?php

						$sql1 = mysql_query("select * from reserve JOIN homestay ON reserve.homestay_reserve_id=homestay.homestay_id JOIN agent ON homestay.homestay_agent_id=agent.agent_id where reserve_id ='".$_GET['search']."'") or die(mysql_error());

						$data=mysql_fetch_assoc($sql1)

					?>
					<?php

						$sql2 = mysql_query("select * from reserve JOIN userinfo ON reserve.homestay_user_id=userinfo.user_id where reserve_id ='".$_GET['search']."'") or die(mysql_error());

						$data1=mysql_fetch_assoc($sql2)

					?>
				
						<p class="PaypalStatement">
							<h4><b>CUSTOMER DETAIL<b/></h4>
						</p><br>
						<p class="PaypalStatement">
							<label for="name">
							NAME :<?php echo $data1['name']; ?>
							</label>
						</p> <br>
						<p class="PaypalStatement">
							<label for="icno">
							IC NO :<?php echo $data1['icno']; ?>
							</label>
						</p> <br>
						<p class="PaypalStatement">
							<label for="phone">
							PHONE :<?php echo $data1['phone']; ?>
							</label>
						</p> <br>
						<p class="PaypalStatement">
							<label for="email">
							EMAIL :<?php echo $data1['email']; ?>
							</label>
						</p> <br>
							
						<p class="PaypalStatement">
							<h4><b>BOOKING DETAIL<b/></h4>
						</p> <br>
						<p class="PaypalStatement">
							<label for="homestay_name">
							HOMESTAY :<?php echo $data['homestay_name']; ?>
							</label>
						</p> <br>
						<p class="PaypalStatement">
							<label for="price">
							PAYMENT :<?php echo $data['price']; ?>
							</label>
						</p> <br>
						<p class="PaypalStatement">
							<label for="datefrom">
							DATE FROM :<?php echo $data['datepicker']; ?>
							</label>
						</p> <br>
						<p class="PaypalStatement">
							<label for="dateto">
							DATE TO : <?php echo $data['datepicker1']; ?>
							</label>
						</p><br>
						<input type="hidden" name="reserve_id" value="<?php echo $_GET['reserve_id'];?>"> 
						<button onclick="myFunction()" align="right" name="Payment" id="Payment" tabindex="5" value="PRINT" type="submit">PRINT</button><br><br> 	 
					</form>
				</div>      
			</div>
			<script> //print function 
				function myFunction() 
					{
						var printButton = document.getElementById("Payment");
						//Set the print button visibility to 'hidden' 
						printButton.style.visibility = 'hidden';
						//Print the page content
						window.print()
						//Set the print button to 'visible' again 
						//[Delete this line if you want it to stay hidden after printing]
						printButton.style.visibility = 'visible';
					}
			</script>
		</body>
		</html>
	<?php
		$homestay_reserve_id=$_POST['homestay_reserve_id'];	

		$reserve = mysql_query("select reserve_id FROM reserve WHERE homestay_reserve_id='".$homestay_reserve_id."'") or die(mysql_error());
		$reserve=mysql_fetch_assoc($reserve);
		header("location:PayStatement.php?reserve_id=".$reserve['reserve_id']);
	?>		