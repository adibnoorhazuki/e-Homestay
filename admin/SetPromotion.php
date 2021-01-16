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
				background-image: url("../img/images.jpg");
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
								<a href="../logout.php" class="w3-bar-item w3-button">
									SIGN OUT
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="container">
			<header>
				<center><h1>Add Promotion</h1></center>
			</header>
			<div  class="form">
				<form id="addpromotion" action="Insertpromotion.php" method="POST"> 
					<p class="homestay">
						<label for="promotion">
							Image 1
						</label>
					</p> 
					Select images: <input type="file" name="image1" multiple />
					
					<p class="promotion">
						<label for="address">
							Image 2
						</label>
					</p> 
					Select images: <input type="file" name="image2" multiple />						  
					<p class="promotion">
						<label for="area">
							Image 3
						</label>
					</p> 
					Select images: <input type="file" name="image3" multiple />					
					
					<br>
					<input class="button" name="addpromotion" id="addHomestay" tabindex="5" value="SUBMIT" type="submit"/> 	 
				</form> 
				
			</div>      
		</div>

		</body>
		</html>
