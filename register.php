<?php
	function display_title(){
		echo "Register Page";
	}

	function display_content(){ ?>
	

		<div id="form col-sm-8">
		<form class="form-horizontal col-xs-12" action="register_endpoint.php" method="POST">
			<div class="form-group col-xs-12">
		    	<label class="control-label col-sm-4" for="fname">First Name:</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name" required>
		    	</div>
		  	</div>

		  	<div class="form-group col-xs-12">
		    	<label class="control-label col-sm-4" for="lname">Last Name:</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name" required>
		    	</div>
		  	</div>


		  	<div class="form-group col-xs-12">
		    	<label class="control-label col-sm-4" for="address">Address:</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="address" name="address" placeholder="Enter delivery address" required>
		    	</div>
		  	</div>

		  	<div class="form-group col-xs-12">
		    	<label class="control-label col-sm-4" for="contact">Contact Number:</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="contact" name="contact" placeholder="+639xx-xxx-xxxx" required>
		    	</div>
		  	</div>

		  	<div class="form-group col-xs-12">
		    	<label class="control-label col-sm-4" for="email">Email Address:</label>
		    	<div class="col-sm-8">
		      		<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
		    	</div>
		  	</div>

		  	<div class="form-group col-xs-12">
			    <label class="control-label col-sm-4" for="username">Username:</label>
			    <div class="col-sm-8">
		      		<input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
		      		<span id="username_error"></span>
		    	</div>
		  	</div>

		  	<div class="form-group col-xs-12">
			    <label class="control-label col-sm-4" for="password">Password:</label>
			    <div class="col-sm-8"> 
		      		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
		    	</div>
		  	</div>

		  	<div class="form-group col-xs-12">
			    <label class="control-label col-sm-4" for="cpassword">Confirm Password:</label>
			    <div class="col-sm-8"> 
		      		<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password">
		      		<span id="pw_error"></span>
		   		 </div>
		  		</div>

		  	<div class="form-group col-xs-12"> 
		   		<div class="col-sm-offset-2 col-sm-10">
		      		<input type="submit" id="submit" class="btn btn-success" onclick="myfunction();"  name="register" value="Register" disabled>
		    	</div>
		  	</div>
		</form>
	</div>


	<script type="text/javascript">
		

		$('input[name=username]').on('input', function(){
			var username = $('input[name=username]').val()
			$.ajax({
				method: 'post',
				url: 'authenticate.php',
				data: {
					register : true,
					username : username
				},
				success: function(data){
					if(data=='invalid'){
						$('#username_error').css('color','red')
						$('#username_error').html('username already exists')
					} else if(data=='valid'){
						$('#username_error').css('color','green')
						$('#username_error').html('username available')		
					}
				}
			})
			
		})		

		$('input[name=cpassword]').on('input', function(){
			if($('input[name=password]').val() != $('input[name=cpassword]').val()){
				$('input[name=register]').attr('disabled',true)
				$('#pw_error').css('color','red')
				$('#pw_error').html('passwords do not matched')
			} else {
				$('input[name=register]').removeAttr('disabled')
				$('#pw_error').css('color','green')
				$('#pw_error').html('passwords matched')
			}
		})


		function myfunction() {
   		 alert('Your account is already registered!');
		}
		
	</script>

	<?php 
		} 

		require "template.php";
	?>
