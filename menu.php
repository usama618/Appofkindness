<!DOCTYPE html>
<html>
<head>
  <script src="js/jquery.min.js"></script>
  <title>menu</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <script src="js/bootstrap.min.js"></script>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  
<style type="text/css">
  .navbar-right{
    padding-right: 10px;
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


</style>  

</head>
<body>
 
  <!--HEADER START-->

  
  <div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-inverse">
  <div class="">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="main.php">Home</a></li>
        <li><a href="adddonation.php">Add donations</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="contact.php">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="chathistory.php">Inbox</a></li>
  
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Donations <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="mydonation.php">My Donations</a></li>
          <li><a href="donationsprogress.php">Donation Progress</a></li>
          <li><a href="itemrecieved.php">Item Recieved</a></li>
        </ul>
      </li>
    
        <li><a href="myprofile.php">My Profile</a></li>
        
        <li><a href="logout.php"> Logout</a></li>
      </ul>
    </div>
  </div>





</nav>
  </div>

  <!--HEADER END-->
     
    </div>
  </div>

</nav>

</body>
</html>