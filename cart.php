<?php
session_start();

function  display_title(){
	echo "Cart";
}

function display_content(){
	require 'connection.php';


	if (isset($_SESSION['username'])){


	$total = 0;
		
	
	foreach ($_SESSION['cart'] as $index => $quantity) {
		$sql = "SELECT * FROM items WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);
		
		$subtotal = $price * $quantity; 
		$total += $subtotal; 
		echo "<div class='col-sm-4'>";
		echo "<img class='col-sm-4' src='$image'>";
		echo "<div style='text-align: center'>".$name."<br>";
		echo "Php" .$price."</div><br>";
		echo "</div>";	

		echo "<div class=' col-xs-12 col-sm-6'>
				<form method='post' action='add_to_cart.php?index=$index' style='float:right'>
				<h5>Subtotal: Php$subtotal</h5>
				Quantity:<input id='addCart' type='number' name='change_quantity' min=1 value='$quantity' style='width: 60px; height: 32px;'><br><br>
				<div><button class='btn btn-primary'>Confirm quantity</button>
				<a href='remove_item.php?index=$index'>
				<button type='button' class='btn btn-danger'>Remove item</button></a></div><br><br>
				</form>

			</div>";
		

	}
	if($total==0){
		echo "<div style='height:350px;'><p><h2>Your Cart is now Empty!</h2><i class='fa fa-shopping-cart fa-5x ' aria-hidden='true'></i><br><a class='btn btn-info' href='menu.php'>Shop Now!</a></p></div>";
	}
	else { 
		echo "<div class='col-sm-12'><h3>Total Price: Php $total</h3><br><br>";
		echo "<button class='checkout btn btn-success checkout_modal' data-toggle='modal' data-target='#myModal' data-index='$index' style='float:right'>Proceed to Checkout</button><br><br><br>";
		echo "</div>";
	}


}
else{
	echo "<p><h2>Cart is Empty!</h2><i class='fa fa-shopping-cart fa-5x ' aria-hidden='true'></i><br><a class='btn btn-info' href='menu.php'>Shop Now!</a><br><br>Please register then login your account <a href='home.php'>here</a> to enjoy shopping.<br>Thank you!</p>";
}

}

require 'template.php';

?>