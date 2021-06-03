<?php
session_start();
echo'<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../jquery-3.6.0.min.js"></script>';

require_once "connection.php";
echo '<style>
body {
          background-image: url("background.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }
    </style>';

if (isset($_SESSION['name'])){
	$username=$_SESSION['name'];
	$password=$_SESSION['pass'];
	$query=mysqli_query($connection,"select * from admin where username='$username' and password='$password'");
	$count=mysqli_num_rows($query);
	if ($count == 1){
		echo '<div class="container">
		        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		            <h3 class="navbar-text"style="margin-left : 14px; margin-right : 20px">Welcome , '.$_SESSION['name'].'</h3>
		            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		                <li class="nav-item">
		                    <a class ="nav-link active" href="admin.php">View Pesanan</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="setting_account.php">Setting Account</a>
		                  </li>
		                 
		                  <li class="nav-item">
		                    <a class="nav-link" href="logout.php">Logout</a>
		                  </li>
		        </nav>';
	}
	else {
		header("location:admin.php");
	}
}
?>