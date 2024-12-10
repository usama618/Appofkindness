<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
  <link rel="stylesheet" href="css/w3.css">
  <style>
 
  body{
    background:url('img/mainback.jpg');
    padding:50px;
}
   #map{
      height: 300px;
      margin: 0;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 200%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
      .navbar-inverse {
    background-color: #003366;
    border-color: transparent;
   
}
.navbar .brand, .navbar .nav > li > a {
    color: white;
}
.navbar .brand, .navbar .nav > li > a:hover {
    color: #CCCC99;
}
.btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  -webkit-box-shadow: 0px 2px 3px #666666;
  -moz-box-shadow: 0px 2px 3px #666666;
  box-shadow: 0px 2px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 13px;
  background: #CCCCCC;
  padding: 7px 17px 7px 17px;
  text-decoration: none;
}

.btn:hover {
  background: #CCCCCC;
  text-decoration: none;
}
.btn1 {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  -webkit-box-shadow: 0px 2px 3px #666666;
  -moz-box-shadow: 0px 2px 3px #666666;
  box-shadow: 0px 2px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 13px;
  background: #CCCCCC;
  padding: 7px 17px 7px 17px;
  text-decoration: none;
}

.btn1:hover {
  background: #CCCCCC;
  text-decoration: none;
}
.container-fluid h2{
 color: #003366;
 padding-top: 5%;
 padding-left: 5%;
 font-size: 45px;
 font-family: Comic Sans ms;
 font-weight: bold;
}
 .p1{

  padding-right: 5%;
  text-align: center;
  color: #003366;
}

  </style>




</head>
<body>
<?php

		include('connect.php');
    
?>
<?php
	session_start(); 
	if (isset($_POST['submit'])) {
			
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$sql1="SELECT * from login where email='$email' and pass='$pass'";
			$result=mysqli_query($con,$sql1); //executes query
			$row=mysqli_fetch_assoc($result); //Select row in associative array
				if (count($row)>0) { //checks if count of result > 0
				$sql2="SELECT * from login where email='$email'"; //SELECT query 
				$role=mysqli_query($con,$sql2); //executes query
				$result2=mysqli_fetch_assoc($role); 
					$role1=$result2['role'];
					$id1=$result2['id'];
					$_SESSION['role']=$role1; //store value of $role1 in $session['role'] session variable
					$_SESSION['email']=$email; //store value of $role1 in $session['username'] session variable
					
					$_SESSION['id']=$id1;
					

			header('location:main.php'); //redirects user to login.php page
		}
		else{
			echo "Invalid Password"; //print invalid password
		}




	}
	elseif (isset($_POST['submit1'])) {
				
			$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		//$address=$_POST['address'];
		$pno=$_POST['pno'];
		$email1=$_POST['email1'];
		$pass1=$_POST['pass1'];
    $gender=$_POST['gender'];
		
		$security=$_POST['security'];

		if (!empty($fname)&!empty($lname)&!empty($pno)&!empty($email1)&!empty($pass1)&!empty($security)) {
			

			$sql="SELECT * from login where email='$email1'";
		$qry=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($qry);
			if (count($row)>0) {
				echo "already exist";
				exit();
			}
			else{
				$sql1="INSERT into login(fname,lname,pno,gender,email,pass,security) values ('$fname','$lname','$pno','$gender','$email1','$pass1','$security') ";
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
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li ><a style="color: white;" href="#">Contact</a></li>
        <li><a style="color: white;" href="signup.php">SignUp</a></li>
      </ul>
      


      <form class="navbar-form navbar-right" method="post">
    
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                   <button class="btn" name="submit" style="color: white;">Login</button>
                </form>
     
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
    	<div class="col-sm-8 text-left"> 
      <h2 class="w3-center">WALL OF KINDESS</h2>

<div class="w3-content w3-display-container" style="padding-top: 15px; width: 800px;">
  <img class="mySlides" src="img/wastage.jpg" style="width:100%">
  <img class="mySlides" src="img/love-and-food.jpg" style="width:100%">
  <img class="mySlides" src="img/share-quotes-4.jpg" style="width:100%">
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

    
      
      </div>
    
    <div class="col-sm-4">
      
    		<div class="main-content">

        <!-- You only need this form and the form-mini.css -->
      
        <div class="form-mini-container">
        

          
              
            <form class="form-mini" method="post">
                <div class="form-row">
                  <h1 style="color: #003366">SIGN UP</h1>
                </div>

                <div class="form-row">

                    <input type="text" name="fname" placeholder="Enter First Name">
                </div>

                <div class="form-row">
                  <input type="text" name="lname" placeholder="Enter Last Name">
                </div>
                 <div class="form-row">
                  <input type="text" name="pno" placeholder="Enter Phone number">
                </div>
                <div class="form-row">
                  <input type="text" name="gender" placeholder="Enter your gender" >
                </div>
                
                <div class="form-row">
                  <input type="text" name="email1" placeholder="Enter email">
                </div>
                <div class="form-row">
                  <input type="password" name="pass1" placeholder="Enter Pasword">
                </div>
                
                <div class="form-row">
                  	<h3 style="text-align: center;"> Security Question </h3> <br>
                  	<p style="text-align: center;">What was the make and model of your first car?</p>
                </div>
                <div class="form-row">
                  <input type="text" name="security">
                </div>
                <div class="form-row">
                  <button class="btn1" name="submit1">Sign Up</button>
                </div>
                <div class="row">
                	<a href="forgot.php">Forgot password?</a>
                </div>

            </form>
        </div>

     
    </div>
  </div>
</div>


		


</body>
</html>