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
    background:url('img/mainback.jpg');
    padding:50px;
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
    
  
  .panel-footer{
    font-weight: bold;
    font-family: comic sans ms;
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
       
          
        </div>
      </div>
    </div>
  </div>

  

 <div class='container'>  
  <div class="row" style="padding-top: 10px;font-weight: bold;">
    Search by category
  </div>
   <div class="row" style="padding-top: 10px;">
   <form method="post">
    <select style="width: 400px;" name="category">
      <option value="food">Food</option>
      <option value="electronics">Electronics</option>
      <option value="Clothes">Clothes</option>
      <option value="furniture">Furniture</option>
      <option value="money">Money</option>
      <option value="blood">Blood</option>
      <option value="others">Others</option>
      <input type="submit" name="submit1" class="btn btn-primary">
    </select>
    </form>
    
  
 </div>
    <div class='row'>
    <?php
session_start();
 $myid=$_SESSION['id'];
 if (isset($_POST['submit1'])) {
    $category=$_POST['category'];
     $sql1="SELECT l.id,l.fname,l.lname,l.pno,d.details,d.item,d.numberofitems,d.userid,d.secarea,d.expiry,d.houseno,d.streetno,d.city,d.category,d.donid  from login l inner join donations d on l.id=d.userid WHERE d.userid!=$myid AND d.category='$category'";
      $qry1=mysqli_query($con,$sql1);
     while ($row1=mysqli_fetch_assoc($qry1)) {
     ?>


      <div class='col-sm-4'>
      <div class='panel panel-primary'>
  


    
        <div class='panel-heading' style="color: orange;"> <h1> <?php $row1['item']?> </h1></div>
        
        <!--<div class='panel-body'><img src='https://placehold.it/150x80?text=IMAGE' class='img-responsive' style='width:100%' alt='Image'></div> !-->
        <div class="panel-footer"><?php echo $row1['item']; ?></div>
        <div class="panel-footer"><?php echo $row1['details']; ?></div>
        <div class='panel-footer'> This Item expires on: <?php echo $row1['expiry']; ?></div>

        <div class='panel-footer'> Category : <?php echo  $row1['category']; ?></div>
        <div class='panel-footer'> Address : <?php echo $row1['secarea'];?> <?php echo $row1['city'];?></div>
        
      <div class='panel-footer'> Address : <?php echo $row1['id']; ?></div>
        <?php 
        echo $row1['userid'];

          ?>
        <div class='panel-footer'>  <a href="inbox1.php?rcvid=<?php echo $row1['userid'];?>" class="btn btn-primary"> Message </a>    </div>
        <div class='panel-footer'> 

                  <a href="getitem.php?userid=<?php   echo $row1['id'];?>&donid=<?php  echo $row1['donid'];  ?>" class="btn btn-primary">Get Item</a>

             </div>

      </div>
     </div>










     <?php   
        
      }
  

    exit();


    }
?>

</div>

  <div class='row'>
 









  <?php

      
      

      $sql="SELECT l.id,l.fname,l.lname,l.pno,d.details,d.item,d.numberofitems,d.userid,d.secarea,d.expiry,d.houseno,d.streetno,d.city,d.category,d.donid  from login l inner join donations d on l.id=d.userid WHERE d.userid!=$myid";

      $qry=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_assoc($qry)) {
          
     

        ?>
          



<div class='col-sm-4'>
      <div class='panel panel-primary'>
  


    
        <div class='panel-heading' style="color: orange;"> <h1> <?php $row['item']?> </h1></div>
        
       <!-- <div class='panel-body'><img src='https://placehold.it/150x80?text=IMAGE' class='img-responsive' style='width:100%' alt='Image'></div> !-->
        <div class="panel-footer" style="color: red;">Item Name: <?php echo $row['item']; ?></div>
        <div class="panel-footer"><?php echo $row['details']; ?></div>
        

        <div class='panel-footer'> Category : <?php echo  $row['category']; ?></div>
        <div class='panel-footer'> Address : <?php echo $row['secarea'];?> <?php echo $row['city'];?></div>
        <?php  $prid=$row['id']; ?>
      <div class='panel-footer'> Sender : <a href="profile.php?id=<?php echo $prid;  ?>">
        
        <?php 
            $sendderid=$row['id'];
          $sql2="SELECT * from login where id=$sendderid";
          $qry2=mysqli_query($con,$sql2);
          $row3=mysqli_fetch_assoc($qry2);
            echo $row3['fname'];
            echo "&nbsp";
            echo $row3['lname'];
          ?>

      </a></div>

       
        <div class='panel-footer'>  <a href="inbox1.php?userid=<?php echo $row['userid'];  


        ?>" class="btn btn-primary"> Message </a>    </div>
        <div class='panel-footer'> 

                  <a href="getitem.php?userid=<?php   echo $row['id'];?>&donid=<?php  echo $row['donid'];  ?>" class="btn btn-primary">Get Item</a>

             </div>

      </div>
     </div>
     <?php
    }
    ?>
    
  </div>
</div><br><br>

<div style="background:  #003366;
    padding: 20px 0;">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
        <div class="footer_copyright">
          <p style="color: white"> © Copyright, All Rights Reserved.</p>          
          
        </div>
      </div>
    </div>
  </div>

</body>
</html>