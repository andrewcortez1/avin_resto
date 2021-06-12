<?php
	include "connection.php";
	$get_no = $_POST['no'];
	$get_nama = $_POST['nama'];
	$get_harga = $_POST['harga'];
	$get_link = $_POST['link'];

	mysqli_query($resto, "INSERT INTO menu VALUES ('$get_no', '$get_nama', $get_harga, '$get_link')");
	echo "inputted";

?>