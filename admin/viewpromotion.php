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
	    <style>
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
			<header>
				<h3>
					<center>
					PROMOTION
					</center>
				</h3>
			</header><br>
			<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#ffef99">
				<tr>
	  				<th width="5%" align="center" bgcolor="#ffad33">
	  					<strong><center> No</center></strong>
	  				</th>
					<th width="25%" align="center" bgcolor="#ffad33">
						<strong><center> Image1 </center></strong>
					</th>
					<th width="25%" align="center" bgcolor="#ffad33">
						<strong><center> Image2 </center></strong>
					</th>
					<th width="25%" align="center" bgcolor="#ffad33">
						<strong><center> Image3 </center></strong>
					</th>
					<th width="15%" align="center" bgcolor="#ffad33">
						<strong><center> Action </center></strong>
					</th>
				</tr>
				<?php 
					$sql = mysql_query("select * from promotion ") or die(mysql_error());
					$no=1;
					while($data = mysql_fetch_array($sql))
					{
				?>	 			
				<tr>
					<td align="center">
						<?php echo $no++; ?> 
					</td>
					<td align="center">
						<img src="../img/<?php echo $data['image1']; ?>" style="width:300px; height:230px;">
					</td>
					<td align="center">
						<img src="../img/<?php echo $data['image2']; ?>" style="width:300px; height:230px;">
					</td>
					<td align="center">
						<img src="../img/<?php echo $data['image3']; ?>" style="width:300px; height:230px;">
					</td>
					<td>
						<center>
							<a href="editPromotion.php?id_edit2=<?php echo $data['promotion_id']; ?>"><button>EDIT</button></a> &nbsp;
							<!--<a onclick="return confirm('Are You Sure To delete ?')" href="deletePromotion.php?id_delete2=<?php echo $data['promotion_id'];?>"><button>DELETE</button>-->	
						</center>
					</td> 
				</tr>

				<?php
					}
				?>
			</table><br>
		</div>
		<footer class="container-fluid text-center">
	  		<a href="#myPage" title="To Top">
	    		<span class="glyphicon glyphicon-chevron-up"></span>
	  		</a>
		</footer>

		<script>
			$(document).ready(function(){
		  		// Add smooth scrolling to all links in navbar + footer link
		  		$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
		    		// Make sure this.hash has a value before overriding default behavior
		    		if (this.hash !== "") {
			      		// Prevent default anchor click behavior
			      		event.preventDefault();
			      		// Store hash
			      		var hash = this.hash;
			      		// Using jQuery's animate() method to add smooth page scroll
			      		// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			      		$('html, body').animate({
			        		scrollTop: $(hash).offset().top
			      		}, 900, function(){
			        	// Add hash (#) to URL when done scrolling (default click behavior)
			        		window.location.hash = hash;
			      		});
		    		} // End if
		  		});
		  
			  	$(window).scroll(function() {
			    	$(".slideanim").each(function(){
			      		var pos = $(this).offset().top;
			      		var winTop = $(window).scrollTop();
			        	if (pos < winTop + 600) {
			          		$(this).addClass("slide");
			        	}
			    	});
			  	});
			});
		</script>
	</body>
</html>