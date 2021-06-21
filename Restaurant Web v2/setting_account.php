<?php
	include "background.php";	
	echo '
		        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		            <h3 class="navbar-text"style="margin-left : 14px; margin-right : 20px">Welcome , '.$_SESSION['name'].'</h3>
		            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		                <li class="nav-item">
		                    <a class ="nav-link active " href="#">View Makanan</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class ="nav-link " href="view_minuman.php">View Minuman</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="setting_account.php">Setting Account</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link " href="about.php">About</a>
		                  </li>
		                   <li class="nav-item">
		                    <a class="nav-link" href="create_new_menu.php">Create New Menu</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="logout.php">Logout</a>
		                  </li>
		        </nav><br><br>';
?>