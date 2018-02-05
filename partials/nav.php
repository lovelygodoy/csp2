<nav class="navbar navbar-inverse" role="navigation" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php" id="brand"> FantastiKA</a>
        
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="collapse-navbar">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Shop Now</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
        <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
        <li><a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
        <?php
          echo isset($_SESSION['username']) ? '<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>' : '';
        ?>

        <?php

          if(isset($_SESSION['username'])) :
            echo "<li><a href='profile.php'>( Hi " .$_SESSION['username'] . "! ) </a></li>";
          else : endif; ?>
    </ul>
  </div>
</nav>


