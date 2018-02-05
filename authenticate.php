<?php
session_start();
require 'connection.php';

if(isset($_POST['login'])){
	$username = $_POST['username']; 
	$password = sha1($_POST['password']); 

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql); 

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $row['role'];
		header('location: menu.php');
	} else {
		echo "failed to login. incorrect login credentials.";
		echo " please login again <a href='home.php'>here</a>";	
	}
}

if(isset($_POST['register'])){
	$username = $_POST['username'];
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		echo "invalid";
	} else {
		echo "valid";
	}
}

?>