<?php
session_start(); //starts session
if ($_SESSION['role']=='donor') { //checks if value stored in session['role'] is patient
	header('location:donor.php'); //redirects to patient.php page
}
elseif ($_SESSION['role']=='needy') { //checks if value stored in session['role'] is doctor
	header('location:doctor.php');

}
elseif ($_SESSION['role']=='voulanteer') { //checks if value stored in session['role'] is admin
	header('location:admin.php');
}

?>