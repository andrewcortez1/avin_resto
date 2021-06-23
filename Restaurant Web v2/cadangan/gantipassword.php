<?php
session_start();
include "connection.php";
$session_name = $_SESSION['name'];
$pass = $_POST['password'];
echo $pass;	

if (isset($_POST['username'])){
	if ($_POST['username'] == $session_name){
		mysqli_query($resto, "update admin set password ='$pass' where username = '$session_name'");
		header('Location: setting_account.php');
	}
	else {
		echo "Your name doesn't match your login information";
	}
}
?>