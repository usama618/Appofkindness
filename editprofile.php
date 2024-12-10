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
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $phone=$_POST['phone'];
          $gender=$_POST['gender'];
          $email=$_POST['email'];
         // $city=$_POST['city'];
        //  $category=$_POST['category'];
         $id=$_SESSION['id'];
         // $lat=$_POST['lat'];
         // $lng=$_POST['lng'];

          $sql="UPDATE login set fname='$fname' where id=$id";
          mysqli_query($con,$sql);
          $sql1="UPDATE login set lname='$lname' where id=$id";
          mysqli_query($con,$sql1);
          $sql2="UPDATE login set pno='$phone' where id=$id";
          mysqli_query($con,$sql2);
          $sql3="UPDATE login set gender='$gender' where id=$id";
          mysqli_query($con,$sql3);
          $sql4="UPDATE login set email='$email' where id=$id";
          mysqli_query($con,$sql4);
          header('location: myprofile.php');

          
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
            $id=$_SESSION['id'];

              $sql11="SELECT * from login where id=$id";
              $qry11=mysqli_query($con,$sql11);
              while ($row11=mysqli_fetch_assoc($qry11)) {
               
            ?>
          
              <h1>Enter item you require</h1>
            <form class="form-mini" method="post">
                  <h3>First name</h3>
                <div class="form-row">
                    
                    <input type="text" name="fname" value="<?php echo $row11['fname'] ?>" >
                </div>
                    <h3>Last name</h3>
                <div class="form-row">
                    <input type="text" name="lname" value="<?php echo $row11['lname'] ?>" >
                </div>
                  <h3>Phone Number</h3>
                <div class="form-row">
                  <input type="text" name="phone" value="<?php echo $row11['pno'] ?>">
                </div>
                <h3>Gender</h3>
                <div class="form-row">
                  <input type="text" name="gender" value="<?php echo $row11['gender'] ?>">
                </div>
                <h3>Email</h3>
                <div class="form-row">
                  <input type="text" name="email" value="<?php echo $row11['email'] ?>">
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