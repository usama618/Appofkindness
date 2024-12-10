<!DOCTYPE html>
<html>
<head>
  <title>request</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
 
  <style type="text/css">
    #map{
      height: 500px;
      margin: 0;
    }
  </style>
</head>
<body>
<?php
  include('connect.php');
  include('menu.php');
?>
<?php
  session_start();
        if (isset($_POST['submit'])) {
          $item=$_POST['item'];
          $number=$_POST['number'];
          $details=$_POST['details'];
          $category=$_POST['category'];
          //$email=$_POST['email'];
         // $city=$_POST['city'];
        //  $category=$_POST['category'];
         $donid=$_GET['donid'];
         // $lat=$_POST['lat'];
         // $lng=$_POST['lng'];

          $sql="UPDATE donations set item='$item', numberofitems='$number', details='$details', category='$category' where donid=$donid";
          //print_r($sql);
          //exit();
          mysqli_query($con,$sql);
          
          header('location: mydonation.php');

          
         // $qry=mysqli_query($con,$sql);
          //$sql1="INSERT into requestlocation(userid,lat,lng) values('$id','$lat','$lng')";
          //$qry1=mysqli_query($con,$sql1);
         // header('location:confirmation.php');



        }



?>




<div class="container">
<div class="row">
  
  

</div>
<div class="row"></div>

<div class="main-content">

        <!-- You only need this form and the form-mini.css -->

        <div class="form-mini-container">

            <?php
            $donid=$_GET['donid'];

              $sql11="SELECT * from donations where donid=$donid";
              $qry11=mysqli_query($con,$sql11);
              while ($row11=mysqli_fetch_assoc($qry11)) {
               
            ?>
          
              <h1>Enter item you require</h1>
            <form class="form-mini" method="post">
                  <h3>Item name</h3>
                <div class="form-row">
                    
                    <input type="text" name="item" value="<?php echo $row11['item'] ?>" >
                </div>
                    <h3>Number of items</h3>
                <div class="form-row">
                    <input type="text" name="number" value="<?php echo $row11['numberofitems'] ?>" >
                </div>
                  <h3>details</h3>
                <div class="form-row">
                  <input type="text" name="details" value="<?php echo $row11['details'] ?>">
                </div>
                <h3>Category</h3>
                <div class="form-row">
                  <select name="category"> 
                    <option selected disabled><?php echo $row11['category']; ?></option>
                    <option value="food">Food</option>
                    <option value="clothes">Clothes</option>
                    <option value="electronics">Electronics</option>
                    <option value="furniture">Furtinure</option>
                    <option value="money">Money</option>
                    <option value="blood">Blood</option>
                    <option value="others">Others</option>
                  </select>
                </div>
                
                
        
                

                
                
                <div class="form-row form-last-row">
                    <button type="submit" name="submit">Submit Form</button>
                </div>

            </form>
        </div>

        <?php
          }

            ?>


    </div>
    
    
    
 
    </div>

</div>

</body>
</html>