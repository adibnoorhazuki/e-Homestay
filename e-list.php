<?php
	include "conn.php";
  	session_start();       
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
			      background-color: #f4511e;
			      color: #fff;
			      padding: 100px 450px;
			      font-family: Montserrat, sans-serif;
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
			      color: #000000 !important;
			  }
			  .navbar-nav li a:hover, .navbar-nav li.active a {
			      color: #000000 !important;
			      background-color: #f4511e !important;
			  }
			  .navbar-default .navbar-toggle {
			      border-color: transparent;
			      color: #fff !important;
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
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="test.php" aria-hidden="true"><img src="img/download.jpg"></a>
    			</div>
    			<div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav navbar-right">
						<li>
							<a data-toggle="dropdown">
								PROFILE <span class="caret"></span>
								<ul class="dropdown-menu">
									<li>
										<a id="feedback" href="#feedback-modal" data-toggle="modal" >
											LOG IN
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a id="feedback" href="#feedback-modal" data-toggle="modal" >
											REGISTER
										</a>
									</li>
								</ul>
							</a>
						</li>
	      			</ul>
  				</div>
  			</div>
		</nav>
		<div class="jumbotron text-center">	
		  	<h1>e-Homestay</h1> 
		  	<p>Find Your Nearest Homestay</p> 
        	<form name="frm search" action="" method="GET">
        		Enter Homestay Name / Area
    			<div class="input-group">
			        <input class="form-control" size="30" placeholder="e.g Kajang" name="search" type="text">
      				<div class="input-group-btn">
	        			<button type="submit" class="btn btn-danger">Search</button>
	        		</div>
	        	</div>
        	</form>
		</div>
		<div class="container">
			<?php
				$search=$_GET['search'];
				$sql=mysql_query("select * from homestay JOIN agent ON homestay_agent_id=agent_id where area LIKE '%".$search."%' OR homestay_name LIKE '%".$search."%'") or die(mysql_error()); 
				$no=1;
				while($data=mysql_fetch_array($sql)){
			?>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="media">
						<div class="media-left">
					<!-- Trigger the Modal -->
							<img src="img/<?php echo $data['image'];?>" width="300" height="200">
						</div>
				
						<div class="media-body">
							<h2 class="media-heading"><b>
								<?php echo $data['homestay_name']; ?>
							</b></h2>
							<h5 class="glyphicon glyphicon-home">
								&nbsp;Address : <?php echo $data['address']; ?>
							</h5><br>
							<h5 class="glyphicon glyphicon-map-marker">
								&nbsp;Area : <?php echo $data['area']; ?>
							</h5><br>
							<h5 class="glyphicon glyphicon-user">
								&nbsp;Agent : <?php echo $data['agent_name']; ?>
							</h5><br>
							<h5 class="glyphicon glyphicon-usd">
								&nbsp;Per Night : RM <?php echo $data['price']; ?>
							</h5><br>
							<button onclick="location.href='homestay_detail.php?search=<?php echo $data['homestay_id']; ?>'" class="homestayDetail">
								More Detail
							</button><br/><br/>
						</div>
					</div>
				</div>	    	
			</div>
			<?php
				}
			?>
		</div>
		<!--- MODAL ---->
		<div id="feedback-modal" class="modal fade" role="dialog"  style="margin-top:150px;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<a class="close" data-dismiss="modal">×</a>
						<h3>PROFILE</h3>
					</div>
					<div class="modal-body">
						<div class="well">
                  			<ul class="nav nav-tabs">
                    			<li class="active">
                    				<a href="#login" data-toggle="tab">
                    					Login
                    				</a>
                    			</li>
                    			<li>
                    				<a href="#UserRegister" data-toggle="tab">
                    					User Create Account
                    				</a>
                    			</li>
                  			</ul>
                  			<div id="myTabContent" class="tab-content">
                    			<div class="tab-pane active in" id="login">
                      				<form class="form-horizontal" action="login.php" method="post">
                        				<fieldset>
                          					<div id="legend">
                            					<legend class="">Login</legend>
                          					</div>    
                          					<div class="control-group">
                            					<!-- Username -->
                            					<label class="control-label"  for="username">Email</label>
                            					<div class="controls">
                              						<input type="text" id="email" name="email" placeholder="" class="input-xlarge" required>
                            					</div>
                          					</div>
     
                          					<div class="control-group">
                            					<!-- Password-->
                            					<label class="control-label" for="password">Password</label>
                            					<div class="controls">
                              						<input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
                            					</div>
                          					</div><br>
                          					<div class="control-group">
                            					<div class="controls">
                              						<button name="button1" class="btn btn-success">Login</button>
                            					</div>
                          					</div>
                        				</fieldset>
                      				</form>                
                    			</div>
								<!--REGISTER USER-->
                    			<div class="tab-pane fade" id="UserRegister">
                      				<form class="form-horizontal" action="user/registerUser.php" id="tab" method="POST">
					  					<fieldset>
                          					<div id="legend">
                            					<legend class="">Register USER</legend>
                          					</div>   
                        					<label class="control-label">Name</label>
												<div class="controls">
													<input type="text" id="name" name="name" value="" class="input-xlarge" required><br>
												</div>							
												<label class="control-label">IC No.</label>
												<div class="controls">
													<input type="text" id="icno" name="icno" value="" class="input-xlarge" placeholder="eg: 970203103226" required><br>
												</div>
												<label class="control-label">Phone No.</label>
												<div class="controls">
													<input type="text" id="phone" name="phone" value="" class="input-xlarge" placeholder="eg:0172556969" required><br>
												</div>
                        						<label class="control-label">Email</label>
												<div class="controls">
													<input type="text" id="email" name="email" value="" class="input-xlarge" placeholder="eg:a@gmail.com" required><br>
												</div>
												<label class="control-label">Password</label>
												<div class="controls">
													<input type="password" id="password" name="password" value="" class="input-xlarge" required><br><br>
												</div><br>
                        					<div>
												<button class="btn btn-primary">
													Create Account
												</button>
										</fieldset>
	                      			</form>
											</div>
								</div>			
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
		<!--- END OF MODAL ---->
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