<?php
	include('connect.php');
	$donid=$_GET['donid'];
	$user=$_GET['id'];
	$sql="DELETE from donorlocation where userid=$user AND donid=$donid";
	$qry=mysqli_query($con,$sql);

	//print_r($sql);
	$sql1="DELETE from donations where donid=$donid AND userid='$user'";
	$qry1=mysqli_query($con,$sql1);

	header('location:mydonation.php');

	//print_r($sql);

?>