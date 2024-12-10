<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Items Recieved</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
 
  <style type="text/css">
  body{
    background:url('img/mainback.jpg');
    background-color: #f7f7f7;
    padding-top: 54px;
}

@media (min-width: 992px) {
    body {
        padding-top: 56px;
    }
}

.card {
    height: 100%;
}
header{
        background:url('img/charity-hands.jpg');
        height: 300px;
  }
  </style>

</head>
<body>
<?php
	include('connect.php');
  include('menu.php');
?>

<div class="container">


      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3" style="color: red">View Details</h1>
        <p class="lead">On this page you can see the items you have recievced so far.</p>
        
      </header>
      <div class="row" style="color: red; font-weight: bold;">
        
   

      </div>
      <div class="row">
    <h2>Items Recieved</h2>
</div>
</div>
<?php 

       
      


       
      

        $myid= $_SESSION['id'];
      $sql="SELECT * from donationprogress where userrcvid=$myid AND progress='1'";
      $qry=mysqli_query($con,$sql);
      while ($result=mysqli_fetch_assoc($qry)) {
        
      $sendid=$result['usersendid'];
       


  ?>



<div class="container">

      
  <div class="row text-center">
  

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           
            <div class="card-body">
              <h4 class="card-title">
              <?php echo $result['itemname']; ?> 
              </h4>
              
              <a href="profile.php?id=<?php  echo $sendid;
                $_SESSION['userid']=$sendid;
               ?>" class="card-text">Sender : <?php 
              
              $sql2="SELECT * from login where id=$sendid";
              $qry2=mysqli_query($con,$sql2);
              $row2=mysqli_fetch_assoc($qry2);
              echo $row2['fname'];
              echo "&nbsp";
              echo $row2['lname'];
                  ?>
                


              </a>    
            </div>
            <div class="card-body">
              <?php
                  echo $row2['email'];
              ?>
            </div>
            <div class="card-body">
              <?php
                echo $row2['pno'];
              ?>
            </div>
            <div class="card-body">
              <?php
                echo $row2['gender'];
              ?>
            </div>
            

            <div class="card-footer" style="padding-top: 3px;">
              <form method="post" action="direction.php">
                  <button type="submit" name="direction" value="<?php echo $result['donid'];  ?>" class="btn btn-primary">Get Directions</button>
                </form>

            </div>

          </div>
        </div>

            <?php



}

       
                  
    
                   
?>


        

 
  

    </div>
  </div>


  

</body>
</html>