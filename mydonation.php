<!DOCTYPE html>
<html>
<head>
	<title>My donations</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
 
  <style type="text/css">
  body{
    background:url('img/mainback.jpg');
  }
    #map{
      height: 500px;
      margin: 0;
    }
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  }
  </style>
</head>
<body>
<?php
  include('connect.php');
  include('menu.php');
?>




<div class="container">
  
  <div>
    <div class="container">
    
      <div class="row">
        <div class="jumbotron" id="banner">
          
        </div>
      </div>
    </div>
  </div>
  

 <div class='container'> 
 <div class="row">
      <h2>Items Available for Donation</h2>
    </div>   
  <div class='row'>
  
  
  	<div class="container">
  
  <div>
    <div class="container">
      <div class="row">
       
          
        </div>
      </div>
    </div>
  </div>
  

 <div class='container'>    
  <div class='row'>
 









  <?php

      session_start();
      $myid=$_SESSION['id'];

       $sql="SELECT l.id,l.fname,l.lname,l.pno,d.donid,d.details,d.item,d.numberofitems,d.secarea,d.expiry,d.houseno,d.streetno,d.city,d.category  from login l inner join donations d on l.id=d.userid where l.id=$myid ";

      $qry=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_assoc($qry)) {
          
     

        ?>
          



<div class='col-sm-4'>
      <div class='panel panel-primary'>
  


    
        <div class='panel-heading' style="color: orange;"> <h1> <?php $row['item']?> </h1></div>
        <div class="panel-body"><a href="updateitem.php?donid=<?php echo $row['donid'];?>&id=<?php echo $row['id']; ?>" class="btn btn-primary">Update Item</a></div>
        <div class="panel-body"><a href="deleteitem.php?donid=<?php echo $row['donid'];?>&id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete item</a></div>
        
        <div class="panel-footer">Item Name: <?php echo $row['item']; ?></div>
        <div class="panel-footer">Details: <?php echo $row['details']; ?></div>

        <div class='panel-footer'> Category : <?php echo  $row['category']; ?></div>
        <div class='panel-footer'> Address : <?php echo $row['secarea'];?> <?php echo $row['city'];?></div>
        

        

      </div>
     </div>
     <?php
    }
    ?>
    
  </div>
</div>































  </div>
  <div class="row">
    <h2>Donated Items Progress</h2>
  </div>
  
  
    <?php

        $sql11="SELECT * from donationprogress where usersendid=$myid";
        $qry11=mysqli_query($con,$sql11);
        while ($result11=mysqli_fetch_assoc($qry11)) {
          
            ?>



              <div class='col-sm-4'>
      <div class='panel panel-primary'>
  


    
        <div class='panel-heading' style="color: orange;"> <h1> <?php $result11['itemname']?> </h1></div>
        
        <div class='panel-body'><img src='https://placehold.it/150x80?text=IMAGE' class='img-responsive' style='width:100%' alt='Image'></div>
        <div class="panel-footer"><?php
        $idd=$result11['userrcvid']; 
          $sql12="SELECT * from login where id=$idd";
          $qry12=mysqli_query($con,$sql12);
          $row12=mysqli_fetch_assoc($qry12);


        echo $row12['fname'];
        echo "&nbsp";
        echo $row12['lname']; ?></div>
        <div class="panel-footer"><?php //echo $row['details']; ?></div>

        <div class='panel-footer'>Status: <div style="color: red;"><?php
                 if ($result11['progress']=='1') {
                        echo "completed";
                      }
                      elseif ($result11['progress']=='0') {
                        echo "In progress";
                      }

            ?></div></div>
        <div class='panel-footer'> Address : <?php //echo $row['secarea'];?> <?php echo $row['city'];?></div>
        

        

      </div>
     </div>

            <?php

        }


    ?>


</div><br><br>

<footer class="container-fluid text-center">
  
</footer>

</body>
</html>