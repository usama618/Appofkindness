<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
	if (isset($_POST['submit'])) {
		$email=$_GET['email'];
	$newpass=$_POST['newpas'];

	$sql="UPDATE login SET pass='$newpass' where email='$email'";
	$qry=mysqli_query($con,$sql);
	header('location:index.php');

	}
?>
<div class="row">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About us</a></li>
      </ul>
      
     
    </div>
  </div>
</nav>

  
	

	<div class="main-content">

        <!-- You only need this form and the form-mini.css -->

        <div class="form-mini-container">


          
              <h1>Enter new password</h1>
            <form class="form-mini" method="post">

                <div class="form-row">

                    <input type="text" name="newpas" placeholder="Enter new password">
                </div>

               
    
                <div class="form-row form-last-row">
                    <button type="submit" name="submit">Submit Form</button>
                </div>

            </form>
        </div>


    </div>





</body>
</html>
