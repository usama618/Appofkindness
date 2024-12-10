<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
    <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>


</head>
<body>
<?php
	include('menu.php');
	include('connect.php');
  session_start();





$myid = $_SESSION['id'];
  if (isset($_POST['img'])) {
    if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
      echo "Please Select an Image.";
    }else{
     $image = addslashes($_FILES['image']['tmp_name']);
      $name=addslashes($_FILES['image']['name']);
      $image = file_get_contents($image);
      $image = base64_encode($image);
      saveimage($name,$image);
    }
  } 
  function saveimage($name,$image){
    $myid=$_SESSION['id'];
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
    $con=mysqli_connect("localhost","root","","appofkindness");
    $sql= "INSERT into images(image,userid) values ('$image','$myid')";
    print_r($sql);
    //exit();
    $result = mysqli_query($con, $sql);
    if ($result) {
      echo "<br>Image is Uploaded";
    }else{
      echo "<br>Image is not uploaded";
    }

  }

  function displayimage(){
    $myid=$_SESSION['id'];
    $con=mysqli_connect("localhost","root","","appofkindness");
    $sql= "SELECT * FROM images WHERE userid = '$myid' order by id DESC";
    //print_r($sql);
    $result = mysqli_query($con, $sql);
    //while($row = mysqli_fetch_array($result)){
    $row = mysqli_fetch_array($result);
      if ($row['userid']>'0') {
        echo '<img height="130" width="130" src="data:image;base64,'.$row['image'].'">';
      }else{
        echo '<img border="8px" src="img/agent1.jpg" max-width="200px" height="200px">';
      }
      
    //}
  }


























?>

	<div class="container" style="padding-top: 120px;">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading" style="background-color: #CCCC99; color: white; font-family: comic sans ms;">
             <?php
              	
              	$id=$_SESSION['id'];

              		$sql="SELECT id,fname,lname from login where id=$id ";
              		
              	$qry=mysqli_query($con,$sql);
              	while ($row=mysqli_fetch_assoc($qry)) {
              		
              	

              echo "<h3>";
              echo $row['fname'] ;
              echo "&nbsp";
              echo $row['lname'];
              echo "</h3>";
          }
             ?>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                 
                  <td class="image-circle image-responsive">
                 <?php displayimage(); ?>
                 </td>
                  <tbody>
                    <tr>
                      <td>
                        <form method="POST" enctype="multipart/form-data">
            <br>
          <input class="updbutton" style="width: 400px" type="file" name="image">
            <br><br>
          <input class="updbutton" type="submit" name="img" value="Upload">

</form>

                      </td>
                    </tr>
                  </tbody>

                 </div>
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Phone Number:</td>
                        <td><?php  

                          $sql2="SELECT * from login where id=$id";
                          $qry2=mysqli_query($con,$sql2);
                          $result=mysqli_fetch_assoc($qry2);
                          echo $result['pno'];

                        ?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $result['email'];  ?></td>
                      </tr>
                     
                   
                         
                             <tr>
                        <td>Gender</td>
                        <td>
                            <?php
                              echo $result['gender'];
                            ?>



                        </td>
                      </tr>

                        <tr>
                        <td></td>
                        <td>
                         
                         <?php

                          $sql3="SELECT * from donations where userid=$id";
                          $qry3=mysqli_query($con,$sql3);
                          if (mysqli_num_rows($qry3)>0)
                           {
                           $result2=mysqli_fetch_assoc($qry3);

                          echo $result2['city'];
                          }
                          else
                          {
                            echo "N/A";
                          }
                          

                         ?>

                        </td>
                      </tr>

                      <tr>
                        
                      </tr>                      


                     
                     
                    </tbody>
                  </table>
                  
                  <a href="mydonation.php" class="btn btn-primary">User Donations</a>
                  <a href="editprofile.php" class="btn btn-primary">Edit Profile</a>
                </div>
              </div>
            </div>
            
                 <div class="panel-footer">
                        
                           
                       
                    </div>
            
          </div>
        </div>
      </div>
      <div class="row" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px;">
        <h2>Donations history</h2>
      </div>
      <div class="row" style="padding-bottom: 50px;">
              <div id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
            </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/monthly.js"></script>
</body>

</html>