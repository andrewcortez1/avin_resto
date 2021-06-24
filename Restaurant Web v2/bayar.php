<?php
	include "connection.php";
	session_start();
	$koneksi_bank = mysqli_connect("localhost", "root", "", "bank_db");
		
	echo "<form action = 'bayar2.php' method = 'post'>";
	$_SESSION['bayar'] = $_POST['pay'];
	$tot_harga = $_POST['pay'];
	echo $_SESSION['bayar'];
	
	for ($i=0; $i<5;$i++){
		echo "</br>";
	}

	echo "No Akun Bank <input type = 'text' name = 'no_akun'>";
	echo "<input type = 'submit' name = 'pembayaran' value = 'Bayar'>";
	echo "</form>";
?>