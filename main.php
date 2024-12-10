 <!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
  <title>WALL OF KINDNESS</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  
  
  
 <style type="text/css">
  body{
  	background: url("http://www.photos-public-domain.com/wp-content/uploads/2012/05/ivory-off-white-paper-texture.jpg");
  	background-color: white;
  }
  .banner{
  	
    background: url("http://wp.givingtuesday.ca/app/uploads/2014/11/GivingTuesday_BlogHeader.jpg");
    background-position: center top;
	background-repeat: no-repeat;
	-moz-background-size: cover;
	-o-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
	min-height: 750px;
  }
 
.container{
	width: 98%;
}
.banner-text {
	padding-top: 22%;
}
.banner-text h1 {
	color: #003366;
	font-family: "Open Sans", Arial, sans-serif;
	font-.
	size: 65px;
	font-weight: 700;
	text-transform: uppercase;
	text-shadow: 1px 1px black;
	-webkit-box-shadow: 0px 2px 14px #666666;
  -moz-box-shadow: 0px 2px 14px #666666;
  box-shadow: 0px 3px 18px #666666;
}
.banner-text p {
	color: black;
	font-size: 16px;
	font-weight: 400;
	line-height: 24px;
	margin-top: 30px;
	margin-bottom: 80px;
}
.btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  text-shadow: 0px 1px 2px #ffffff;
  -webkit-box-shadow: 0px 2px 14px #666666;
  -moz-box-shadow: 0px 2px 14px #666666;
  box-shadow: 0px 2px 14px #666666;
  font-family: Georgia;
  color: #ffffff;
  font-size: 34px;
  background: #003366;
  padding: 21px 38px 21px 38px;
  text-decoration: none;
}

.btn:hover {
  background: #CCCC99;
  text-decoration: none;
}
.ribboncontainer{
	width:100%; 
      height: 300px;
       background-image: url(img/14.png);
    background-position: center top;
	background-repeat: no-repeat;
	-moz-background-size: cover;
	-o-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
}
.ribboncontainer h3{
	font-family: comic sans ms;
	color:#003366 ;
	text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
     font-size: 35px; ;
}
.ribboncontainer a{
	text-decoration: none;
	color: #003366;
}
.text-center{
	color:#003366;
}

</style>




</head>
<body>

	<?php
	session_start();
if(!isset($_SESSION['id'])) {
   echo 'You are not logged in';
   ?>
   <a href="index.php">Log in</a>
   <?php
 exit();
}
		include('menu1.php');
	?>


	<!--BANNER START-->

  	<div class="container">
   
     <section class="banner" role="banner">
 
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <h1>Wall Of Kindess</h1>
        <p></p>
        <a href="adddonation.php" class="btn btn-large">Donate Now!</a> </div>
      <!-- banner text --> 
    </div>
  </div>
</section>
	<!--Service Start-->

<div class="page-title text-center" style="padding-top: 50px; padding-bottom: 30px;">
					<h1 style="color: #003366;">Our Services</h1>
					<p>We are providing a platform for people to help the needy and minimize the wastage. We do not charge for any service </p>
					
				</div>
	<!--Service End-->
	<!--CTA1 START-->
		<div class="ribboncontainer">
			<div class="row" style="padding-left: 70px; padding-top: 8%;">
				<div class="col-md-3">
					<h3> <a href="adddonation.php"> Donate Now  </a></h3> 
				</div>
				<div class="col-md-3">
					<h3 style="padding-left: 15px;"> <a href="search.php"> Search Donations </a> </h3>
				</div>
				<div class="col-md-3">
					<h3 style="padding-left: 30px;"> <a href="donationsprogress.php"> Donation Progress </a> </h3>
				</div>
				<div class="col-md-3">
				<h3 style="padding-left: 10px;"> <a href="mydonation.php"> My Donations </a> </h3>
				</div>
			</div>

		</div>
	<!--CTA1 END-->

	<div class="section-padding">
		
		<div class="row">
			<div class="col-md-6">
				<div class="row" style="padding-top: 20px; padding-bottom: 20px; text-align: center;">
        <h2> My Donations history</h2>
      </div>
      <div class="row" style="padding-bottom: 50px;">
              <div id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
            </div>
    </div>

    <div class="col-md-6">
    	<div class="row" style="padding-top: 20px; padding-bottom: 20px; text-align: center;">
        <h2>Donations on Website</h2>
      </div>
      <div class="row">
      	<div class="chart-container">
      		<div class="doughnut-chart-container">
      			<canvas id="doughnut-chartcanvas-1">
      				
      			</canvas>
      		</div>
      	</div>
      		
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript" src="js/doughnut-db-php.js"></script>
			</div>
		</div>


	</div>
	

	<!--TEAM START-->
	<div id="about" class="section-padding">
		<div class="container">
			<div class="row" style="padding-bottom: 50px; padding-top: 50px;">
				<div class="page-title text-center">
					<h1 style="color: #003366 ">Meet Our Team</h1>
					
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
				<div class="autoplay" style="padding-left: 200px;">
					<div class="col-md-6">
									<div class="team-info">
										<div class="img-sec">
										<img src="img/usama.jpg" class="img-circle img-responsive" style="height: 300px;">
										</div>
										<div class="fig-caption" >
											<h2 style="padding-left: 35px;">Mutayyab Usama</h2>
										<h3 style="padding-left: 65px;">Web Developer</h3>
										<p class="marb-20" style="padding-left: 65px;">Impressive Technical Skills</p>
										
										</div>
									</div>
					</div>
					<div class="col-md-6">
									<div class="team-info">
										<div class="img-sec">
										<img src="img/kaleem.jpg" class="img-circle img-responsive" style="height: 300px;">
										</div>
										<div class="fig-caption" >
											<h2 style="padding-left: 20px;">Kaleem Ur Rehman</h2>
										<h3 style="padding-left: 45px;">Android Developer</h3>
										<p class="marb-20" style="padding-left: 60px;">Impressive Technical Skills</p>
										
										</div>
									</div>
					</div>
					
				</div>
			</div>		
		</div>
	</div>
	<!--TEAM END-->
    
	
	
	<div style="background:  #003366;
    padding: 20px 0;">
		<div class="container">
			<div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
				<div class="footer_copyright">
					<p style="color: white"> © Copyright, All Rights Reserved.</p>					
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>