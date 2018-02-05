<?php
function display_title(){
	echo "Home Page";
}

function display_content(){ ?>


	<div class="myslide col-sm-6">
		  	<div id="myCarousel" class="carousel slide col-xs-12" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
			        <img src="assets/images/minidress1.jpg" alt="image1" style="width:100%; height:300px;">
			      </div>

			      <div class="item">
			        <img src="assets/images/minidress2.jpg" alt="image2" style="width:100%; height:300px;">
			      </div>
			    
			      <div class="item">
			        <img src="assets/images/shirt.jpg" alt="image3" style="width:100%; height:300px;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			</div>
	</div>


	<div class="myForm col-sm-6">
		<form class="form-horizontal col-xs-12" action="authenticate.php" method="POST">
		
			<div class="form-group">
			    <label class="control-label col-sm-4" for="username">Username:</label>
			    <div class="col-sm-8">
		      		<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
		    	</div>
		  	</div>

		  	<div class="form-group">
			    <label class="control-label col-sm-4" for="password">Password:</label>
			    <div class="col-sm-8"> 
		      		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
		    	</div>
		  	</div>

		 	<div class="form-group"> 
		    	<div class=" col-sm-8">
		        		<input type="checkbox">Remember me 	
		    	</div>
		  	</div>

		  	<div class="form-group"><br> 
		   		<div class="col-sm-offset-3 col-sm-10">
		      		<input type="submit" class="btn btn-success" name="login" value="Login"><br><br>
		    	</div>
		  	</div>
		</form>
	</div>

	<div class="lowerContent col-sm-12">
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<p>Disclaimer: No copyright infringement is intended. This is only for educational purposes and not for profit. Some asset/s used are not owned by the developer/s unless otherwise stated; the credit goes to the owner.</p><br><br><br>
	</div>

<?php
}

require "template.php";


?>