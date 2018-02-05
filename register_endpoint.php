<?php

	require 'connection.php';
	session_start();

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$sql = "INSERT INTO users (lname,fname,address,contact,email,username,password,role) VALUES ('$fname','$lname','$address','$contact','$email','$username','$password','regular')";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	$_SESSION['username'] = $username;
	$_SESSION['role'] = 'regular';
	header('location: menu.php');

?>