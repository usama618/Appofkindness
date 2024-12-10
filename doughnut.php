<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
    <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>


</head>
<body>
<?php
	
	include('connect.php');

?>

	<div class="container" style="padding-top: 120px;">
      
      <div class="row" style="padding-bottom: 50px;">
              <div id="chart-container">
      <canvas id="#doughnut-chartcanvas-1"></canvas>
    </div>
            </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/doughnut-db-php.js"></script>
</body>

</html>