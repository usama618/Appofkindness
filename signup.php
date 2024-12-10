<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
		include('connect.php');
?>
<?php
	if (isset($_POST['submit'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		//$address=$_POST['address'];
		$pno=$_POST['pno'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$role=$_POST['role'];
		$security=$_POST['security'];
		if (!empty($fname)&!empty($lname)&!empty($address)&!empty($pno)&!empty($email)&!empty($pass)&!empty($role)&!empty($security)) {
			

			$sql="SELECT * from login where email='$email'";
		$qry=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($qry);
			if (count($row)>0) {
				echo "already exist";
				exit();
			}
			else{
				$sql1="INSERT into login(fname,lname,pno,email,pass,role,security) values ('$fname','$lname','$pno','$email','$pass','$role','$security') ";
				$qry1=mysqli_query($con,$sql1);
				echo "Account added";
				exit();
			}
		}
		else{
			echo "input all fields";
			exit();
		}

		
		
	}
?>
<div class="container" style=" background: #464646; color: white; height: 100%">
	<div class="row">
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="index.php"> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
	</div>
	<div class="row" style="text-align: right; padding-right: 20px;">
		
	</div>
	<div class="row" style="text-align: center;">
		<h1>Application of kindness</h1>
	</div>
	<div class="row" style="text-align: center;" >
		<h1>SIGNUP!!</h1>
	</div>

	<div class="row" style="text-align: center;color: black;">
		<form method="post">
			
			<input type="text" name="fname" placeholder="Enter First Name"><br>
			
			<input type="text" name="lname" placeholder="Enter Last Name"><br>
			<input type="text" name="pno" placeholder="Enter Phone number"><br>
			<input type="text" name="email" placeholder="Enter email"><br>
			<input type="text" name="pass" placeholder="Enter Pasword"><br>
			<select name="role" style="color: black;">
				<option value="donor">Donor</option>
				<option value="needy">Needy</option>
				<option value="volunteer">Voulanteer</option>

			</select>
			<h3 style="color: white">Security Question</h3><br>
			<label style="color: white">What was the make and model of your first car?</label><br>
			<input type="text" name="security"><br>
			<input type="submit" name="submit" style="color: black;">

		</form>		
	</div>
</div>



</body>
</html>
