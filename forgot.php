<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
</head>
<body>
<?php
		include('connect.php');
?>
<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sec=$_POST['sec'];

	
			
		$sql="SELECT * from login where email='$email'";
		$qry=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($qry);
		if (count($row)>0) {
			
			if ($pass==$row['pass']&&$sec==$row['security']) {
				header("location:change.php?email=". $_POST['email']."");
			}
			else{
				echo "account invalid";
				exit();
			}

		}
		else{
			echo "account does not exist";
			exit();
			}
		
		



	}

?>

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

  
	

	<div class="main-content">

        <!-- You only need this form and the form-mini.css -->

        <div class="form-mini-container">


          
              <h1>Enter details</h1>
            <form class="form-mini" method="post">

                <div class="form-row">

                    <input type="text" name="email" placeholder="Enter email">
                </div>

                <div class="form-row">
                    <input type="text" name="pass" placeholder="Enter Password">
                </div>
                <div class="form-row">
                	<h3 style="text-align: center;">What was the make and model of your first car? </h3>
                </div>
                <div class="form-row">
                	<input type="text" name="sec"	placeholder="Security question">
                </div>
                
    
                <div class="form-row form-last-row">
                    <button type="submit" name="submit">Submit Form</button>
                </div>

            </form>
        </div>


    </div>









</body>
</html>