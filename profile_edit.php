<?php

$index = $_GET['index'];

require 'connection.php';

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$contact = mysqli_real_escape_string($conn,$_POST['contact']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);



$sql = "UPDATE users SET 
		fname = '$fname',
		lname = '$lname',
		address = '$address',
		contact = '$contact',
		email = '$email',
		username = '$username',
		password = '$password'
		
		WHERE id='$index'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: profile.php');
?>