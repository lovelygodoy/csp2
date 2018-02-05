<?php

	require 'connection.php';

	if(isset($_POST['add'])){
		echo "<div class='row'>";
		echo "<div class='col-xs-4 item_display'><form action='add_item.php' method='post' enctype='multipart/form-data'>";
		echo "Name: <input type='text' name='name'><br><br>";
		echo "Description: <textarea name='description'></textarea><br>";
		echo "Image: <input type='file' name='image'><br>";
		echo "Price:Php<input type='number' name='price' min=0 ><br><br>";
		echo "<select name='category'><option>--Select Category</option>";
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			echo "<option value='$id'>$name</option>";
		}
		echo "</select><br><br>";
		echo "<div class='btn-toolbar'>";
		echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='Cancel'>";
		echo "<input type='submit' name='submit' class='btn btn-success' value='Add Item'>";
		echo "</div>";
		echo "</form></div></div>";

	}

	if(isset($_POST['edit'])){
		$index = $_POST['index'];
		$sql = "SELECT * FROM items WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);

		echo "<div class='row'>";
		echo "<div class='col-xs-4 item_display'><form action='edit.php?index=$index' method='post'><img src='$image'>";
		echo "Name: <input type='text' name='name' value='$name'><br><br>";
		echo "Description: <textarea name='description'>$description</textarea><br><br>";
		echo "Price:Php <input type='number' name='price' min=0 value='$price'><br><br>";
		echo "<div class='btn-toolbar'>";
		echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='Cancel'>";
		echo "<input type='submit' class='btn btn-success' value='Save'>";
		echo "</div>";
		echo "</form></div></div>";
	}	
?>