<?php
include 'db_connect.php';
if (isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	// echo $username." ".$password;
	$query = "SELECT * FROM users WHERE name = '$username' and encrypted_password = '$password'";

	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);

	if ($count == 1) {
		header('location: ../dashboard.php');
		$_SESSION ['username'] = $username;
	}else{
		header("location: ../index.html");
	}

	}
?>