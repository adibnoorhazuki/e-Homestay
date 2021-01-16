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
				  <link href="jquery-ui-.css" rel="stylesheet"/>
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				  <script src="jquery.js"></script>
				  <script src="jquery-uijs.js"></script>
				  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
				  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
				  <?php
						if (isset($_GET['search'])) :
						$search = $_GET['search'];
								$result = mysql_query("select * from homestay JOIN reserve ON homestay.homestay_id=reserve.homestay_reserve_id where homestay_id LIKE '%".$search."%' OR homestay_name LIKE '%".$search."%' OR area LIKE '%".$search."%'") or die(mysql_error()); 
							else:
								$result = mysql_query("select * from homestay JOIN reserve ON homestay.homestay_id=reserve.homestay_reserve_id_id") or die(mysql_error()); 
							endif;
						$desc = array(); 
						$desc1 = array();
						while($data = mysql_fetch_assoc($result))
						{
						$desc []= $data["datepicker"];
						$desc []= $data["datepicker1"];
						}
						$res = $desc;
						$res1 = $desc1;
						json_encode($res);
						json_encode($res1);
				  ?>
				  <script type"text/javascript">
 $(document).ready(function(){
	 var startDate = <?php print(json_encode($res));?>;
	 console.log(startDate);
	 var endDate = <?php print(json_encode($res));?>;
	 console.log(endDate);
	 var dateRange = [];
	 console.log(dateRange);
			
			
			
			var diasableddates = function(date) {
			var dateString = jQuery.datepicker.formatDate('dd-mm-yy', date);
			return [startDate.indexOf(dateString) == -1];
			}
			
			var minD = function(minDate) {
			var date2 = $("#datepicker").datepicker("getDate");
			date2.setDate(date2.getDate() + 1);
			$("#datepicker1").datepicker("option", "minDate",date2);
			}
			
			
			var diasableddates1 = function(date) {
			var dateString = jQuery.datepicker.formatDate('dd-mm-yy',date);
			return [endDate.indexOf(dateString) == -1];
			}
			
			var date2 = function (dateStr) {
				var min = $('#datepicker').datepicker('getDate');
				var max = $(this).datepicker('getDate');
			
				var days = (max - min) / (1000 * 60 * 60 * 24);
				$("#days").val(days);
				
			}
			
			var total = function (total) {
			var days =document.getElementById("days").value;
			var price =document.getElementById("price").value;
		 
			 var total1 = price*days;
			 $("#total").val(total1);
			}
			
			$("#datepicker").datepicker({beforeShowDay:diasableddates,
									    onSelect:minD});
			$("#datepicker").datepicker("option","dateFormat", 'dd-mm-yy');	
			$("#datepicker").datepicker("option", "minDate",0);
			
			
			
			$("#datepicker1").datepicker({beforeShowDay:diasableddates1,
										onSelect:date2,
										onClose:total});
			$("#datepicker1").datepicker("option","dateFormat", 'dd-mm-yy')
 });			
 </script>
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
						<a class="navbar-brand" href="index.php" aria-hidden="true">
							<img src="../img/download.jpg">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="history.php">
									HISTORY
								</a>
							</li>
							<li>
								<a data-toggle="dropdown">
									PROFILE
								<span class="caret"></span>
									<ul class="dropdown-menu">
										<li>
											<a href="UserProfile.php">
												VIEW PROFILE
											</a>
										</li>
										<li>
											<a href="../logout.php" class="w3-bar-item w3-button">
												<i class="fa fa-sign-out" aria-hidden="true"></i>
												SIGN OUT
											</a>
										</li>
									</ul>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<br><br><br><br><br><br>
			
			<h2 class="media-heading">
				<b><center>RESERVATION<center/></b>
			</h2>
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="media">
						<?php
							if (isset($_GET['search'])) :
								$search = $_GET['search'];
								$sql = mysql_query("select * from homestay JOIN agent ON homestay.homestay_agent_id=agent.agent_id where homestay_id LIKE '%".$search."%' OR homestay_name LIKE '%".$search."%' OR area LIKE '%".$search."%'") or die(mysql_error()); 
							else:
								$sql = mysql_query("select * from homestay JOIN agent ON homestay.homestay_agent_id=agent.agent_id") or die(mysql_error()); 
							endif;
							$data=mysql_fetch_assoc($sql)
						?>
							<div class="media-left">
								<img id="myImg" src="../img/<?php echo $data['image'];?>" alt="img" width="500" height="300">
							</div>
							
							<form action="postreserve.php" method="POST" class="media-body">
								<h2 class="glyphicon glyphicon-home" name="homestay" placeholder="homestay"><b>
									<?php echo $data['homestay_name'];?></b>
								</h2>
								<div><br>
									<label>
										Check In:
									</label>
									<input type="text" id="datepicker" name="datepicker" required/>
								</div><br>
								<div>
									<label>
										Check Out:
									</label>
									<input type="text" id="datepicker1" name="datepicker1"required/>
									</div><br>
									<div>
									 <label>
									  Days Booked:
									 </label> 
									  <input type="text" id="days" name="days"  readonly >
									</div><br>
									<div>
									 <label>
									  Per day : RM
									 </label>
									<input type="text" id="price" name="price" value="<?php echo $data['price']; ?>" readonly>	
									</div><br>
									<div>
									 <label>
									  total price : RM
									 </label>
									<input type="text" id="total" name="total" readonly>	
									</div><br>
									<div>
									<label>
										No of Pax:
									</label>
									<select name="pax" value="Please Select"required/>
										<option value="below 2 pax">
											below 2 pax
										</option>
										<option value="below 6 pax">
											below 6 pax
										</option>
										<option value="below 10 pax">
											below 10 pax
										</option>
										<option value="above 10 pax">
											above 10 pax
										</option>
									</select>
								</div>
								<div>
									<input type="hidden" name="homestay_reserve_id" value="<?php echo $_GET['search'];?>"> 
									<input type="hidden" name="homestay_user_id" value="<?php echo $_SESSION['user_id'];?>"> 
								</div><br>
								<input type="submit" name="submit" id="submit" value="Reserve" /><br/>
							</form>
							
							<!-- Add Google Maps -->
							<div class="media-right">
								<br><h5 style="margin-left:30px;">Profile</h5>
								<img style="width:100px; height:130px; margin-right:70px;" src="../img/<?php echo $data['agent_profilepic']; ?>">
								<h5 width="250px;">
									&nbsp;Mr. / Mrs. : <?php echo $data['agent_name']; ?>
								</h5><br>
							</div>
						</div>
					</div>	    	
				</div>
			</div>
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
			})

		</script>
		</body>
		</html>