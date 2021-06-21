<?php
session_start();
include "connection.php";
$session_name = $_SESSION['name'];

if (isset($_POST['username'])){
	if ($_POST['username'] == $session_name){
		echo "Yes";
	}
	else {
		echo "Your name doesn't match your login information";
	}
}
?>