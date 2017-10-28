<?php 
		require_once('../config/database.php');

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "INSERT INTO user (firstname,lastname,username,password) VALUES ('$firstname','$lastname','$username','$password');";

	mysqli_query($conn,$sql);
 ?>