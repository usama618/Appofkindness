<?php
include('connect.php');
$sql= "SELECT * FROM images WHERE userid = '8'";
print_r($sql);
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
      if ($row['userid']>0) {
        echo '<img height="300" width="300" src="data:image;base64,'.$row['image'].'">';
      }else{
        echo '<img border="8px" src="img/agent1.jpg" max-width="200px" height="200px">';
      }
      
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" name="image" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit">
    </form>
</body>
</html>