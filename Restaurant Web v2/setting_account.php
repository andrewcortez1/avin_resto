<?php
echo "<style>
#kasiwarna {
	color : aqua;
}
h2{
    	color : red;
    	font-size : 15px;
    	text-align : center;
  	}
#suksesganti{
  	color : green;
  	text-align : center;
  }
</style>";
	include "background.php";	
	include "connection.php";
	echo '
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <h3 class="navbar-text"style="margin-left : 14px; margin-right : 20px">Welcome , '.$_SESSION['name'].'</h3>
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a class ="nav-link  " href="admin_page.php">View Makanan</a>
                    </li>
                    <li class="nav-item">
                      <a class ="nav-link " href="#">View Minuman</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="setting_account.php">Setting Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="about.php">About</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="create_new_menu.php">Create New Menu</a>
                    </li>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="create_new_minuman.php">Create New Drink</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="ajaxchange.php">Change Harga</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="billing.php">Billing Page</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
          </nav><br><br>';
          echo '<style>
          h3{
			 color : aqua;
			}</style>';
          echo '<h3 align = "middle"> Setting Account </h3>';
          echo '<div class="container">	
		<center>
		<form method="post">	
		<div class="bg-transparent p-5 rounded-lg m-3" style="width: 700px;">
			<h1 class="display-4" style = "color : aqua">AVinResto Admin</h1>
			<br><br>
			<div class="mb-3 row">
				<label for="Username" class="col-sm-4 col-form-label" id = "kasiwarna">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="username" placeholder="Username" value = '.$_SESSION['name'].' >
				</div>
			</div>
			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-4 col-form-label" id = "kasiwarna">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<br><br>
			<div class="mb-3 row">
				<div class="col-sm-6 offset-md-3">
				<button type="submit" class="btn btn-primary" name="signin">Enter</button>
				</div>
			</div>
		</div>
		</form>
		</center>	
	</div>';

	if (isset($_POST['signin'])){
		$session_name = $_SESSION['name'];
		$pass = $_POST['password'];
		if ($_POST['username'] == $session_name){
			mysqli_query($resto, "update admin set password ='$pass' where username = '$session_name'");
			echo "<h2 id = 'suksesganti'> Password Terganti </h3>";
		}
		else {
			echo "<h2>Username dengan setting account tidak sesuai</h2>";
		}
	}

?>