<?php
include "connection.php";
include "background.php";
echo '<style>
img {
 width : 400px;
 height : 300px;
}</style>';
$get_data = mysqli_query($resto, "SELECT * FROM meja");
	echo "<div class = 'row'>";
 while ($row = mysqli_fetch_array($get_data)){
 	echo $row['no_meja'];
 	echo '<div class col-md-4>';
 	if ($row['status'] =="Ready"){
 		echo '<a href="https://www.google.com">
				<img src="ready.jpg">
				</a>';
 		}
 	else{
 		echo "<img src = '!ready.jpg'";
 	}
 }
 echo '</div>';


?>