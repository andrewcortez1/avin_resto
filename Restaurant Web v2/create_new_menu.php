<?php
	include "connection.php";

	$count = mysqli_query($resto, "SELECT *FROM menu");
	$counter =0;
	while ($row = mysqli_fetch_array($count)){
		$counter++;
	}
	
	echo "Total Menu Count : " .$counter . "<br>";
	echo "<form method = 'post' action = 'input_menu.php'>";
	echo "Input no Makanan ";
	echo "<input type = 'text' name = 'no'></br>";
	echo "Input nama Makanan: ";
	echo "<input type = 'text' name = 'nama'></br>";
	echo "Input harga makanan: ";
	echo "<input type = 'text' name = 'harga'>";
	
	echo "<input type = 'submit' value = 'Submit'> ";
	echo "</form>";

?>