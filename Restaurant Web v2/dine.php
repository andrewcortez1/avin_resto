<?php
include "background.php";

echo '<script src = "../bootstrap/js/bootstrap.min.js"></script>';
echo'<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="../jQuery.js"></script>';
echo "<style>
h3{
	color : aqua;
}
img {
 width : 400px;
 height : 300px;
}
</style>";
echo "hai";
$get_data = mysqli_query($resto, "SELECT * FROM menu");
$counter = 0;
  echo "<div class = 'row'>";
  while ($row = mysqli_fetch_array($get_data)){
    $counter++;
   echo "<div class = 'col-md-4'>";
   echo "<h3 style = 'text-align:center'>" .$row['nama'];
   echo "<h3 style = 'text-align:center'>Harga = " .$row['harga'] . "</h3>";
   echo "<img class = 'rounded mx-auto d-block' src = ".$row['link'].">";
   echo "<br>";
   echo "<br>";
   echo '<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>';

echo '
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$row[0].'</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">'.$row['link'].'
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
echo '<input type="text" id="points" name='.$row[0].' step="1">';
   echo "</div>";
  }
  echo "</div>";

?>