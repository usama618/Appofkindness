<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
 
  <style type="text/css">
  body{
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
        <h1 class="display-3" style="color: red">Item Progress</h1>
        <p class="lead">On this page you can see the progress of your item. Click on "Item received" if you have received the item.</p>
        
      </header>
      <div class="row" style="color: red; font-weight: bold;">
        
        *Note: You can ask for volunteers if you want the item delivered to your place. 

      </div>
      <div class="row">
    <h2>Volunteer Requests</h2>
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
              <p class="card-text">Sender : <?php echo $result['usersendid'];    ?></p>
            </div>
            <div class="card-footer">
                <form action='donationconfirm.php?name="<?php  //echo $result['donid'];  ?>"' method='post'>

                



              <button type="submit" name="received" value="<?php echo $result['donid'];  ?>" class="btn btn-primary">Item Received</button>
                
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