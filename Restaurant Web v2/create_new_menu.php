<?php
	include "background.php";
	include "connection.php";
	echo ' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
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

	echo "<div class='d-flex justify-content-center'>";
	echo "<form method = 'post' action = 'input_menu.php'>";
	echo "<h3>Total Menu Count : " .$counter . "<br></h3></br>";
	$counter+=1;
	echo "<h3>Input no Makanan </h1>";
	//echo "<input type = 'text' name = 'no' value = ".$counter." disabled></br>";
	echo "<input type = 'text' name = 'no' value = ".$counter."></br>";
	echo "<h3>Input nama Makanan: </h1>";
	echo "<input type = 'text' name = 'nama' ></br>";
	echo "<h3>Input harga makanan: </h1>" ;
	echo "<input type = 'text' name = 'harga'>";
	echo "<h3> Input Link Gambar makanan : </br>";
	echo "<input type = 'text' name = 'link'><br>";
	
	echo "<input type = 'submit' value = 'Submit'> ";
	echo "</form></div>";

?>