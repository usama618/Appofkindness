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
    background:url('img/mainback.jpg');
    padding:50px;

}
.inbox-head h2 {
    display: inline-block;
    font-weight: 300;
    margin: 0;
    padding-top: 6px;
}
.inbox-head .sr-input {
    border: medium none;
    border-radius: 4px 0 0 4px;
    box-shadow: none;
    color: #8a8a8a;
    float: left;
    height: ;
    padding: 0 10px;
}
.inbox-head .sr-btn {
    background: none repeat scroll 0 0 #00a6b2;
    border: medium none;
    border-radius: 0 4px 4px 0;
    color: #fff;
    height: 20px;
    padding: 0 20px;
}

 </style>

</head>
<body>
<?php
	include('connect.php');
  include('menu.php');
?>
<?php
			
		$donid=$_POST['received'];
		$sql="UPDATE donationprogress SET progress='1' where donid=$donid";
		mysqli_query($con,$sql);



?>
		<div class="container" style="padding-top: 80px;">
			<div class="row">
				<h3>Thankyou for using our application. Come again for donations.



				</h3>
				<a href="donationsprogress.php">Go back</a>
			</div>
		</div>		

</body>
</html>