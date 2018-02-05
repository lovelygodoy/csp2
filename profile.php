<?php
session_start();

	function display_title(){
	echo "Profile";
}


function display_content(){
	require 'connection.php';

	$username = $_SESSION['username'];
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($conn,$sql);
	
	echo "<div class='row'>";
	while($user = mysqli_fetch_assoc($result)) {
	$index = $user['id'];
	extract($user);

	if(isset($_SESSION['username'])){
		
		echo "<div style='height: 100px;'><button id='profileButton' class='btn btn-primary render_modal' data-toggle='modal' data-target='#myModal' data-index='$index'>Edit</button></div>";

		echo "<div class='profile col-sm-8'><form action='profile_edit.php?index=$index' method='post'>";
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

		echo "<br><br></div>";			
	}

	echo'<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
				    	<div class="modal-content">
				    		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal">&times;</button>
				        		<h4 class="modal-title">Modal Header</h4>
				      		</div>
				    		<div class="modal-body" id="modal-body">

				    		</div>
				    		<div class="modal-footer">
				        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				    		</div>
				    	</div>
			  		</div>
				</div>';


	}
}	
			

	require "template.php";

 ?>
 <script type="text/javascript">

 $(".render_modal").click(function(){
			var index = $(this).data('index')

			$.ajax({
				method: 'post',
				url: 'profile_endpoint.php',
				data: {
					edit : true,
					index : index
				},
				success: function(data){
					$("#modal-body").html(data);
				}
			})
		})

 </script>