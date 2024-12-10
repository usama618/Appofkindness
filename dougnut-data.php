<?php
session_start();
//setting header to json
header('Content-Type: application/json');
include('connect.php');
//get connection



//query to get data from the table
$query = sprintf("SELECT * FROM doughnutdata");

//execute query
$result = mysqli_query($con,$query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);
?>