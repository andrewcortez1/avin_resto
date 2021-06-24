<?php
include "background.php";
echo "takeaway.php";
echo '<style>
body {
          background-image: url("background.jpg");
          background-repeat: no-repeat;
          background-attachment: fixed; 
          background-size: 100% 100%;
    }
h3{
 color : aqua;
}
img {
 width : 400px;
 height : 300px;
}


    </style>';
$get_data = mysqli_query($resto, "SELECT * FROM menu");
  echo "<div class = 'row'>";
  while ($row = mysqli_fetch_array($get_data)){
   echo "<div class = 'col-md-4'>";
   echo "<h3 style = 'text-align:center'>" .$row['nama'];
   echo "<h3 style = 'text-align:center'>Harga = " .$row['harga'] . "</h3>";
   echo "<img class = 'rounded mx-auto d-block' src = ".$row['link'].">";

   echo "<br>";
   echo "<br>";
   echo "</div>";
  }
  echo "</div>";
?>