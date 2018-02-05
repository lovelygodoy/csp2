<?php
	function display_title(){
	echo "fantastika";
}

function display_content(){ ?>

	<div class="index">
		<a href="menu.php"><img src="assets/images/bg.jpg" style="width:100%; margin-bottom: 20px;">
	</div>

	<div class="shop" style="position: absolute; left: 40%; top: 50%; z-index: 1;">
		<img src="assets/images/shopNow.jpg" style="width: 40%;">
	</div>


<?php
}

require "template.php";


?>