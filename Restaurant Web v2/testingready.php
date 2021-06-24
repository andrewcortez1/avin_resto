<?php
include "connection.php";
include "background.php";
echo '<style>
img {
 width : 400px;
 height : 300px;
}
h3{
	color : red;
	font-size : 25px;
}
h2 {
	color : yellow;
	font-size : 25px;
}
#denah{
	width : 1000px;
	height : 500px;
	margin-left : 20%;
}


</style>';
echo "<img src = 'denah.jpg'class = 'rounded mx-auto d-block' id = 'denah'>";
$get_data = mysqli_query($resto, "SELECT * FROM meja");
echo '<form action = "dine.php" method = "post">';
echo "<div class = 'row'>";
$counter = 0;
 echo '<form action = "dine.php" method = "post">';
  while ($row = mysqli_fetch_array($get_data)){
   echo "<div class = 'col-md-4'>";
   if ($row['status'] == "Ready"){
   	$counter++;
   	echo "<h2 style = 'text-align:center'>" .$row['no_meja'];
   	   	echo "<h2 style = 'text-align:center' >Status = " .$row['status'] . "</h3>";
   	   	  echo '
                <img src="yes.jpg " class = "rounded mx-auto d-block" name = '.$row['no_meja'].'>
                ';
          echo '<input type = "submit" name = '.$counter.' value = "Sit Here" id = "meja">';
	}
	else{
		$counter++;
		echo "<h3 style = 'text-align:center'>" .$row['no_meja'];
   		echo "<h3 style = 'text-align:center'>Status = " .$row['status'] . "</h3>";
   		echo '<img src="no.jpg " class = "rounded mx-auto d-block">';
   		echo "<h3 style = 'text-align:center'>" .$row['no_meja'];
	}
   echo "<br>";
   echo "<br>";
   echo "</div>";
 }
echo '</form>';

?>