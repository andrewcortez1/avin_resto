<?php
	session_start();
	if (isset($_POST['signin'])){
		$_SESSION['name']=$_POST['username'];
		$_SESSION['pass']=$_POST['password'];
		header("Location: admin_page.php");
	}
?>