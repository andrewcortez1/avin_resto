<?php
	include "background.php";
	include "connection.php";
	
	//echo ' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
	$count = mysqli_query($resto, "SELECT *FROM menu");
	$counter =0;
	while ($row = mysqli_fetch_array($count)){
		$counter++;
	}
	echo "<style>
	h3{
		color : aqua;
	}
	

	</style>";
	echo '
		        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		            <h3 class="navbar-text"style="margin-left : 14px; margin-right : 20px">Welcome , '.$_SESSION['name'].'</h3>
		            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		                <li class="nav-item">
		                    <a class ="nav-link " href="admin_page.php">View Makanan</a>
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
		                    <a class="nav-link Active" href="create_new_menu.php">Create New Menu</a>
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
	echo "<div class='d-flex justify-content-center'>";
	echo "<form method = 'post' action = 'input_menu.php'>";
	echo "<h3>Total Menu Count : " .$counter . "<br></h3></br>";
	$counter+=1;
	echo "<h3>Input no  :</h1>";
	//echo "<input type = 'text' name = 'no' value = ".$counter." disabled></br>";
	echo "<input type = 'text' name = 'no' value = ".$counter."></br>";
	echo "<h3>Input nama : </h1>";
	echo "<input type = 'text' name = 'nama' ></br>";
	echo "<h3>Input harga : </h1>" ;
	echo "<input type = 'text' name = 'harga'>";
	echo "<h3> Input Link Gambar  : </br>";
	echo "<input type = 'text' name = 'link'><br>";
	
	echo "<input type = 'submit' value = 'Submit Makanan' name = 'submit_makanan' id ='submitan'> ";
	
	echo "</form></div>";

?>