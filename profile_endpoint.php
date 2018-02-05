<?php  

if(isset($_POST['edit'])){

	require 'connection.php';
		$index = $_POST['index'];
		$sql = "SELECT * FROM users WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);

		
		echo "<form action='profile_edit.php?index=$index' method='post'>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='fname'>First Name:</label><input class='form-control' type='text' name='fname' value='$fname'><br>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='lname'>Last Name:</label><input class='form-control' type='text' name='lname' value='$lname'><br>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='address'>Address:</label><input class='form-control' type='text' name='address' value='$address'><br>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='contact'>Contact:</label><input class='form-control' type='text' name='contact' value='$contact'><br>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='email'>Email:</label><input class='form-control' type='text' name='email' value='$email'><br>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='username'>Username:</label><input class='form-control' type='text' name='username' value='$username'><br>";
		echo "</div>";
		echo "<div class='form-group'>";
		echo "<label class='control-label' for='password'>Password:</label><input class='form-control' type='password' name='password' value='$password'><br>";
		echo "</div>";

		echo "<div class=btn-toolbar>";
		echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='Cancel'>";
		echo "<input type='submit' class='btn btn-success' value='Save'>";
		echo "</div>";
		echo "</form>";

	}	

	?>