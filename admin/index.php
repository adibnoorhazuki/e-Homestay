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
		<title>e-Homestay</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<style>
			body, html {
				height: 100%;
				line-height: 1.8;
			}
			/* Full height image header */
			.bgimg-1 {
				background-position: center;
				background-size: cover;
				background-color:rgb(153, 153, 102);
				min-height: 100%;
			}
			.w3-bar .w3-button {
				padding: 16px;
			}
			.homestay_list{
				margin: 0 0 0 5px;
				
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
		<?php	
			$sql=mysql_query("SELECT name FROM userinfo ")or die(mysql_error());
		?>

		<!-- Navbar (sit on top) -->
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
<br>
		<!-- Header with full-height image -->
		<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home"><br><br><br>
			<p style="font-size:32px;color:white;" >&nbsp;Admin Menu</p><br><br><br>

			<button onclick="location.href='homestay_list.php'" class="homestay_list" style="border-radius:75px;width:150px;height:150px; margin-left:600px; margin-top:-100px;">HOMESTAY LIST</button><br/>
			<button onclick="location.href='agent_list.php'" class="agent_list" style="border-radius:75px;width:150px;height:150px; margin-left:410px;">AGENT LIST</button> 
			&nbsp;&emsp;&emsp;&emsp; WELCOME <?php echo $_SESSION['name'];?>
			<button onclick="location.href='AdminReserved.php'" class="AdminStatement" style="border-radius:75px;width:150px;height:150px; margin-left:55px;">RESERVED HOMESTAY</i></button><br/><br/>
			<button onclick="location.href='viewpromotion.php'" class=""style="border-radius:75px;width:150px;height:150px; margin-left:600px; margin-top:-20px;">PROMOTIONS</i></button>

		</header>

		</body>
		</html>