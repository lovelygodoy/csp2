<?php
session_start();

	function display_title(){
	echo "Items Page";
}

	function display_content(){
	
		$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
		
		require 'connection.php';


		echo "<center><form class='category'><select id='select' name='category'><option disabled selected hidden>Select Category</option>";
		echo "<option>All</option>";
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$id = $row['id'];
			$category = $row['name'];
		
			echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
		}
		echo "</select>";
		echo "&nbsp<button class='btn btn-primary'>Search</button></form></center><br><br>";

		if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
			echo "<div id='add'><button class='btn btn-success' id='add_item'>Add Item</button></div><br>";
		}

		$sql = "SELECT * FROM items";
		$result = mysqli_query($conn,$sql);

		echo "<div class='row'  id='menu'>";
		while($item = mysqli_fetch_assoc($result)) {
			$index = $item['id'];

			if($filter == 'All' || $item['category_id'] == $filter){
				echo "<div id='items'>";
				echo "<div class='item_display col-xs-12 col-sm-3 ' style='border-style:groove; margin-bottom: 20px'><br><br>";

			if(!isset($_SESSION['username'])){
				echo "<div class='hovereffect'>";
				echo "<img src='".$item['image']."'>
				<div class='overlay'>
           		<h5>Please <a href='home.php'>Login</a> to buy this item</h5>
           		
        		</div>";
        		echo "</div>";
        	}
        	else {
        		echo "<img src='".$item['image']."'>";
        	}
				echo "<h5><strong>".$item['name']."</strong></h5>";
				echo "<small>".$item['description']."</small><br>";
				echo "<p>Price: Php".$item['price']."</p>";
		
				
				if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
					echo "<div class=btn-toolbar>";
					echo "<button class='btn btn-primary render_modal' data-toggle='modal' data-target='#myModal' data-index='$index'>Edit</button>";
					echo "<button class='btn btn-danger delete_modal' data-toggle='modal' data-target='#myModal' data-index='$index'>Delete</button><br><br>";
					echo "</div>";
				}
				else if(isset($_SESSION['username'])){	
					echo "<form method='POST' action='add_to_cart.php?index=$index'><br>";
					echo "<div class='input'>Quantity: <input type='number' name='quantity' min=0  placeholder='0'></div><br>";
					
					echo "<div class='btnAddCart'><button onclick='myFunction();' id='addToCart' class='btn btn-block btn-primary' data-index='$index'>Add to Cart</button></div><br><br>";
					
					echo "</form>";
				}
				echo "</div>"; 
				echo "</div>";
			}
		
		}
		echo "</div>";	

		
		echo'<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
			    	<div class="modal-content">
			    		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal">&times;</button>
			        		<h4 class="modal-title">FantastiKA</h4>
			      		</div>
			    		<div class="modal-body" id="modal-body"></div>
			    		<div class="modal-footer">    		
			    		</div>
			    	</div>
		  		</div>
			</div>';

	} 
	

	require "template.php";

	?>

	<script type="text/javascript">
		$("#add_item").click(function(){
			$.ajax({
				method: 'post',
				url: 'render_endpoint.php',
				data: {
					add : true,
				},
				success: function(data){
					$("#modal-body").html(data);
					$("#myModal").modal('show');
				}
			})
		})

		$(".render_modal").click(function(){
			var index = $(this).data('index')

			$.ajax({
				method: 'post',
				url: 'render_endpoint.php',
				data: {
					edit : true,
					index : index
				},
				success: function(data){
					$("#modal-body").html(data);
				}
			})
		})

		$(".delete_modal").click(function(){
			var index = $(this).data('index')
			$.ajax({
				method: 'post',
				url: 'delete_endpoint.php',
				data: {
					index : index
				},
				success: function(data){
					$("#modal-body").html(data);
				}
			})
		})

		
		function myFunction() {
   		 alert('Item added to Cart successfully!');
		}

	</script>