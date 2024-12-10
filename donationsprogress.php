<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Donations Progress</title>
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
  if (isset($_POST['volunteer'])) {
    $id=$_SESSION['id'];
    $donid=$_GET['donid'];
    
    $sql12="INSERT into volunteer where userid=$id AND donid=$donid";
    mysqli_query($con,$sql12);
    header('location: volunteerstatus.php?donid= $donid');
  }
?>

<div class="container">


      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3" style="color: red">Item Progress</h1>
        <p class="lead">On this page you can see the progress of your item. Click on "Item received" if you have received the item.</p>
        
      </header>
      <div class="row" style="color: red; font-weight: bold;">
        
        

      </div>
      <div class="row">
    <h2>Items in Progress</h2>
</div>
</div>
<?php 

       
      


       
      

        $myid= $_SESSION['id'];
      $sql="SELECT * from donationprogress where userrcvid=$myid AND progress='0'";
      $qry=mysqli_query($con,$sql);
      while ($result=mysqli_fetch_assoc($qry)) {
        
      
       


  ?>



<div class="container">

      
  <div class="row text-center">
  

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
           
            <div class="card-body">
              <h4 class="card-title">
              <?php echo $result['itemname']; ?> 
              </h4>
              <?php
                $usersendidd=$result['usersendid'];

                $sql99="SELECT fname,lname from login where id=$usersendidd";
                $qry99=mysqli_query($con,$sql99);
                $result99=mysqli_fetch_assoc($qry99);
              ?>
              <a href="profile.php?id=<?php echo $usersendidd; ?>">
              <p class="card-text">Sender : <?php echo $result99['fname'];
              echo "&nbsp";
              echo $result99['lname'];    ?></p>
              </a>
            </div>
            <div class="card-footer">
                <form action='donationconfirm.php?name="<?php  //echo $result['donid'];  ?>"' method='post'>

                



              <button type="submit" name="received" value="<?php echo $result['donid'];  ?>" class="btn btn-primary">Item Received</button>
                
                </form>


                


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