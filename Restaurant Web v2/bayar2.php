<?php
	session_start();
	$koneksi_bank = mysqli_connect("localhost", "root", "", "bank_db");
	$harga = $_SESSION['bayar'];
	$akun = $_POST['no_akun'];
	echo "Total Harga" .$harga;
	echo "Akun : " . $akun;

	mysqli_query($koneksi_bank, "update data set saldo = saldo -$harga where no_akun = $akun ");
	//kasi logo/background sukses
?>